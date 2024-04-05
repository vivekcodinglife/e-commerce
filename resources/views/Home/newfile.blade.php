<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
 <h1>hii i'm here</h1>
  <table>
    <tr>
        <th>title</th>
        <th>image</th>
        <th>price</th>
        <th>quantity</th>

    </tr>
       @foreach ($product as $product )
       <tr>
        <td>{{$product->title}}</td>
        <td><img src="products/{{$product->image}}" alt=""></td>
        <td>{{$product->price}}</td>
        <td>{{$product->quantity}}</td>
       </tr>

       @endforeach
  </table>

</body>
</html>
