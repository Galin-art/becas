<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeneficiarioController;

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
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




Route::get('/beneficiarios', [App\Http\Controllers\BeneficiarioController::class, 'index'])->name('lista.beneficiario');
Route::get('/search', [App\Http\Controllers\BeneficiarioController::class, 'show'])->name('searchBeneficiario');

Route::get('beneficiarios/{id}',[App\Http\Controllers\BeneficiarioController::class,'detalles'])->name('BeneficiarioInformacion');





























Route::get('/alumnos1', [App\Http\Controllers\AlumnoController::class, 'mediasuperior'])->name('lista.alumnos1');
Route::get('/alumnos2', [App\Http\Controllers\AlumnoController::class, 'superior'])->name('lista.alumnos2');

//Route::resource('/beneficiarios',BeneficiarioController::class);
