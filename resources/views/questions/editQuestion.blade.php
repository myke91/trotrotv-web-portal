<div class="modal fade" id="question-show" tabindex="1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close"data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Edit Question</h4>
            </div>
            <form  id="frm-update-question" role="form" action="">
                <div class="modal-body">
                    <input type="hidden" id="question_id_edit" name="id">
                    <label for="station-name">Question</label>
                    <div class="row">
                        <div class="col-sm-12">
                            <textarea rows="5" name="question" id="question-edit"></textarea>
                        </div>
                    </div>
                    <br>
                    <label for="location">Type</label>
                    <div class="row">
                        <div class="col-sm-12">
                            <select class="form-control" name = "type" id = "type_edit">
                                <option value="">---------------</option>
                                <option value="REPORT">REPORT</option>
                                <option value="SURVEY">SURVEY</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                    <button class="btn btn-success btn-update-question" type="button">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>