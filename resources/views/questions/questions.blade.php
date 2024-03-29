@extends('layouts.master')
@section('content')
    @include('questions.editQuestion')
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header"><i class="fa fa-file-text-o"></i>TrotroTv</h2>
            <ol class="breadcrumb">
                <li><i class="fa fa-home"></i><a href="/">Home</a></li>
                <li><i class="icon_document_alt"></i>Questions</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <section class="panel panel-default">
                <header class="panel-heading">
                    Add Question
                </header>
                <form action="{{route('postQuestion')}}" class="form-horizontal" id="frm-create-question" method="POST">
                    <div class="panel-body" style="border-bottom: 1px solid #ccc;">
                        <div class="panel-panel-default">
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <label for="station-name">Question</label>
                                    <div class="input-group">
                                        <textarea rows="5" name="question" id="question" class="form-control" required></textarea>

                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <label for="location">Type</label>
                                    <div class="input-group">
                                        <select class="form-control type" name = "type"  required>
                                            <option value="">---------------</option>
                                            <option value="REPORT">REPORT</option>
                                            <option value="SURVEY">SURVEY</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <label for="location">Brand_name</label>
                                    <div class="input-group">
                                        <select class="form-control" name = "brand_name" id = "brand_name">
                                            <option value="">-------------</option>
                                            @foreach($brands as $key =>$b)
                                                <option value="{{$b->brand_name}}">{{$b->brand_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="panel-footer">
                        <button type="submit" class="btn btn-default ">Create Question</button>
                    </div>
                </form>
                <div class="panel panel-default">
                    <div class="panel-heading">Question Information</div>
                    <div class="panel-body" id="add-class-info">
                    </div>
                </div>
            </section>
        </div>
    </div>

@endsection
@section('script')
    <script type="text/javascript">
        // alert("Hello! I am an alert box!!");
        showQuestionInfo();
        $('#frm-create-question').on('submit', function (e) {
            e.preventDefault();
            var data = $(this).serialize();
            var url = $(this).attr('action');
            $.post(url, data,function (data) {
                showQuestionInfo(data.question);
                swal('Trotro TV',
                    'Question saved successfully',
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
            $(this).trigger('reset');
        });
        function showQuestionInfo()
        {
            var data = $('#frm-create-question').serialize();
            console.log(data);
            $.get("{{route('showQuestionInfo')}}", data, function (data) {
                $('#add-class-info').empty().append(data);
            });
        }
        $(document).on('click', '.question-edit', function (e) {
            $('#question-show').modal('show');
            var id = $(this).val();
            $.get("{{route('editQuestion')}}", {id:id}, function (data) {
                console.log(data)

                $('#question_id_edit').val(data.id);
                $('#question-edit').val(data.question);
                $('#type_edit').val(data.type);
                $('#brand_name_edit').val(data.brand_name);
            });
        });
        $('.btn-update-question').on('click', function (e) {
            e.preventDefault();
            var data = $('#frm-update-question').serialize();
            $.post("{{route('updateQuestion')}}", data, function (data) {
                showQuestionInfo(data.question);
                $('#question-show').modal('hide');
                swal('Trotro TV',
                    'Question updated successfully',
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
        $(document).on('click', '.del-question', function (e) {
            var id = $(this).val();
            $.post("{{route('deleteQuestion')}}", {id:id}, function (data) {
                showQuestionInfo(data.question);
                swal('Trotro TV',
                    'Selected Question deleted successfully',
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
        $(document).on('change', '.type', function (e) {
            $('#tarrif-name').html($('<option>').text('CHOOSE TARRIF'));
            })
    </script>
@endsection
