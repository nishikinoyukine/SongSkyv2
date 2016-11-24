<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;

use App\Musica;

use Auth;

use View;

class mainController extends Controller
{

	public function songpublicity()
{
	
    $items = Musica::take(6)->orderby('id', 'desc')->get();
   //$items = Musica::all();
    return View::make('index', compact('items',$items));
}

public function songpublicityperfil()
{
	
    $items = Musica::take(6)->orderby('id', 'desc')->get();
   //$items = Musica::all();
    return View::make('UserProfile', compact('items',$items));
}
}
