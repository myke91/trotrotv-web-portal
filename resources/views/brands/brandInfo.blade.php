<table class="table" id="investTable">
    <thead>
    <tr>
        <th>BRAND NAME</th>
        <th>LOCATION</th>
        <th>CONTACT PERSON</th>
        <th>NUMBER</th>
        <th>EMAIL</th>
        <th colspan="2">Action</th>
    </tr>
    </thead>
    <tbody>
    @foreach($brands as $key => $b)
        <tr>
            <td>{{$b->brand_name}}</td>
            <td class="txt-oflo">{{$b->location}} </td>
            <td class="txt-oflo">{{$b->contact_person}} </td>
            <td class="txt-oflo">{{$b->contact_number}} </td>
            <td class="txt-oflo">{{$b->email}} </td>
            <td class="txt-oflo">
                <Button value="{{$b->brand_id}}" class="btn btn-danger btn-sm del-brand">Del</Button>
            </td>
            <td class="txt-oflo">
                <Button value="{{$b->brand_id}}" class="btn btn-success btn-sm brand-edit">Edit</Button>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>