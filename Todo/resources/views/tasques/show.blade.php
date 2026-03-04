@extends('layouts.app')

@section('title', 'Detall de la tasca')

@section('content')
<div class="container mt-4">

    <h1 class="mb-3">{{ $tasca->titol }}</h1>

    <div class="card">
        <div class="card-body">

            <p><strong>Descripció:</strong></p>
            <p>{{ $tasca->descripcio }}</p>

            <p><strong>Prioritat:</strong> {{ $tasca->prioritat }}</p>
            <p><strong>Estat:</strong> {{ $tasca->status }}</p>

            @if($tasca->categoria)
                <p><strong>Categoria:</strong> {{ $tasca->categoria->nom }}</p>
            @else
                <p><strong>Categoria:</strong> Sense categoria</p>
            @endif

        </div>
    </div>

    <a href="{{ route('tasques.index') }}" class="btn btn-secondary mt-3">Tornar</a>
</div>
@endsection
