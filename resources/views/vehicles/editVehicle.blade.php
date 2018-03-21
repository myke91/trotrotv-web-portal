<div class="modal fade" id="vehicle-show" tabindex="1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close"data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Edit Vehicle</h4>
            </div>
            <form  id="frm-update-vehicle" role="form" action="">
                <div class="modal-body">
                    <input type="hidden" id="vehicle_id_edit" name="id">
                    <label for="vehicle-number">Vehicle Number</label>
                    <div class="row">
                        <div class="col-sm-12">
                            <input type="text" name="vehicle" id="vehicle-name-edit" class="form-control">
                        </div>
                    </div>
                    <br>
                    <label for="station">Station</label>
                    <div class="row">
                        <div class="col-sm-12">
                            <select class="form-control" name = "station" id = "station_name_edit">
                                <option value="">---------------</option>
                                @foreach($stations as $key =>$y)
                                    <option value="{{$y->station_name}}">{{$y->station_name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                    <button class="btn btn-success btn-update-vehicle" type="button">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>