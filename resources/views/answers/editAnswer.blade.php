<div class="modal fade" id="answer-show" tabindex="1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close"data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Edit Answer</h4>
            </div>
            <form  id="frm-update-answer" role="form" action="">
                <div class="modal-body">
                    <input type="hidden" id="answer_id_edit" name="id">
                    <label for="vehicle-number">Question</label>
                    <div class="row">
                        <div class="col-sm-12">
                            <select class="form-control" name = "question_id" id = "question_id_edit">
                                <option value="">---------------</option>
                                @foreach($questions as $key =>$y)
                                    <option value="{{$y->id}}">{{$y->question}}</option>
                                @endforeach
                            </select>

                        </div>
                    </div>
                    <br>
                    <label for="station">Answer</label>
                    <div class="row">
                        <div class="col-sm-12">
                            <input type="text" name="answer" id="answer-edit" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                    <button class="btn btn-success btn-update-answer" type="button">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>