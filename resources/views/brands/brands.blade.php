@extends('layouts.master')
@section('content')
    @include('brands.editBrandInfo')
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header"><i class="fa fa-file-text-o"></i>TrotroTv</h2>
            <ol class="breadcrumb">
                <li><i class="fa fa-home"></i><a href="/">Home</a></li>
                <li><i class="icon_document_alt"></i>Brands</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <section class="panel panel-default">
                <header class="panel-heading">
                    Add Brand
                </header>
                <form action="{{route('postBrand')}}" class="form-horizontal" id="frm-create-brand" method="POST">
                    <div class="panel-body" style="border-bottom: 1px solid #ccc;">
                        <div class="panel-panel-default">
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <label for="station-name">Brand Name</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" name = "brand_name" id = "brand_name" required>

                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <label for="location">Location</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" name = "location" id = "location" required>

                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <label for="cp">Contact Person</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" name = "contact_person" id = "contact_person" required>

                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <label for="cn">Contact Number</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" name = "contact_number" id = "contact_number" required>

                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <label for="email">email</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" name = "email" id = "location" required>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="panel-footer">
                        <button type="submit" class="btn btn-default ">Create Brand</button>
                    </div>
                </form>
                <div class="panel panel-default">
                    <div class="panel-heading">Brand Information</div>
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
        showBrandInfo();
        $('#frm-create-brand').on('submit', function (e) {
            e.preventDefault();
            var data = $(this).serialize();
            var url = $(this).attr('action');
            $.post(url, data,function (data) {
                showBrandInfo(data.brand_name);
                swal('Trotro TV',
                    'Brand '+data.brand_name+' saved successfully',
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
        function showBrandInfo()
        {
            var data = $('#frm-create-brand').serialize();
            console.log(data);
            $.get("{{route('showBrandInfo')}}", data, function (data) {
                $('#add-class-info').empty().append(data);
            });
        }
        $(document).on('click', '.brand-edit', function (e) {
            $('#brand-show').modal('show');
            var brand_id = $(this).val();
            $.get("{{route('editBrand')}}", {brand_id: brand_id}, function (data) {
                console.log(data)

                $('#brand_id_edit').val(data.brand_id);
                $('#brand-name').val(data.brand_name);
                $('#location-edit').val(data.location);
                $('#contact-person').val(data.contact_person);
                $('#contact-number').val(data.contact_number);
                $('#email-edit').val(data.email);
            });
        });
        $('.btn-update-brand').on('click', function (e) {
            e.preventDefault();
            var data = $('#frm-update-brand').serialize();
            $.post("{{route('updateBrand')}}", data, function (data) {
                showBrandInfo(data.brand_name);
                $('#brand-show').modal('hide');
                swal('Trotro TV',
                    'Brand '+data.brand_name+' updated successfully',
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
        $(document).on('click', '.del-brand', function (e) {
            var brand_id = $(this).val();
            $.post("{{route('deleteBrand')}}", {brand_id: brand_id}, function (data) {
                showBrandInfo(data.brand_name);
                swal('Trotro TV',
                    'Selected brand  deleted successfully',
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
