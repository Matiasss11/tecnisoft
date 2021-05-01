<?php

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware(['auth'])->group(function() {
    //include 'rutas/Home.php';
    include 'rutas/TipoSexo.php';
    include 'rutas/User.php';
    include 'rutas/Roles.php';
    include 'rutas/Audit.php';
    include 'rutas/Configuracion.php';
    include 'rutas/TipoDocumento.php';
    include 'rutas/Personal.php';
    include 'rutas/Agenda.php';
    include 'rutas/Pais.php';
    include 'rutas/Provincia.php';
    include 'rutas/Ciudad.php';
    include 'rutas/Perfil.php';
    include 'rutas/Email.php';

});
