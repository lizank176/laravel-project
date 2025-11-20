{{-- resources/views/hola.blade.php --}}

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Saludo con Blade</title>
    <style>
        body {
            font-family: sans-serif;
            text-align: center;
            margin-top: 50px;
        }
        h1 {
            color: #38a169; /* Un color verde para Laravel */
        }
    </style>
</head>
<body>
    <h1>¡Hola, {{ $nombre }}!</h1>

    @if ($nombre === 'mundo')
        <p>Este es el saludo predeterminado (método index).</p>
    @else
        <p>¡Has pasado tu nombre a través del parámetro de la URL (método show)!</p>
    @endif
</body>
</html>