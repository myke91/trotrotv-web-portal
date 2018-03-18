<div class="modal fade" id="report-show" tabindex="1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close"data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Edit Report</h4>
            </div>
            <form  id="frm-update-report" role="form" action="">
                <div class="modal-body">
                    <input type="hidden" id="report_id_edit" name="report_id">
                    <label for="station-name">Vehicle Number</label>
                    <div class="row">
                        <div class="col-sm-12">
                            <select class="form-control" name = "vehicle_id" id = "vehicle_id">
                                <option value="">---------------</option>
                                @foreach($vehicles as $key =>$y)
                                    <option value="{{$y->vehicle_id}}">{{$y->vehicle_number}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <br>
                    <label for="location">Question</label>
                    <div class="row">
                        <div class="col-sm-12">
                            <select class="form-control" name = "question_id" id = "question_id">
                                <option value="">---------------</option>
                                @foreach($questions as $key =>$y)
                                    <option value="{{$y->question_id}}">{{$y->question}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <br>
                    <label for="answer">Answer</label>
                    <div class="row">
                        <div class="col-sm-12">
                            <input type="text" name="answer" id="answer" class="form-control">
                        </div>
                    </div>
                    <br>
                    <label for="uploaded">Uploaded</label>
                    <div class="row">
                        <div class="col-sm-12">
                            <input type="text" name="uploaded" id="uploaded" class="form-control">
                        </div>
                    </div>
                    <br>
                    <label for="timestamp">TimeStamp</label>
                    <div class="row">
                        <div class="col-sm-12">
                            <input type="text" name="timestamp" id="timestamp" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                    <button class="btn btn-success btn-update-report" type="button">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>