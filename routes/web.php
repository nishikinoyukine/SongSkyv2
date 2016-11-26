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

Route::get('/EditPi', function () {
    return view('imgPerfil');
});

//Route::get('/Perfil', function () {
  //  return view('UserProfile');
//});

Route::get('/uploadM', function () {
    return view('subirmusica');
});



Route::get('/editData', function () {
    return view('editardatos');
});

//Route::get('/SUamin', function () {
  //  return view('Administrador');
//});
Route::get('/repind', 'mainController@fillrepind');
Route::post('/busqueda', 'mainController@busqueda');
Route::post('commentvi', 'updataController@comentvi');
Route::get('/vperfil', 'mainController@visitaperfil');
Route::post('commentpro', 'updataController@comentpro');
Route::post('addpub', 'updataController@uploadpub');
Route::get('SUamin', 'updataController@loadadmin');
Route::get('/reproductor', 'mainController@fillreproductor');
Route::post('addtolist', 'updataController@addtolist');
Route::get('makelist', 'updataController@filllistrep');
Route::post('clist', 'updataController@createlist');
Route::get('/Perfil', 'mainController@songpublicityperfil');
Route::get('/', 'mainController@songpublicity');
Route::post('editupsong', 'updataController@updatesong');
Route::get('editM', 'updataController@create');
Route::post('uploadmus', 'updataController@upmusic');
Route::post('updateda', 'updataController@update');
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

