<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class HolaController extends Controller
{
    /**
     * Muestra el saludo predeterminado "Hola, mundo".
     */
    public function index()
    {
        // El método view() busca la vista en resources/views/
        return view('hola', ['nombre' => 'mundo']);
    }

    /**
     * Muestra el saludo incluyendo el nombre pasado como parámetro.
     * @param string $nombre
     */
    public function show($nombre)
    {
        return view('hola', ['nombre' => $nombre]);
    }
}