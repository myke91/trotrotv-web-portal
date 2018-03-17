@extends('layouts.master')
@section('content')
    @include('stations.editStationInfo')
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header"><i class="fa fa-file-text-o"></i>TrotroTv</h2>
            <ol class="breadcrumb">
                <li><i class="fa fa-home"></i><a href="/">Home</a></li>
                <li><i class="icon_document_alt"></i>Stations</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <section class="panel panel-default">
                <header class="panel-heading">
                    Add Station
                </header>
                <form action="{{route('postStation')}}" class="form-horizontal" id="frm-create-station" method="POST">
                    <div class="panel-body" style="border-bottom: 1px solid #ccc;">
                        <div class="panel-panel-default">
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <label for="station-name">Station Name</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" name = "station_name" id = "station_name" required>

                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <label for="location">Location</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" name = "location" id = "location" required>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="panel-footer">
                        <button type="submit" class="btn btn-default ">Create Station</button>
                    </div>
                </form>
                <div class="panel panel-default">
                    <div class="panel-heading">Station Information</div>
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
showStationInfo();
     $('#frm-create-station').on('submit', function (e) {
              e.preventDefault();
               var data = $(this).serialize();
              var url = $(this).attr('action');
             $.post(url, data,function (data) {
                 showStationInfo(data.station_name);
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
         $(this).trigger('reset');
             });
  function showStationInfo()
  {
      var data = $('#frm-create-station').serialize();
      console.log(data);
     $.get("{{route('showStationInfo')}}", data, function (data) {
              $('#add-class-info').empty().append(data);
         });
   }
       $(document).on('click', '.station-edit', function (e) {
           $('#station-show').modal('show');
           var station_id = $(this).val();
           $.get("{{route('editStation')}}", {station_id: station_id}, function (data) {
               console.log(data)

               $('#station_id_edit').val(data.station_id);
               $('#station-name').val(data.station_name);
               $('#location-edit').val(data.location);
           });
       });
       $('.btn-update-station').on('click', function (e) {
           e.preventDefault();
           var data = $('#frm-update-station').serialize();
           $.post("{{route('updateStation')}}", data, function (data) {
               showStationInfo(data.station_name);
               $('#station-show').modal('hide');
               swal('Trotro TV',
                   'Station '+data.station_name+' updated successfully',
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
           var station_id = $(this).val();
           $.post("{{route('deleteStation')}}", {station_id: station_id}, function (data) {
               showStationInfo(data.station_name);
               swal('Trotro TV',
                   'Selected Station deleted successfully',
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
