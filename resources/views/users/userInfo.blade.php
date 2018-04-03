<table class="table" id="investTable">
    <thead>
    <tr>
        <th>USERNAME</th>
        <th>ACCESS CODE</th>
        <th colspan="2">Action</th>
    </tr>
    </thead>
    <tbody>
    @foreach($users as $key => $u)
        <tr>
            <td>{{$u->username}}</td>
            <td class="txt-oflo">{{$u->code}} </td>
            <td class="txt-oflo">
                <Button value="{{$u->id}}" class="btn btn-danger btn-sm del-logger">Del</Button>
            </td>
            <td class="txt-oflo">
                <Button value="{{$u->id}}" class="btn btn-success btn-sm logger-edit">Edit</Button>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>