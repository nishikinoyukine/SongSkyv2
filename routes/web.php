<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/EditPi', function () {
    return view('imgPerfil');
});

Route::get('/Perfil', function () {
    return view('UserProfile');
});

Route::get('/uploadM', function () {
    return view('subirmusica');
});

Route::get('/editM', function () {
    return view('editarmusic');
});

Route::post('uploadimg', 'uploadsimg@postSave');
Route::post('uploadi', 'uploadsimg@save');
Route::get('/home', 'logincontrol@index');
Route::get('/loguser', 'logincontrol@loginuser');

Auth::routes();


Route::get('upload/{archivo}', function ($archivo) {
     $public_path = public_path();
     $url = $public_path.'/upload'.$archivo;
     //verificamos si el archivo existe y lo retornamos
     if (Storage::exists($archivo))
     {
       return response()->download($url);
     }
     //si no se encuentra lanzamos un error 404.
     abort(404);
 
});
