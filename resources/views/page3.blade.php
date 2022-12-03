<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 3</title>
</head>

<body>
    <table border="1">
        <tr>
            <th>Product ID</th>
            <th>Product Name</th>
            <th>Supplier ID</th>
            <th>Category ID</th>
            <th>Quantity Per Unit</th>
            <th>Unit Price</th>
            <th>Units In Stock</th>
            <th>Units On Order</th>
            <th>Reorder Level</th>
            <th>Discontinued</th>
        </tr>
        <tr>
            @foreach($detailproducts AS $detailproducts)
        <tr>
            <td> {{$detailproducts->ProductID}}</td>
            <td> {{$detailproducts->ProductName}}</td>
            <td> {{$detailproducts->SupplierID}}</td>
            <td> {{$detailproducts->CategoryID}}</td>
            <td> {{$detailproducts->QuantityPerUnit}}</td>
            <td> {{$detailproducts->UnitPrice}}</td>
            <td> {{$detailproducts->UnitsInStock}}</td>
            <td> {{$detailproducts->UnitsOnOrder}}</td>
            <td> {{$detailproducts->ReorderLevel}}</td>
            <td> {{$detailproducts->Discontinued}}</td>
        </tr>
        @endforeach
    </table>
    <br>
    <br>
    <form action="">
        Mau beli berapa?
        <input type="number" name="jumlah">
        <input type="submit" value="Add to Cart">
    </form>
</body>

</html>