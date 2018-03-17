<table class="table" id="investTable">
    <thead>
    <tr>
        <th>STATION NAME</th>
        <th>LOCATION</th>
    </tr>
    </thead>
    <tbody>
    @foreach($stations as $key => $s)
    <tr>
        <td>{{$s->station_name}}</td>
        <td class="txt-oflo">{{$s->location}} </td>
    </tr>
    @endforeach
    </tbody>
</table>