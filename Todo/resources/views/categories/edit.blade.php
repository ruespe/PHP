@extends('layouts.app')

@section('title', content: 'Editar tasca')

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

            <form action="{{ route('categories.update', $categories->id) }}" method="POST">
                @csrf
                @method('PUT')

                {{-- Títol --}}
                <div class="mb-3">
                    <label for="titol" class="form-label">Títol</label>
                    <input type="text" name="titol" id="titol"
                        class="form-control"
                        value="{{ old('titol', $categories->nom) }}" required>
                </div>

                {{-- Descripció --}}
                <div class="mb-3">
                    <label for="descripcio" class="form-label">Descripció</label>
                    <textarea name="descripcio" id="descripcio"
                        class="form-control" rows="3">{{ old('descripcio', $categories->descripcio) }}</textarea>
                </div>


                <button type="submit" class="btn btn-primary">Actualitzar</button>
                <a href="{{ route('categories.index') }}" class="btn btn-secondary">Cancel·lar</a>

            </form>

        </div>
    </div>

</div>
@endsection