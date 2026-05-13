@extends('layouts.app')

@section('title', 'Nou treballador')

@section('content')
<div class="container mt-4">

    <h1 class="mb-4">Nou treballador</h1>

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
            <form action="{{ route('treballadors.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="dni" class="form-label">DNI</label>
                    <input type="text" name="dni" id="dni" class="form-control" value="{{ old('dni') }}" required maxlength="9">
                </div>

                <div class="mb-3">
                    <label for="nom" class="form-label">Nom</label>
                    <input type="text" name="nom" id="nom" class="form-control" value="{{ old('nom') }}" required>
                </div>

                <div class="mb-3">
                    <label for="cognom1" class="form-label">Cognom 1</label>
                    <input type="text" name="cognom1" id="cognom1" class="form-control" value="{{ old('cognom1') }}" required>
                </div>

                <div class="mb-3">
                    <label for="cognom2" class="form-label">Cognom 2</label>
                    <input type="text" name="cognom2" id="cognom2" class="form-control" value="{{ old('cognom2') }}">
                </div>

                <div class="mb-3">
                    <label for="correu" class="form-label">Correu electrònic</label>
                    <input type="email" name="correu" id="correu" class="form-control" value="{{ old('correu') }}" required>
                </div>

                <div class="mb-3">
                    <label for="telefon" class="form-label">Telèfon</label>
                    <input type="text" name="telefon" id="telefon" class="form-control" value="{{ old('telefon') }}">
                </div>

                <button type="submit" class="btn btn-primary">Guardar</button>
                <a href="{{ route('treballadors.index') }}" class="btn btn-secondary">Cancel·lar</a>
            </form>
        </div>
    </div>

</div>
@endsection
