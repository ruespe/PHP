@extends('layouts.app')

@section('title', 'Editar treballador')

@section('content')
<div class="container mt-4">

    <h1 class="mb-4">Editar treballador</h1>

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
            <form action="{{ route('treballadors.update', $treballador->dni) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label">DNI</label>
                    <input type="text" class="form-control" value="{{ $treballador->dni }}" disabled>
                </div>

                <div class="mb-3">
                    <label for="nom" class="form-label">Nom</label>
                    <input type="text" name="nom" id="nom" class="form-control" value="{{ old('nom', $treballador->nom) }}" required>
                </div>

                <div class="mb-3">
                    <label for="cognom1" class="form-label">Cognom 1</label>
                    <input type="text" name="cognom1" id="cognom1" class="form-control" value="{{ old('cognom1', $treballador->cognom1) }}" required>
                </div>

                <div class="mb-3">
                    <label for="cognom2" class="form-label">Cognom 2</label>
                    <input type="text" name="cognom2" id="cognom2" class="form-control" value="{{ old('cognom2', $treballador->cognom2) }}">
                </div>

                <div class="mb-3">
                    <label for="correu" class="form-label">Correu electrònic</label>
                    <input type="email" name="correu" id="correu" class="form-control" value="{{ old('correu', $treballador->correu) }}" required>
                </div>

                <div class="mb-3">
                    <label for="telefon" class="form-label">Telèfon</label>
                    <input type="text" name="telefon" id="telefon" class="form-control" value="{{ old('telefon', $treballador->telefon) }}">
                </div>

                <button type="submit" class="btn btn-primary">Actualitzar</button>
                <a href="{{ route('treballadors.index') }}" class="btn btn-secondary">Cancel·lar</a>
            </form>
        </div>
    </div>

</div>
@endsection
