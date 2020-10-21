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
/*
 Route::get('alumnos', function(){
 	return'lista alumnos';
 }
);

 Route::post('alumnos', function(){
 	return'alta de alumnos';
 }
);

 Route::put('alumnos/{id}', function($id){
 	return'Alumno modificado'.$id;
 }
);
 
*/
 Route::get('/inicio', function () {
    return view('inicio');
});
 Route::post('alumno', function(){
 	return'antonio';
 }
);
 
 Route::post('/guardar', [AlumnoController::class, 'create'])->name('alumno.guardar');