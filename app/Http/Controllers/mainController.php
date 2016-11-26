<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;

use App\Musica;

use App\listarep;

use App\listacon;

use App\publicidad;

use App\comentario;

use Auth;

use View;

class mainController extends Controller
{

	public function songpublicity()
{
	$pub = publicidad::orderby('id','DESC')->take(1)->get();
	
	foreach ($pub as $pubs) {
		$text = $pubs->url_video;
		$ban = $pubs->url_banner;
	}
    $items = Musica::take(6)->orderby('id', 'desc')->get();
   //$items = Musica::all();
    return View::make('index')->with(compact('items',$items))->with(compact('text',$text))->with(compact('ban',$ban));
}

public function songpublicityperfil()
{
	$posts = User::join('comentario','users.id', '=', 'comentario.com_user')->where('user_id',Auth::user()->id)->orderby('comentario.id', 'desc')->paginate(4);
	$listas = listarep::take(5)->where('user_id',Auth::user()->id)->orderby('id', 'desc')->get();
    $items = Musica::take(6)->orderby('id', 'desc')->get();
   //$items = Musica::all();
    return View::make('UserProfile', compact('items',$items),compact('listas',$listas))->with(array('posts' => $posts, 'titulo' => 'Paginación con laravel'));
}

public function fillreproductor(request $request){
	$listaid = $request->input('idp');
$items = Musica::join('listacon','cancion.id', '=', 'listacon.cancion_id')->where('lista_id',$listaid)->get();
return View::make('repmusica', compact('items',$items));
}

public function visitaperfil(request $request)
{
	$iduser = $request->input('hash');
	$posts = User::join('comentario','users.id', '=', 'comentario.com_user')->where('user_id',$iduser)->orderby('comentario.id', 'desc')->paginate(4);
	$visita = User::where('id',$iduser)->get();
	$listas = listarep::take(5)->where('user_id',$iduser)->orderby('id', 'desc')->get();
    $items = Musica::take(6)->orderby('id', 'desc')->get();
   //$items = Musica::all();
    return View::make('visitProfile', compact('items',$items),compact('listas',$listas))->with(array('posts' => $posts, 'titulo' => 'Paginación con laravel'))->with('visita',$visita);
}

public function busqueda(request $request){

$search = $request->input('BUSCAR');
$Music = Musica::select()
                ->where('Nombre', 'LIKE', '%'.$search.'%')
                ->orderBy('id', 'desc')
                ->paginate(5);
$usersearch = User::select()
                ->where('name', 'LIKE', '%'.$search.'%')
                ->orderBy('id', 'desc')
                ->paginate(5);
                	return View::make('Buscador')->with('Music',$Music)->with('usersearch',$usersearch);
}

public function fillrepind(request $request){
	$song = $request->input('id');
$items = Musica::where('id',$song)->get();
return View::make('repind', compact('items',$items));
}

}
