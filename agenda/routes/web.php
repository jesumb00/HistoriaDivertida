<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Categoria;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\PersonaController;
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
// ->only(['index', 'create', 'store', 'show', 'edit', 'update', 'destroy']);

Route::resource('categorias', CategoriaController::class);


Route::resource('personas', PersonaController::class);

// Route::patch('/persona/{persona}', PersonaController::class, 'estrellaOnOff');

Route::fallback(function () {
    return view('404');
});
