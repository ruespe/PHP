<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Nou Post</title>
</head>
<body>

<nav>
    <strong>Blog</strong>
    &nbsp;|&nbsp;
    <a href="{{ route('posts.index') }}">Posts</a>
    &nbsp;|&nbsp;
    Hola, <strong>{{ auth()->user()->name }}</strong> ({{ auth()->user()->role }})
    &nbsp;|&nbsp;
    <form action="{{ route('logout') }}" method="POST" style="display:inline">
        @csrf
        <button type="submit">Tancar sessió</button>
    </form>
</nav>

<hr>

<h1>Nou Post</h1>

<form action="{{ route('posts.store') }}" method="POST">
    @csrf

    <div>
        <label for="titol">Títol:</label><br>
        <input type="text" name="titol" id="titol" value="{{ old('titol') }}">
        @error('titol')
            <p>{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label for="contingut">Contingut:</label><br>
        <textarea name="contingut" id="contingut" rows="8" cols="60">{{ old('contingut') }}</textarea>
        @error('contingut')
            <p>{{ $message }}</p>
        @enderror
    </div>

    <br>
    <button type="submit">Crear Post</button>
    <a href="{{ route('posts.index') }}">Cancel·lar</a>
</form>

</body>
</html>
