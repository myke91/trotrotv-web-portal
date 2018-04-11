<table class="table" id="investTable">
    <thead>
    <tr>
        <th>VEHICLE NAME</th>
        <th>QUESTION</th>
        <th>ANSWER</th>
        <th>UPLOADED</th>
        <th>COMMENTS</th>
        <th>TIMESTAMP</th>
        <th>USER</th>
        <th colspan="2">Action</th>
    </tr>
    </thead>
    <tbody>
    @foreach($reports as $key => $r)
        <tr>
            <td>{{$r->vehicle}}</td>
            <td class="txt-oflo">{{$r->question}} </td>
            <td class="txt-oflo">{{$r->answer}} </td>
            <td class="txt-oflo">{{$r->uploaded}} </td>
            <td class="txt-oflo">{{$r->comments}} </td>
            <td class="txt-oflo">{{$r->timestamp}} </td>
            <td class="txt-oflo">{{$r->user}} </td>
            <td class="txt-oflo">
                <Button value="{{$r->id}}" class="btn btn-danger btn-sm del-report">Del</Button>
            </td>
            <td class="txt-oflo">
                <Button value="{{$r->id}}" class="btn btn-success btn-sm report-edit">Edit</Button>
            </td>
        </tr>
    @endforeach

    </tbody>
</table>
