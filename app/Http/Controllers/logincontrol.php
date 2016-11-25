<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Requests;

class logincontrol extends Controller
{
    //

     public function loginuser()
    {
        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            // Authentication passed...
            return redirect()->intended('index');
        }
    }

        public function index()
    {
        return view('index');
    }
}
