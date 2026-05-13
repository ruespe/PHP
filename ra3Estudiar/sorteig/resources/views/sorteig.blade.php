    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
        <h1>Persones amb número aleatori</h1>
        <table>
            <thead>
                <tr>
                    <th>Nom Complet</th>
                    <th>DNI</th>
                    <th>Premi Guanyat</th>
                </tr>
            </thead>
            <tbody>
                @foreach($persones as $persona)
                <tr>
                    <td>{{ $persona->nom }} {{ $persona->cognom1 }}</td>
                    <td>{{ $persona->dni }}</td>
                    <td>
                        <strong>{{ $persona->premi ?? 'Sense sortejar' }}</strong>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </body>

    </html>