<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo App</title>
</head>
<body>
    <nav>
        <a href="{{ route('categories.index') }}">Categories</a>
        <a href="{{ route('tasques.index') }}">Tasques</a>
    </nav>

    <main>
        @yield('content')
    </main>
</body>
</html>
