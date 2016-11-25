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

class updataController extends Controller
{
	public function update(Request $request)
{

	$passwordu = $request->input('password');
	$date = $request->input('fecha');
	$sexo = $request->input('sexo');
     $updatedata = User::find(Auth::user()->id);
                $updatedata->Password = bcrypt($passwordu);
                $updatedata->Fecha_Nacimiento = $date;
                $updatedata->Sexo = $sexo;
                $updatedata->save();
                return redirect('Perfil');
}    

public function upmusic(Request $request)
{
   
 
$file = $request->file('archivo');
            $nombre = $file->getClientOriginalName();
             \Storage::disk('public')->put($nombre,  \File::get($file));
 $file1 = $request->file('Disco');
            $nombre1 = $file1->getClientOriginalName();
             \Storage::disk('public')->put($nombre1,  \File::get($file1));
$titulo= $request->input('titulo');
$premium= $request->input('genero');
$precio= $request->input('precio');

// Creamos el objeto
$cancion = new Musica();
// Seteamos las propiedades
$cancion->nombre = $titulo ;
$cancion->url_song = $nombre ;
$cancion->url_image = $nombre1 ;
$cancion->premium = $premium ;
$cancion->precio = $precio;
$cancion->user_id = Auth::user()->id ;

 
// Guardamos en la base de datos (equivalente al flush de Doctrine)
$cancion->save();
return redirect('Perfil');
}     

public function create()
{
	$items = Musica::where('user_id',Auth::user()->id)->get();
   //$items = Musica::all();
    return View::make('editarmusic', compact('items',$items));
}

public function updatesong(Request $request)
{
$titulo= $request->input('titulo');
$premium= $request->input('genero');
$precio= $request->input('precio');
$id= $request->input('item_id');

// Creamos el objeto
$cancion = Musica::find($id);
// Seteamos las propiedades
$cancion->nombre = $titulo ;
$cancion->premium = $premium ;
$cancion->precio = $precio;
$cancion->save();

return redirect('Perfil');
}

public function createlist(Request $request)
{

$titulo= $request->input('nalis');
$listrep = new listarep();
// Seteamos las propiedades
$listrep->Nombre = $titulo ;
$listrep->user_id = Auth::user()->id ;
$listrep->save();
return redirect('makelist')->with('message', 'Lista Agregada Correctamente');;
}

public function filllistrep()
{
    $items = Musica::where('user_id',Auth::user()->id)->get();
    $listas = listarep::where('user_id',Auth::user()->id)->get();
   //$items = Musica::all();
    return View::make('CreateList', compact('items',$items),compact('listas',$listas));
}

public function addtolist(request $request){
 $lista= $request->input('lista_id');
$cancion= $request->input('item_id');   
$listcon = new listacon();
// Seteamos las propiedades
$listcon->lista_id = $lista;
$listcon->cancion_id = $cancion;
$listcon->user_id = Auth::user()->id ;

$listcon->save();
return redirect('makelist')->with('message', 'Cancion agragada a lista correctamente');;

}

public function loadadmin(request $request){

$pub = publicidad::orderby('id','DESC')->take(1)->get();;
return View::make('Administrador', compact('pub',$pub));


}

public function uploadpub(request $request){
    $file = $request->file('Bannerp');
            $nombre = $file->getClientOriginalName();
             \Storage::disk('public')->put($nombre,  \File::get($file));
 
$urlvideo= $request->input('videourl');
// Creamos el objeto
$publi = new publicidad();
// Seteamos las propiedades
$publi->url_video = $urlvideo ;
$publi->url_banner = $nombre ;

 
// Guardamos en la base de datos (equivalente al flush de Doctrine)
$publi->save();
return redirect('/');

}

}
