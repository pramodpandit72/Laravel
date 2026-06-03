<!DOCTYPE html>
<html>
<head>
    <title>Products</title>
</head>
<body>

<h2>Product List</h2>

<table border="1" cellpadding="10">
    <tr>
        <th>Name</th>
        <th>Quantity</th>
        <th>Price</th>
    </tr>

    @foreach($products as $product)
    <tr>
        <td>{{ $product['name'] }}</td>
        <td>{{ $product['quantity'] }}</td>
        <td>{{ $product['price'] }}</td>
    </tr>
    @endforeach

</table>

</body>
</html>