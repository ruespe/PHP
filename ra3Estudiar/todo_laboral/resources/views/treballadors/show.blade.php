@extends('layouts.app')

@section('title', 'Detall treballador')

@section('content')
<div class="container mt-4">

    <h1 class="mb-4">Detall del treballador</h1>

    <div class="card">
        <div class="card-body">
            <p><strong>DNI:</strong> {{ $treballador->dni }}</p>
            <p><strong>Nom:</strong> {{ $treballador->nom }}</p>
            <p><strong>Cognom 1:</strong> {{ $treballador->cognom1 }}</p>
            <p><strong>Cognom 2:</strong> {{ $treballador->cognom2 }}</p>
            <p><strong>Correu:</strong> {{ $treballador->correu }}</p>
            <p><strong>Telèfon:</strong> {{ $treballador->telefon }}</p>
        </div>
    </div>

    <div class="mt-3">
        <a href="{{ route('treballadors.edit', $treballador->dni) }}" class="btn btn-warning">Editar</a>
        <a href="{{ route('treballadors.index') }}" class="btn btn-secondary">Tornar</a>
    </div>

</div>
@endsection
