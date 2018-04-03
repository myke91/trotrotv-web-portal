@extends('layouts.master')
@section('content')
    @include('answers.editAnswer')
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header"><i class="fa fa-file-text-o"></i>TrotroTv</h2>
            <ol class="breadcrumb">
                <li><i class="fa fa-home"></i><a href="/">Home</a></li>
                <li><i class="icon_document_alt"></i>Answers</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <section class="panel panel-default">
                <header class="panel-heading">
                    Add Answer
                </header>
                <form action="{{route('postAnswer')}}" class="form-horizontal" id="frm-create-answer" method="POST">
                    <div class="panel-body" style="border-bottom: 1px solid #ccc;">
                        <div class="panel-panel-default">
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <label for="station-name">Question</label>
                                    <div class="input-group">
                                        <select class="form-control" name = "question_id" id = "question_id" required>
                                            <option value="">---------------</option>
                                            @foreach($questions as $key =>$y)
                                                <option value="{{$y->id}}">{{$y->question}}</option>
                                            @endforeach
                                        </select>

                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <label for="location">Answer</label>
                                    <div class="input-group">
                                        <input type="text" name="answer" id="answer" class="form-control" required>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="panel-footer">
                        <button type="submit" class="btn btn-default ">Create Answer</button>
                    </div>
                </form>
                <div class="panel panel-default">
                    <div class="panel-heading">Answers Information</div>
                    <div class="panel-body" id="add-class-info">
                    </div>
                </div>
            </section>
        </div>
    </div>

@endsection
@section('script')
    <script type="text/javascript">
        showAnswerInfo();
        $('#frm-create-answer').on('submit', function (e) {
            e.preventDefault();
            var data = $(this).serialize();
            var url = $(this).attr('action');
            $.post(url, data,function (data) {
                showAnswerInfo(data.question_id);
                swal('Trotro TV',
                    'Answer '+data.answer+' saved successfully',
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
        function showAnswerInfo()
        {
            var data = $('#frm-create-answer').serialize();
            console.log(data);
            $.get("{{route('showAnswerInfo')}}", data, function (data) {
                $('#add-class-info').empty().append(data);
            });
        }
        $(document).on('click', '.answer-edit', function (e) {
            $('#answer-show').modal('show');
            var id = $(this).val();
            $.get("{{route('editAnswer')}}", {id:id}, function (data) {
                console.log(data)

                $('#answer_id_edit').val(data.id);
                $('#question_id_edit').val(data.question_id);
                $('#answer-edit').val(data.answer);
            });
        });
        $('.btn-update-answer').on('click', function (e) {
            e.preventDefault();
            var data = $('#frm-update-answer').serialize();
            $.post("{{route('updateAnswer')}}", data, function (data) {
                showAnswerInfo(data.question_id);
                $('#answer-show').modal('hide');
                swal('Trotro TV',
                    'Answer '+data.answer+' updated successfully',
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
        $(document).on('click', '.del-answer', function (e) {
            var id = $(this).val();
            $.post("{{route('deleteAnswer')}}", {id: id}, function (data) {
                showAnswerInfo(data.question_id);
                swal('Trotro TV',
                    'Selected Answer deleted successfully',
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
