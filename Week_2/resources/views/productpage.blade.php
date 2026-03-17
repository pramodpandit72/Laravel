<h1> Electronic products </h1>



<?php
// print_r($products)
?>

<!-- {{$products[0]['name']}} <br>
{{$products[0]['price']}} <br>

{{$products[1]['name']}} <br>
{{$products[1]['name']}} <br>

{{$products[2]['name']}} <br>
{{$products[2]['name']}} <br> -->

<!-- @foreach($products as $product)
    <ul>
        Name: {{$product['name']}}
        price: {{$product['price']}}
    </ul>
@endforeach -->
<!-- 
<table border="2">
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Price</th>
        <th>Expensive/Affordable</th>
    </tr>
    @foreach($products as $product)
    <tr>
        <td>{{$product['id']}}</td>
        <td>{{$product['name']}}</td>
        <td> {{$product['price'] <= 2000 ? "Affordable" : "Expensive"}}</td>
    </tr>
    @endforeach 
</table> -->


<!-- 
<table border="2">
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Price</th>
        <th>Expensive/Affordable</th>
    </tr>
    @foreach($products as $product)
    <tr>
        <td>{{$product['id']}}</td>
        <td>{{$product['name']}}</td>
        <td>{{$product['price']}}</td>
        <td> <span style="color: {{$product['price'] <= 20000 ? 'green' : 'red'}}"> {{$product['price'] <= 20000 ? "Affordable" : "Expensive"}} </span> </td>
    </tr>
    @endforeach 
</table> -->