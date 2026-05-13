@extends('layouts.app')

@section('title', 'Treballadors')

@section('content')
<div class="container mt-4">

    <h1 class="mb-4">Llistat de treballadors</h1>

    <a href="{{ route('treballadors.create') }}" class="btn btn-primary mb-3">Nou treballador</a>

    @if ($treballadors->isEmpty())
        <p>No hi ha treballadors registrats.</p>
    @else
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>DNI</th>
                <th>Nom</th>
                <th>Cognom 1</th>
                <th>Cognom 2</th>
                <th>Correu</th>
                <th>Telèfon</th>
                <th>Accions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($treballadors as $treballador)
            <tr>
                <td>{{ $treballador->dni }}</td>
                <td>{{ $treballador->nom }}</td>
                <td>{{ $treballador->cognom1 }}</td>
                <td>{{ $treballador->cognom2 }}</td>
                <td>{{ $treballador->correu }}</td>
                <td>{{ $treballador->telefon }}</td>
                <td>
                    <a href="{{ route('treballadors.show', $treballador->dni) }}" class="btn btn-sm btn-info">Veure</a>
                    <a href="{{ route('treballadors.edit', $treballador->dni) }}" class="btn btn-sm btn-warning">Editar</a>
                    <form action="{{ route('treballadors.destroy', $treballador->dni) }}" method="POST" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Segur que vols eliminar aquest treballador?')">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif

</div>
@endsection
</body>

</html>