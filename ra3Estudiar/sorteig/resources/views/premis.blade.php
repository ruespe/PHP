<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Premis</h1>
    @foreach ($premis as $premi)
    <tr>
        <td> {{$premi->id}}</td>
        <td> {{$premi->nom}}</td>
        <td>{{$premi->valor}}</td>
        <br>
    </tr>
    @endforeach
</body>
</html>