<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mi Aplicación Laravel')</title>
    <style>
        body { font-family: sans-serif; }
        #sidebar { float: left; width: 20%; padding: 15px; background-color: #f8f9fa; height: 100vh; }
        #content { margin-left: 25%; padding: 15px; }
        .clearfix::after { content: ""; clear: both; display: table; }
    </style>
</head>
<body>
    <header>
        <h1>Mi Blog de Laravel</h1>
    </header>

    <div class="clearfix">
        <aside id="sidebar">
            <h2>Menú</h2>
            @section('sidebar')
                <p>Enlaces principales del sitio.</p>
            @show
        </aside>

        <main id="content">
            @yield('content')
        </main>
    </div>

    <footer>
        <p>&copy; {{ date('Y') }} Artículos del Autor</p>
    </footer>
</body>
</html>