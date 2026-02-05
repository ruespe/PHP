<div>
    <h1>Persones amb número aleatori</h1>
    @foreach ($persones as $person)
    <tr>
        <td>{{ $person->dni }}</td>
        <td>{{ $person->nombre }}</td>
    </tr>
    <br>
    @endforeach

</div>