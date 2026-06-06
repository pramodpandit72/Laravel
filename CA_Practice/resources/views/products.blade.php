<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table border="2">
    <tr>
        <th>Product Name</th>
    </tr>
    @foreach($products as $p)
    <tr>
        <td>{{ $p->name }}</td>
    </tr>
    @endforeach

</table>

</body>
</html>