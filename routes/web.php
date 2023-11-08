<?php

use App\Http\Controllers\TacheController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/tache',[TacheController::class, 'getListeTaches']);

Route::get('/tache/{id_tache}/details',[TacheController::class, 'show']);

Route::get('/tache/termine/{id_tache}',[TacheController::class, 'termine']);

Route::get('/tache/nouveau',[TacheController::class, 'create']);

Route::post('/tache/save',[TacheController::class, 'save']);




