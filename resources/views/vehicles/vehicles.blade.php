@extends('layouts.master')
@section('content')
    @include('vehicles.editVehicle')
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header"><i class="fa fa-file-text-o"></i>TrotroTv</h2>
            <ol class="breadcrumb">
                <li><i class="fa fa-home"></i><a href="/">Home</a></li>
                <li><i class="icon_document_alt"></i>Vehicles</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <section class="panel panel-default">
                <header class="panel-heading">
                    Add Station
                </header>
                <form action="{{route('postVehicle')}}" class="form-horizontal" id="frm-create-vehicle" method="POST">
                    <div class="panel-body" style="border-bottom: 1px solid #ccc;">
                        <div class="panel-panel-default">
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <label for="station-name">Vehicle Name</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" name = "vehicle" id = "vehicle" required>

                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <label for="location">Station</label>
                                    <div class="input-group">
                                        <select class="form-control" name = "station" id = "station" required>
                                            <option value="">---------------</option>
                                            @foreach($stations as $key =>$y)
                                                <option value="{{$y->station_name}}">{{$y->station_name}}</option>
                                            @endforeach
                                        </select>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="panel-footer">
                        <button type="submit" class="btn btn-default ">Create Vehicle</button>
                    </div>
                </form>
                <div class="panel panel-default">
                    <div class="panel-heading">Vehicle Information</div>
                    <div class="panel-body" id="add-class-info">
                    </div>
                </div>
            </section>
        </div>
    </div>

@endsection
@section('script')
    <script type="text/javascript">
        showVehicleInfo();
        $('#frm-create-vehicle').on('submit', function (e) {
            e.preventDefault();
            var data = $(this).serialize();
            var url = $(this).attr('action');
            $.post(url, data,function (data) {
                showVehicleInfo(data.vehicle);
                swal('Trotro TV',
                    'Vehicle '+data.vehicle+' saved successfully',
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
        function showVehicleInfo()
        {
            var data = $('#frm-create-vehicle').serialize();
            console.log(data);
            $.get("{{route('showVehicleInfo')}}", data, function (data) {
                $('#add-class-info').empty().append(data);
            });
        }
        $(document).on('click', '.vehicle-edit', function (e) {
            $('#vehicle-show').modal('show');
            var id = $(this).val();
            $.get("{{route('editVehicle')}}", {id:id}, function (data) {
                console.log(data)

                $('#vehicle_id_edit').val(data.id);
                $('#vehicle-name-edit').val(data.vehicle);
                $('#station_name_edit').val(data.station);
            });
        });
        $('.btn-update-vehicle').on('click', function (e) {
            e.preventDefault();
            var data = $('#frm-update-vehicle').serialize();
            $.post("{{route('updateVehicle')}}", data, function (data) {
                showVehicleInfo(data.vehicle);
                $('#vehicle-show').modal('hide');
                swal('Trotro TV',
                    'Station '+data.vehicle+' updated successfully',
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
        $(document).on('click', '.del-station', function (e) {
            var id = $(this).val();
            $.post("{{route('deleteVehicle')}}", {id: id}, function (data) {
                showVehicleInfo(data.vehicle);
                swal('Trotro TV',
                    'Selected Vehicle deleted successfully',
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
