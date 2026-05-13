<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>{{ $post->titol }}</title>
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

<h1>{{ $post->titol }}</h1>

<p>Per <strong>{{ $post->user->name }}</strong> &bull; {{ $post->created_at->format('d/m/Y H:i') }}</p>

<p>{{ $post->contingut }}</p>

<hr>

@if(auth()->user()->role === 'admin' || (auth()->user()->role === 'editor' && $post->user_id === auth()->id()))
    <a href="{{ route('posts.edit', $post) }}">Editar</a>
    <form action="{{ route('posts.destroy', $post) }}" method="POST" style="display:inline"
          onsubmit="return confirm('Segur que vols eliminar aquest post?')">
        @csrf
        @method('DELETE')
        <button type="submit">Eliminar</button>
    </form>
    <br><br>
@endif

<a href="{{ route('posts.index') }}">← Tornar al llistat</a>

</body>
</html>
