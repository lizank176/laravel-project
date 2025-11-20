<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        // 1. Asignar valores fijos a las variables
        $id = 10;
        $username = 'lisa';
        
        // Array de ejemplo con datos.
        $articles = [
            'Introducción a Laravel 11',
            'Blade: Plantillas y Componentes',
            'Bases de Datos con Eloquent'
        ];
        
        // Opcional: para probar el caso de array vacío, puedes usar:
        // $articles = [];

        // 2. Renderizar la vista 'articles.page' y pasar los datos
        return view('articles.page', [
            'id' => $id,
            'username' => $username,
            'articles' => $articles
        ]);
    }
}