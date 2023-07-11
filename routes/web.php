<?php

use App\Http\Controllers\PersonaController;
use App\Models\Persona;
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

// Route::get('/', function () {
//    // return view('welcome');
// });
Route::get('/',[PersonaController::class, 'index'])->name('Persona.index');
Route::get('/create',[PersonaController::class, 'create'])->name('persona.create');
Route::post('/store',[PersonaController::class, 'store'])->name('persona.store');
Route::get('/edit/{id} ',[PersonaController::class, 'edit'])->name('persona.edit');
Route::put('/update/{id} ',[PersonaController::class, 'update'])->name('persona.update');
Route::get('/show/{id}',[PersonaController::class, 'show'])->name('persona.show');
Route::delete('/destroy/{id}',[PersonaController::class, 'destroy'])->name('persona.destroy');