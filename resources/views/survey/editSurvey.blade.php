<div class="modal fade" id="survey-show" tabindex="1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close"data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Edit Survey</h4>
            </div>
            <form  id="frm-update-survey" role="form" action="">
                <div class="modal-body">
                    <input type="hidden" id="survey_id_edit" name="id">
                    <label for="brand-name">Brand name</label>
                    <div class="row">
                        <div class="col-sm-12">
                            <select class="form-control" name = "brand" id = "brand_name">
                                <option value="">---------------</option>
                                @foreach($brands as $key =>$y)
                                    <option value="{{$y->brand_name}}">{{$y->brand_name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <br>
                    <label for="location">Question</label>
                    <div class="row">
                        <div class="col-sm-12">
                            <select class="form-control" name = "question" id = "question">
                                <option value="">---------------</option>
                                @foreach($questions as $key =>$y)
                                    <option value="{{$y->question}}">{{$y->question}}</option>
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
                    <label for="location">User</label>
                    <div class="row">
                        <div class="col-sm-12">
                            <select class="form-control" name = "user" id = "user">
                                <option value="">---------------</option>
                                @foreach($users as $key =>$u)
                                    <option value="{{$u->username}}">{{$u->username}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <label for="respondent_name">Respondent Name</label>
                    <div class="row">
                        <div class="col-sm-12">
                            <input type="text" name="respondent_name" id="respondent_name" class="form-control">
                        </div>
                    </div>
                    <label for="respondent_tel_number">Respondent Tel. Number</label>
                    <div class="row">
                        <div class="col-sm-12">
                            <input type="text" name="respondent_tel_number" id="respondent_tel_number" class="form-control">
                        </div>
                    </div>
                    <label for="respondent_email">Respondent Email</label>
                    <div class="row">
                        <div class="col-sm-12">
                            <input type="text" name="respondent_email" id="respondent_email" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                    <button class="btn btn-success btn-update-survey" type="button">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>