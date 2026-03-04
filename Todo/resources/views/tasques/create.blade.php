@extends('layouts.app')

@section('content')
<div class="container">

    <h1>Crear nova tasca</h1>

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

    <form action="{{ route('tasques.store') }}" method="POST">
        @csrf

        {{-- Títol --}}
        <div class="mb-3">
            <label for="titol" class="form-label">Títol</label>
            <input type="text" name="titol" id="titol" class="form-control" value="{{ old('titol') }}" required>
        </div>

        {{-- Descripció --}}
        <div class="mb-3">
            <label for="descripcio" class="form-label">Descripció</label>
            <textarea name="descripcio" id="descripcio" class="form-control" rows="3">{{ old('descripcio') }}</textarea>
        </div>

        {{-- Prioritat --}}
        <div class="mb-3">
            <label for="prioritat" class="form-label">Prioritat</label>
            <select name="prioritat" id="prioritat" class="form-select">
                <option value="baixa">Baixa</option>
                <option value="mitjana">Mitjana</option>
                <option value="alta">Alta</option>
            </select>
        </div>

        {{-- Status --}}
        <div class="mb-3">
            <label for="status" class="form-label">Estat</label>
            <select name="status" id="status" class="form-select">
                <option value="pendent">Pendent</option>
                <option value="en_curs">En curs</option>
                <option value="completada">Completada</option>
            </select>
        </div>

        {{-- Categoria --}}
        <div class="mb-3">
            <label for="categoria_id" class="form-label">Categoria</label>
            <select name="categoria_id" id="categoria_id" class="form-select">
                @foreach ($categories as $categoria)
                <option value="{{ $categoria->id }}">{{ $categoria->nom }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Guardar tasca</button>
    </form>

</div>
@endsection