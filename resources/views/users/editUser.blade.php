<div class="modal fade" id="logger-show" tabindex="1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close"data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Edit Logger</h4>
            </div>
            <form  id="frm-update-logger" role="form" action="">
                <div class="modal-body">
                    <input type="hidden" id="logger_id_edit" name="id">
                    <label for="station-name">Username</label>
                    <div class="row">
                        <div class="col-sm-12">
                            <input type="text" name="username" id="username_edit" class="form-control">
                        </div>
                    </div>
                    <br>
                    <label for="location">Access Code</label>
                    <div class="row">
                        <div class="col-sm-12">
                            <input type="text" name="code" id="access_code_edit" class="form-control" required>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                    <button class="btn btn-success btn-update-logger" type="button">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>