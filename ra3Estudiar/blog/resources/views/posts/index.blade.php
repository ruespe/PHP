<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Posts</title>
</head>
<body>

<nav>
    <strong>Blog</strong>
    &nbsp;|&nbsp;
    Hola, <strong>{{ auth()->user()->name }}</strong> ({{ auth()->user()->role }})
    &nbsp;|&nbsp;
    <form action="{{ route('logout') }}" method="POST" style="display:inline">
        @csrf
        <button type="submit">Tancar sessió</button>
    </form>
</nav>

<hr>

<h1>
    @if(auth()->user()->role === 'editor')
        Els meus Posts
    @else
        Tots els Posts
    @endif
</h1>

@if(session('success'))
    <p>{{ session('success') }}</p>
@endif

@if(in_array(auth()->user()->role, ['editor', 'admin']))
    <a href="{{ route('posts.create') }}">+ Nou Post</a>
@endif

<hr>

@if($posts->isEmpty())
    <p>No hi ha posts disponibles.</p>
@else
    @foreach($posts as $post)
        <div>
            <h2><a href="{{ route('posts.show', $post) }}">{{ $post->titol }}</a></h2>
            <p>Per <strong>{{ $post->user->name }}</strong> &bull; {{ $post->created_at->format('d/m/Y H:i') }}</p>
            <p>{{ Str::limit($post->contingut, 200) }}</p>

            @if(auth()->user()->role === 'admin' || (auth()->user()->role === 'editor' && $post->user_id === auth()->id()))
                <a href="{{ route('posts.edit', $post) }}">Editar</a>
                <form action="{{ route('posts.destroy', $post) }}" method="POST" style="display:inline"
                      onsubmit="return confirm('Segur que vols eliminar aquest post?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Eliminar</button>
                </form>
            @endif
        </div>
        <hr>
    @endforeach
@endif

</body>
</html>
