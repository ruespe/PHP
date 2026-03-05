
<h1>Gestió  de categories</h1>
@extends('layouts.app')

@section('content')

<a href="{{ route('categories.create') }}">Nova categoria</a>

<ul>
@foreach ($categories as $categoria)
    <li>
        <strong>{{ $categoria->nom }}</strong>
        ({{ $categoria->descripcio }})

        <a href="{{ route('categories.show', $categoria) }}">Veure</a>
        <a href="{{ route('categories.edit', $categoria) }}">Editar<a>

     <form action="{{ route('categories.destroy', $categoria) }}" method="POST" style="display:inline">
            @csrf
            @method('DELETE')
            <button type="submit">Eliminar</button>
        </form>
    </li>
@endforeach
</ul>

@endsection


