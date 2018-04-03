@extends('layouts.master')
@section('content')
    @include('users.editUser')
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header"><i class="fa fa-file-text-o"></i>TrotroTv</h2>
            <ol class="breadcrumb">
                <li><i class="fa fa-home"></i><a href="/">Home</a></li>
                <li><i class="icon_group"></i>Users</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <section class="panel panel-default">
                <header class="panel-heading">
                    Add User
                </header>
                <form action="{{route('postLogger')}}" class="form-horizontal" id="frm-create-logger" method="POST">
                    <div class="panel-body" style="border-bottom: 1px solid #ccc;">
                        <div class="panel-panel-default">
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <label for="station-name">Username</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" name = "username" id = "username" required>

                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <label for="location">Access Code</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" name = "code" id = "code" required>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer">
                        <button type="submit" class="btn btn-default ">Create User</button>
                    </div>
                </form>
                <div class="panel panel-default">
                    <div class="panel-heading">Users Information</div>
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
        showLoggerInfo();
        $('#frm-create-logger').on('submit', function (e) {
            e.preventDefault();
            var data = $(this).serialize();
            var url = $(this).attr('action');
            $.post(url, data,function (data) {
                showLoggerInfo(data.username);
                swal('Trotro TV',
                    'User '+data.username+' saved successfully',
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
        function showLoggerInfo()
        {
            var data = $('#frm-create-logger').serialize();
            console.log(data);
            $.get("{{route('showLoggerInfo')}}", data, function (data) {
                $('#add-class-info').empty().append(data);
            });
        }
        $(document).on('click', '.logger-edit', function (e) {
            $('#logger-show').modal('show');
            var id = $(this).val();
            $.get("{{route('editLogger')}}", {id:id}, function (data) {
                console.log(data)

                $('#logger_id_edit').val(data.id);
                $('#username_edit').val(data.username);
                $('#access_code_edit').val(data.code);
            });
        });
        $('.btn-update-logger').on('click', function (e) {
            e.preventDefault();
            var data = $('#frm-update-logger').serialize();
            $.post("{{route('updateLogger')}}", data, function (data) {
                showLoggerInfo(data.username);
                $('#logger-show').modal('hide');
                swal('Trotro TV',
                    'User '+data.username+' updated successfully',
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
        $(document).on('click', '.del-logger', function (e) {
            var id = $(this).val();
            $.post("{{route('deleteLogger')}}", {id: id}, function (data) {
                showLoggerInfo(data.username);
                swal('Trotro TV',
                    'Selected User  deleted successfully',
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
