<!DOCTYPE html>
<html>
<head>
    <title>Quotation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        h1, h2, p {
            color: #333;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        @media screen and (max-width: 600px) {
            table, th, td {
                width: 100%;
                display: block;
            }
        }
    </style>
</head>
<body>
    <h1>QUOTATION</h1>
    <p>B50,3 MATHAMAGODA KOTIYAKUMBURA</p>
    <h2>ONE DAY DIGITAL</h2>
    <p>Date: {{ date('Y-m-d') }}</p>

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

    <p>Total Price: {{ $total }}</p>

    <p>Thank you for requesting a quotation. If you have any questions regarding this quotation, please contact our team.</p>
    <p>Website: <a href="http://www.onedaydigital.com">www.onedaydigital.com</a></p>
</body>
</html>
