<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 4</title>
</head>

<body>
    <table border="1">
        <tr>
            <th>Product Name</th>
            <th>Quantity</th>
            <th>Subtotal</th>
            <th>Total</th>
        </tr>
        <tr>
            <td>{{$view->session()->get('ProductName')}}</td>
            <td>{{$view->session()->get('qty')}}</td>
            <td>{{ "IDR " . $view->session()->get('UnitPrice') }}</td>
            <td>{{"IDR " . $view->session()->get('total')}}</td>
        </tr>
    </table>
</body>

</html>