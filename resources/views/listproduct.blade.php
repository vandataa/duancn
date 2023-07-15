<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table>
        <tr>
            <th>Name</th>
            <th>Name</th>
            <th>Name</th>
            <th>Name</th>
            <th>Name</th>
        </tr>
        @foreach ($products as $pro )
        <tr>
            <td> {{$pro->name}}</td>
            <td> {{$pro->gender}}</td>
            <td> {{$pro->price}}</td>
            <td> {{$pro->image}}</td>
            <td> {{$pro->name}}</td>
            <td> {{$pro->name}}</td>
        </tr>
        @endforeach

    </table>

</body>

</html>