{{-- 4. Heredar del master layout --}}
@extends('layouts.master')

{{-- 3. Definir la sección title --}}
@section('title', "Artículos del Autor: $username")

{{-- 3. Definir la sección sidebar (opcional, si se quiere modificar) --}}
@section('sidebar')
    @parent {{-- Mantiene el contenido del master y añade más --}}
    <p>Opciones específicas de gestión de artículos.</p>
@endsection

{{-- 3. Definir la sección content --}}
@section('content')

    <h2>Detalles del Autor</h2>
    <p>
        **ID de Autor:** **{{ $id }}** <br>
        **Nombre de Usuario:** **{{ $username }}**
    </p>

    <hr>

    <h3>Lista de Artículos</h3>

    {{-- 5. Salida HTML dinámica y condicional --}}
    @if (!empty($articles))
        
        <p>El autor ha escrito los siguientes {{ count($articles) }} artículos:</p>
        
        {{-- 6. Usar un bucle @foreach para mostrar la lista --}}
        <ul>
            @foreach ($articles as $title)
                <li>{{ $title }}</li>
            @endforeach
        </ul>
    
    @else
        
        <p style="color: red; font-weight: bold;">
            No existen artículos.
        </p>
        
    @endif

@endsection
