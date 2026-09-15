<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Sistem Event')</title>
</head>
<body style="font-family: sans-serif; padding: 20px;">

    <header>
        <nav>
            <a href="{{ route('events.index') }}">Daftar Event</a>
        </nav>
        <hr>
    </header>

    <main>
        @yield('content')
    </main>

</body>
</html>