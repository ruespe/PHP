    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
        <h1>Persones amb número aleatori</h1>
        @foreach ($persones as $person)
        <tr>
            <td>{{ $person->dni }}</td>
            <td>{{ $person->nom }}</td>
            <td>{{ $person->aleatori }}</td>
            <td>{{$person->premi_assignat}}</td>
            <br>
        </tr>
        @endforeach
    </body>

    </html>