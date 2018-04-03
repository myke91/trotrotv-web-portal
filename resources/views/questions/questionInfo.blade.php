<table class="table" id="investTable">
    <thead>
    <tr>
        <th>Question</th>
        <th>Type</th>
        <th>Brand Name</th>
        <th colspan="2">Action</th>
    </tr>
    </thead>
    <tbody>
    @foreach($questions as $key => $s)
        <tr>
            <td>{{$s->question}}</td>
            <td class="txt-oflo">{{$s->type}} </td>
            <td class="txt-oflo">{{$s->brand_name}} </td>
            <td class="txt-oflo">
                <Button value="{{$s->id}}" class="btn btn-danger btn-sm del-question">Del</Button>
            </td>
            <td class="txt-oflo">
                <Button value="{{$s->id}}" class="btn btn-success btn-sm question-edit">Edit</Button>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>