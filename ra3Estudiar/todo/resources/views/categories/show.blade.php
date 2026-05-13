@extends('layouts.app')

@section('title', 'Detall de la categoria')

@section('content')
<div class="container mt-4">

    <h1 class="mb-3">{{ $categoria->nom }}</h1>

    <div class="card">
        <div class="card-body">

            <p><strong>Descripció:</strong></p>
            <p>{{ $categoria->descripcio }}</p>

        </div>
    </div>

    <a href="{{ route('categories.index') }}" class="btn btn-secondary mt-3">Tornar</a>
</div>
@endsection
