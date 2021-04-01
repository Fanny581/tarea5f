<?php
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\inveController;
use App\Http\Controllers\ventaController;
use Illuminate\Support\Facades\Route;

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
Route::get('/ruta1/{ruta1?}', [ventaController::class, 'show']);
Route::get('/ruta2/{ruta2?}', [ClienteController::class, 'show']);
Route::get('/ruta3/{ruta3?}', [inveController::class, 'show']);
