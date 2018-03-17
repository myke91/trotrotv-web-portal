<div class="modal fade" id="station-show" tabindex="1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close"data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Edit Station</h4>
            </div>
            <form  id="frm-update-station" role="form" action="">
            <div class="modal-body">
                <input type="hidden" id="station_id_edit" name="station_id">
                <label for="station-name">Station Name</label>
                <div class="row">
                    <div class="col-sm-12">
                        <input type="text" name="station_name" id="station-name" class="form-control">
                    </div>
                </div>
                <br>
                <label for="location">Location</label>
                <div class="row">
                    <div class="col-sm-12">
                        <input type="text" name="location" id="location-edit" class="form-control" required>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                <button class="btn btn-success btn-update-station" type="button">Update</button>
            </div>
            </form>
        </div>
    </div>
</div>