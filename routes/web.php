<?php

use App\Http\Controllers\PpdbController;
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
    return view('home');
});
Route::get('/ppdb', [PpdbController::class,'index']);
Route::get('/ppdb/create', [PpdbController::class, 'create']);
Route::post('/ppdb', [PpdbController::class, 'store']);
Route::get('/ppdb/{id}/edit', [PpdbController::class, 'edit']);
Route::put('/ppdb/{id}', [PpdbController::class, 'update']);
Route::delete('/ppdb/{id}', [PpdbController::class, 'destroy']);