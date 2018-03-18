<table class="table" id="investTable">
    <thead>
    <tr>
        <th>VEHICLE NUMBER</th>
        <th>QUESTION</th>
        <th>ANSWER</th>
        <th>UPLOADED</th>
        <th>TIMESTAMP</th>
        <th colspan="2">Action</th>
    </tr>
    </thead>
    <tbody>
    @foreach($reports as $key => $r)
        <tr>
            <td>{{$r->vehicle_number}}</td>
            <td class="txt-oflo">{{$r->question}} </td>
            <td class="txt-oflo">{{$r->answer}} </td>
            <td class="txt-oflo">{{$r->uploaded}} </td>
            <td class="txt-oflo">{{$r->timestamp}} </td>
            <td class="txt-oflo">
                <Button value="{{$r->report_id}}" class="btn btn-danger btn-sm del-report">Del</Button>
            </td>
            <td class="txt-oflo">
                <Button value="{{$r->report_id}}" class="btn btn-success btn-sm report-edit">Edit</Button>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>