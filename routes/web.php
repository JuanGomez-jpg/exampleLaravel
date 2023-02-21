<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaginaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('canciones/{id_cancion?}', [PaginaController::class, 'canciones']);

Route::get('contacto', [PaginaController::class, 'contacto']);
Route::post('contacto', [PaginaController::class, 'GetSetFormData']);

/*
Route::get('canciones/{id_cancion}', function ($id_cancion) {
    $listaCanciones = [];
    $listaCanciones[] = ['nombre' => 'D E A T H W I S H', 'artista' => 'Within Destruction'];
    $listaCanciones[] = ['nombre' => 'The Grey', 'artista' => 'Bad Omens'];
    $listaCanciones[] = ['nombre' => 'Without me', 'artista' => 'Dayseeker'];

    $cancionSeleccionada = $listaCanciones[$id_cancion];

    //dd($listaCanciones);

    return view('cancion-detalle', compact('cancionSeleccionada'));
});
*/