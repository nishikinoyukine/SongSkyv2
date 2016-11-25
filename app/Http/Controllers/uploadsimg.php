<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;

use Auth;


class uploadsimg extends Controller
{
    
    
public function save(Request $request)
{
 
       
 		
         if (\Request::file('profileimg')->isValid())
         {

            $file = $request->file('profileimg');
            $nombre = $file->getClientOriginalName();
             \Storage::disk('public')->put($nombre,  \File::get($file));
         }
         else
         {

            return redirect('\EditPi')->with('error-message', 'Carga el Archivo Primero');
         }

         if (\Request::file('Portadaimg')->isValid())
         {
       //obtenemos el campo file definido en el formulario
       
        $file1 = $request->file('Portadaimg');
       //obtenemos el nombre del archivo
       
       $nombre1 = $file1->getClientOriginalName();
 
       //indicamos que queremos guardar un nuevo archivo en el disco local
      
       \Storage::disk('public')->put($nombre1,  \File::get($file1));
         }
         else
         {

            return redirect('\EditPi')->with('error-message', 'Carga el Archivo Primero');
         }


        
            if (\Request::file('Portadaimg')->isValid())
            {
                $upload = User::find(Auth::user()->id);
                $upload->Personal_Image = $nombre;
                $upload->Banner_Image = $nombre1;
                if($upload->save())
                {
                    return redirect('Perfil')->with('success-message', 'File has been uploaded');
                }
                else
                {
                    \File::delete($path."/".$fileName);
                    return redirect('EditPi')->with('error-message', 'An error ocurred saving data into database');
                }
            }


       
}

}
