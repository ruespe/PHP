<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Tots els Premis</title>
</head>
<body>
    <h1>Llistat de Premis</h1>
    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Valor</th>
                <th>Creat el</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($premis as $premi)
            <tr>
                <td>{{ $premi->id }}</td>
                <td>{{ $premi->nom }}</td>
                <td>{{ $premi->valor }}</td>
                <td>{{ $premi->created_at }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
