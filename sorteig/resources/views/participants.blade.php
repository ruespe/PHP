<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Participants</title>
</head>
<body>
    <h1>Llistat de Participants</h1>
    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>DNI</th>
                <th>Nom</th>
                <th>Cognom 1</th>
                <th>Cognom 2</th>
                <th>Telèfon</th>
                <th>Correu</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($persones as $persona)
            <tr>
                <td>{{ $persona->dni }}</td>
                <td>{{ $persona->nom }}</td>
                <td>{{ $persona->cognom1 }}</td>
                <td>{{ $persona->cognom2 }}</td>
                <td>{{ $persona->telefon }}</td>
                <td>{{ $persona->correu }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
