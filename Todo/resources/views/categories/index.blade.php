
<h1>Gestió  de categories</h1>
@extends('layouts.app')

@section('content')

<a href="{{ route('categoria.create') }}">Nova categoria</a>

<ul>
@foreach ($categories as $categoria)
    <li>
        <strong>{{ $categoria->nom }}</strong>
        ({{ $categoria->descripcio }})

        <!-- <a href="{{ route('categoria.show', $tasca) }}">Veure</a>
        <a href="{{ route('categoria.edit', $tasca) }}">Editar</a> -->

        <!-- <form action="{{ route('categoria.destroy', $tasca) }}" method="POST" style="display:inline">
            @csrf
            @method('DELETE')
            <button type="submit">Eliminar</button>
        </form> -->
    </li>
@endforeach
</ul>

@endsection


