@extends('layouts.app')

@section('title', 'Editar tasca')

@section('content')
<div class="container mt-4">

    <h1 class="mb-4">Editar tasca</h1>

    {{-- Errors de validació --}}
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <div class="card">
        <div class="card-body">

            <form action="{{ route('tasques.update', $tasques->id) }}" method="POST">
                @csrf
                @method('PUT')

                {{-- Títol --}}
                <div class="mb-3">
                    <label for="titol" class="form-label">Títol</label>
                    <input type="text" name="titol" id="titol"
                        class="form-control"
                        value="{{ old('titol', $tasques->titol) }}" required>
                </div>

                {{-- Descripció --}}
                <div class="mb-3">
                    <label for="descripcio" class="form-label">Descripció</label>
                    <textarea name="descripcio" id="descripcio"
                        class="form-control" rows="3">{{ old('descripcio', $tasques->descripcio) }}</textarea>
                </div>

                {{-- Prioritat --}}
                <div class="mb-3">
                    <label for="prioritat" class="form-label">Prioritat</label>
                    <select name="prioritat" id="prioritat" class="form-select" required>
                        <option value="baixa" {{ old('prioritat', $tasques->prioritat) == 'baixa' ? 'selected' : '' }}>Baixa</option>
                        <option value="mitjana" {{ old('prioritat', $tasques->prioritat) == 'mitjana' ? 'selected' : '' }}>Mitjana</option>
                        <option value="alta" {{ old('prioritat', $tasques->prioritat) == 'alta' ? 'selected' : '' }}>Alta</option>
                    </select>
                </div>

                {{-- Status --}}
                <div class="mb-3">
                    <label for="status" class="form-label">Estat</label>
                    <select name="status" id="status" class="form-select" required>
                        <option value="pendent" {{ old('status', $tasques->status) == 'pendent' ? 'selected' : '' }}>Pendent</option>
                        <option value="en_curs" {{ old('status', $tasques->status) == 'en_curs' ? 'selected' : '' }}>En curs</option>
                        <option value="completada" {{ old('status', $tasques->status) == 'completada' ? 'selected' : '' }}>Completada</option>
                    </select>
                </div>

                {{-- Categoria --}}
                <div class="mb-3">
                    <label for="categoria_id" class="form-label">Categoria</label>
                    <select name="categoria_id" id="categoria_id" class="form-select" required>
                        @foreach ($categories as $categoria)
                        <option value="{{ $categoria->id }}"
                            {{ old('categoria_id', $tasques->categoria_id) == $categoria->id ? 'selected' : '' }}>
                            {{ $categoria->nom }}
                        </option>
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Actualitzar</button>
                <a href="{{ route('tasques.index') }}" class="btn btn-secondary">Cancel·lar</a>

            </form>

        </div>
    </div>

</div>
@endsection