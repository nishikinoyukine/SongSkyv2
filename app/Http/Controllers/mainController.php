<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;

use App\Musica;

use App\listarep;

use App\listacon;

use App\publicidad;

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
	$listas = listarep::take(5)->where('user_id',Auth::user()->id)->orderby('id', 'desc')->get();
    $items = Musica::take(6)->orderby('id', 'desc')->get();
   //$items = Musica::all();
    return View::make('UserProfile', compact('items',$items),compact('listas',$listas));
}

public function fillreproductor(request $request){
	$listaid = $request->input('idp');
$items = Musica::join('listacon','cancion.id', '=', 'listacon.cancion_id')->where('lista_id',$listaid)->get();
return View::make('repmusica', compact('items',$items));
}
}
