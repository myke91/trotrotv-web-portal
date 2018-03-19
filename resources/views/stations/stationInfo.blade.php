<table class="table" id="investTable">
    <thead>
    <tr>
        <th>STATION NAME</th>
        <th>LOCATION</th>
        <th colspan="2">Action</th>
    </tr>
    </thead>
    <tbody>
    @foreach($stations as $key => $s)
    <tr>
        <td>{{$s->station_name}}</td>
        <td class="txt-oflo">{{$s->location}} </td>
        <td class="txt-oflo">
            <Button value="{{$s->id}}" class="btn btn-danger btn-sm del-station">Del</Button>
        </td>
        <td class="txt-oflo">
            <Button value="{{$s->id}}" class="btn btn-success btn-sm station-edit">Edit</Button>
        </td>
    </tr>
    @endforeach
    </tbody>
</table>