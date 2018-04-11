@extends('layouts.master')
@section('content')
    @include('survey.editSurvey')
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header"><i class="fa fa-file-text-o"></i>TrotroTv</h2>
            <ol class="breadcrumb">
                <li><i class="fa fa-home"></i><a href="/">Home</a></li>
                <li><i class="icon_document_alt"></i>Surveys</li>
            </ol>
        </div>
    </div> <div class="row">
        <div class="col-lg-12">
            <section class="panel panel-default">
                <div class="panel panel-default">
                    <div class="panel-heading">Survey Information</div>
                    <div class="panel-body" id="add-class-info">
                        <table class="table" id="investTable">
                            <thead>
                            <tr>
                                <th>BRAND NAME</th>
                                <th>QUESTION</th>
                                <th>ANSWER</th>
                                <th>UPLOADED</th>
                                <th>TIMESTAMP</th>
                                <th>USER</th>
                                <th>RESPONDENT NAME</th>
                                <th>RESPONDENT TEL. NUMBER.</th>
                                <th>RESPONDNET EMAIL</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($surveys as $key => $s)
                                <tr>
                                    <td>{{$s->brand}}</td>
                                    <td class="txt-oflo">{{$s->question}} </td>
                                    <td class="txt-oflo">{{$s->answer}} </td>
                                    <td class="txt-oflo">{{$s->uploaded}} </td>
                                    <td class="txt-oflo">{{$s->timestamp}} </td>
                                    <td class="txt-oflo">{{$s->user}} </td>
                                    <td class="txt-oflo">{{$s->respondent_name}} </td>
                                    <td class="txt-oflo">{{$s->respondent_tel_number}} </td>
                                    <td class="txt-oflo">{{$s->respondent_email}} </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-body" id="add-survey-links">
                        {{$surveys->links()}}
                        <form action="{{route('exportSurveys')}}" enctype="multipart/form-data">
                            <button class="btn btn-success" type="submit">Export Survey</button>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </div>

@endsection
@section('script')
    <script type="text/javascript">
        // alert("Hello! I am an alert box!!");
        showSurveyInfo()
        function showSurveyInfo()
        {
            var data = $('#add-class-info').serialize();
            console.log(data);
            $.get("{{route('showSurveyInfo')}}", data, function (data) {
                $('#add-class-info').empty().append(data);
            });
        }
        $(document).on('click', '.survey-edit', function (e) {
            $('#survey-show').modal('show');
            var id = $(this).val();
            $.get("{{route('editSurvey')}}", {id:id}, function (data) {
                console.log(data)

                $('#survey_id_edit').val(data.id);
                $('#brand_name').val(data.brand);
                $('#question').val(data.question);
                $('#answer').val(data.answer);
                $('#uploaded').val(data.uploaded);
                $('#timestamp').val(data.timestamp);
                $('#respondent_name').val(data.respondent_name);
                $('#respondent_tel_number').val(data.respondent_tel_number);
                $('#respondent_email').val(data.respondent_email);
            });
        });
        $('.btn-update-survey').on('click', function (e) {
            e.preventDefault();
            var data = $('#frm-update-survey').serialize();
            $.post("{{route('updateSurvey')}}", data, function (data) {
                showSurveyInfo(data.brand);
                $('#survey-show').modal('hide');
                swal('Trotro TV',
                    'Survey updated successfully',
                    'success');

            }).fail(function (data) {
                console.log(data);
                var responseJSON = data.responseJSON;
                var response = '';
                for (var key in responseJSON) {
                    if (responseJSON.hasOwnProperty(key)) {
                        response += "\n" + responseJSON[key] + "\n";
                    }
                }
                swal('Trotro TV',
                    response,
                    'error');
            });
        })
        $(document).on('click', '.del-survey', function (e) {
            var id = $(this).val();
            $.post("{{route('deleteReport')}}", {id:id}, function (data) {
                showReportInfo(data.brand);
                swal('Trotro TV',
                    'Selected Survey deleted successfully',
                    'success');

            }).fail(function (data) {
                console.log(data);
                var responseJSON = data.responseJSON;
                var response = '';
                for (var key in responseJSON) {
                    if (responseJSON.hasOwnProperty(key)) {
                        response += "\n" + responseJSON[key] + "\n";
                    }
                }
                swal('Trotro TV',
                    response,
                    'error');
            })
        })
    </script>
@endsection