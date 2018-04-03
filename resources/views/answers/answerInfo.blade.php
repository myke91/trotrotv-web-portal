<table class="table" id="investTable">
    <thead>
    <tr>
        <th>QUESTION</th>
        <th>ANSWER</th>
        <th colspan="2">Action</th>
    </tr>
    </thead>
    <tbody>
    @foreach($answers as $key => $a)
        <tr>
            <td>{{$a->question}}</td>
            <td class="txt-oflo">{{$a->answer}} </td>
            <td class="txt-oflo">
                <Button value="{{$a->id}}" class="btn btn-danger btn-sm del-answer">Del</Button>
            </td>
            <td class="txt-oflo">
                <Button value="{{$a->id}}" class="btn btn-success btn-sm answer-edit">Edit</Button>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>