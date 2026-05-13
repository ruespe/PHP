<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<h1>Llistat de Participants</h1>

    <table>
        <thead>
            <tr>
                <th>DNI</th>
                <th>Nom</th>
                <th>Cognoms</th>
                <th>Telèfon</th>
                <th>Correu</th>
            </tr>
        </thead>
        <tbody>
            @foreach($participants as $participant)
            <tr>
                <td>{{ $participant->dni }}</td>
                <td>{{ $participant->nom }}</td>
                <td>{{ $participant->cognom1 }} {{ $participant->cognom2 }}</td>
                <td>{{ $participant->telefon }}</td>
                <td>{{ $participant->correu }}</td>
            </tr>
            @endforeach
        </tbody>
    </table></body>

</html>