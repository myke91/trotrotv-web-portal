<table class="table" id="investTable">
    <thead>
    <tr>
        <th>BRAND NAME</th>
        <th>QUESTION</th>
        <th>ANSWER</th>
        <th>UPLOADED</th>
        <th>TIMESTAMP</th>
        <th colspan="2">Action</th>
    </tr>
    </thead>
    <tbody>
    @foreach($surveys as $key => $s)
        <tr>
            <td>{{$s->brand_name}}</td>
            <td class="txt-oflo">{{$s->question}} </td>
            <td class="txt-oflo">{{$s->answer}} </td>
            <td class="txt-oflo">{{$s->uploaded}} </td>
            <td class="txt-oflo">{{$s->timestamp}} </td>
            <td class="txt-oflo">
                <Button value="{{$s->id}}" class="btn btn-danger btn-sm del-survey">Del</Button>
            </td>
            <td class="txt-oflo">
                <Button value="{{$s->id}}" class="btn btn-success btn-sm survey-edit">Edit</Button>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>