<table border="1">
    <tr>
        <th>ID</th>
        <th>TITLE</th>
        <th>IMAGE</th>
        <th>DESCRIPTION</th>
        <th>RATING</th>
    </tr>
    @foreach($movie as $m)
        <tr>
            <td>{{$m->id}}</td>
            <td>{{$m->title}}</td>
            <td>{{$m->photo}}</td>
            <td>{{$m->description}}</td>
            <td>{{$m->rating}}</td>
        </tr>
    @endforeach
</table>
