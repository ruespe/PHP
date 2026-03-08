@extends('layouts.app')

@section('content')
<div class="container">

    <h1>Crear nova categoria</h1>

    {{-- Mostrar errors de validació --}}
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('categories.store') }}" method="POST">
        @csrf

        {{-- Nom --}}
        <div class="mb-3">
            <label for="nom" class="form-label">Nom categoria</label>
            <input type="text" name="nom" id="nom" class="form-control" value="{{ old('titol') }}" required>
        </div>

        {{-- Descripció --}}
        <div class="mb-3">
            <label for="descripcio" class="form-label">Descripció</label>
            <textarea name="descripcio" id="descripcio" class="form-control" rows="3">{{ old('descripcio') }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Guardar tasca</button>
    </form>

</div>
@endsection