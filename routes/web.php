<?php
use RealRashid\SweetAlert\Facades\Alert;
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

Route::get('beneficiarios/{beneficiario_id}',[App\Http\Controllers\BeneficiarioController::class,'detalles'])->name('BeneficiarioInformacion');
//Route::get('beneficiarios/{id}',[App\Http\Controllers\BeneficiarioController::class,'detalles1'])->name('transferencias');


Route::get('beneficiario/tarjeta',[\App\Http\Controllers\TarjetaController::class,'index'])->name('tajetas.persona');




//regiones

Route::get('/region',[\App\Http\Controllers\RegionController::class, 'region'])->name('region.Huajuapan');


//usuarios
Route::get('/usuario',[\App\Http\Controllers\UsuarioController::class,'index'])->name('lista.Usuario');
Route::post('/',[\App\Http\Controllers\UsuarioController::class,'store'])->name('users.store');

//importar
Route::get('/importar',[\App\Http\Controllers\UsuarioController::class,'importar'])->name('import.tablas');


//exel
Route::post('/importar1',[\App\Http\Controllers\RegionController::class,'import'])->name('region.import.exel');
Route::post('/importar2',[\App\Http\Controllers\MunicipioController::class,'import1'])->name('municipio.import.exel');
Route::post('/importar3',[\App\Http\Controllers\LocalidadController::class,'import2'])->name('localidad.import.exel');
Route::post('/importar4',[\App\Http\Controllers\BeneficiarioController::class,'import4'])->name('benefeciario.import.exel');
Route::post('/importar5',[\App\Http\Controllers\IntegranteController::class,'import5'])->name('integrantes.import.exel');
Route::post('/importar6',[\App\Http\Controllers\DomicilioController::class,'import6'])->name('domicilio.import.exel');
Route::post('/importar7',[\App\Http\Controllers\TransferenciasController::class,'import7'])->name('transferencia.import.exel');
Route::post('/importar8',[\App\Http\Controllers\BimestreController::class,'import8'])->name('bimestres.import.exel');





















Route::get('/alumnos1', [App\Http\Controllers\AlumnoController::class, 'mediasuperior'])->name('lista.alumnos1');
Route::get('/alumnos2', [App\Http\Controllers\AlumnoController::class, 'superior'])->name('lista.alumnos2');

//Route::resource('/beneficiarios',BeneficiarioController::class);
