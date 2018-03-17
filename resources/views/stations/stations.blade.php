@extends('layouts.master')
@section('content')
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Stations</h4> </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="#">Dashboard</a></li>
            </ol>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12">
            <div class="white-box">
                <h3 class="box-title">Add Stations</h3>
                <form class="form-horizontal" role="form" id="frm-create-station" action="{{route('postStation')}}" method="post">
                    <div class="form-group has-success">
                        <label class="col-sm-2 control-label">Station Name</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="station_name" name="station_name" data-toggle="tooltip" required>
                        </div>
                    </div>
                    <div class="form-group has-success">
                        <label class="col-sm-2 control-label">Location</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="location" name="location" data-toggle="tooltip" required>
                        </div>
                    </div>

                    <div class="clearfix"></div>
                    <div class="panel-footer">
                        <button type="submit" class="btn btn-success btn-sm ">Add Station</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12">
            <div class="white-box">
                <h3 class="box-title">Station List</h3>
                <div class="table-responsive">

                </div>
            </div>


        </div>
    </div>

@endsection

@section('script')
<script type="text/javascript">
    showStationInfo();

    $('#frm-create-station').on('submit', function (e) {
        e.preventDefault();
        var data = $(this).serialize();
        var url = $(this).attr('action');
        $.post(url, data,
            function (data) {
                showStationInfo(data.station_name);
                $(this).trigger('reset');
                swal('Trotro TV',
                    'Station '+data.station_name+' saved successfully',
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

    });
    function showStationInfo()
    {
        var data = $('#frm-create-station').serialize();
        console.log(data);
        $.get("{{route('showStationInfo')}}", data, function (data) {
            $('.table-responsive').empty().append(data);
        });
    }
</script>
    @endsection