<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        body {
            background-color: black;
            color: white;
            font-family: Arial, sans-serif;
        }

        table {
            border-collapse: collapse;
            width: 80%;
            margin: 50px auto;
            background-color: #111;
        }

        th, td {
            border: 1px solid white;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #222;
        }

        tr:nth-child(even) {
            background-color: #1a1a1a;
        }

        tr:hover {
            background-color: #333;
        }
    </style>

</head>
<body>
    <table border="2">
        <thead>
            <tr>
                <th>Quote</th>
                <th>Author</th>
            </tr>
        </thead>
        <tbody>
            @foreach($quotes as $quote)
            <tr>
                <td>{{ $quote['quote'] }}</td>
                <td>{{ $quote['author'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>