<div class="modal fade" id="brand-show" tabindex="1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close"data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Edit Brand</h4>
            </div>
            <form  id="frm-update-brand" role="form" action="">
                <div class="modal-body">
                    <input type="hidden" id="brand_id_edit" name="id">
                    <label for="brand-name">Brand Name</label>
                    <div class="row">
                        <div class="col-sm-12">
                            <input type="text" name="brand_name" id="brand-name" class="form-control">
                        </div>
                    </div>
                    <br>
                    <label for="location">Location</label>
                    <div class="row">
                        <div class="col-sm-12">
                            <input type="text" name="location" id="location-edit" class="form-control" required>
                        </div>
                    </div>
                    <br>
                    <label for="contact_person">Contact Person</label>
                    <div class="row">
                        <div class="col-sm-12">
                            <input type="text" name="contact_person" id="contact-person" class="form-control" required>
                        </div>
                    </div>
                    <br>
                    <label for="contact_number">Contact Number</label>
                    <div class="row">
                        <div class="col-sm-12">
                            <input type="text" name="contact_number" id="contact-number" class="form-control" required>
                        </div>
                    </div>
                    <br>
                    <label for="email">Email</label>
                    <div class="row">
                        <div class="col-sm-12">
                            <input type="text" name="email" id="email-edit" class="form-control" required>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                    <button class="btn btn-success btn-update-brand" type="button">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>