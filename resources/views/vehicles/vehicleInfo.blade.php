<table class="table" id="investTable">
    <thead>
    <tr>
        <th>VEHICLE NUMBER</th>
        <th>STATION</th>
        <th colspan="2">Action</th>
    </tr>
    </thead>
    <tbody>
    @foreach($vehicles as $key => $v)
        <tr>
            <td>{{$v->vehicle_number}}</td>
            <td class="txt-oflo">{{$v->station_name}} </td>
            <td class="txt-oflo">
                <Button value="{{$v->vehicle_id}}" class="btn btn-danger btn-sm del-vehicle">Del</Button>
            </td>
            <td class="txt-oflo">
                <Button value="{{$v->vehicle_id}}" class="btn btn-success btn-sm vehicle-edit">Edit</Button>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>