
<h1>Gestió  de tasques</h1>
@extends('layouts.app')

@section('content')

<a href="{{ route('tasques.create') }}">Nova tasca</a>

<ul>
@foreach ($tasques as $tasca)
    <li>
        <strong>{{ $tasca->titol }}</strong>
        ({{ $tasca->categoria->nom }})
        - {{ $tasca->status }}

        <a href="{{ route('tasques.show', $tasca) }}">Veure</a>
        <a href="{{ route('tasques.edit', $tasca) }}">Editar</a>

        <form action="{{ route('tasques.destroy', $tasca) }}" method="POST" style="display:inline">
            @csrf
            @method('DELETE')
            <button type="submit">Eliminar</button>
        </form>
    </li>
@endforeach
</ul>

@endsection


