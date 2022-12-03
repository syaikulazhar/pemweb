<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 2</title>
</head>

<body>
    <table border="1">
        <tr>
            <th>Product ID</th>
            <th>Product Name</th>
            <th>Unit Price</th>
        </tr>
        @foreach($selectproducts AS $selectproducts)
        <tr>
            <td> {{$selectproducts->ProductID}}</td>
            <td> <a href="/page3/{{$selectproducts->ProductID}}">{{$selectproducts->ProductName}}</a></td>
            <td> {{$selectproducts->UnitPrice}}</td>
        </tr>
        @endforeach
    </table>
</body>

</html>