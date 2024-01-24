<body>
    <h1>Quotation</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Price</th>
            <th>Category</th>
            <th>Description</th>
        </tr>
        @foreach ($body as $item)
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->name }}</td>
            <td>{{ $item->price }}</td>
            <td>{{ $item->category }}</td>
            <td>{{ $item->description }}</td>
        </tr>
        @endforeach
    </table>
</body>
