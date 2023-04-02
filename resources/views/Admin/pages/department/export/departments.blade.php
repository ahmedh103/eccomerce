<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Slug</th>
     </tr>
    </thead>
    <tbody>
        @foreach($departs as $depart)
            <tr>
                <td>{{ $depart->id }}</td>
                <td>{{ $depart->name }}</td>
                <td>{{ $depart->slug }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
