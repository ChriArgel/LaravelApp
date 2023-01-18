<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //
    public function index() {
        return view('registro');
    }

    public function store(Request $request) { 
        // el request es el vector que se envia por la red a la base de datos
        dd($request);
        $this -> validate($request, [
            'name' => 'required|min:5',
            'username' => 'required|unique:users|min:3|max:30',
            'email' => 'required|unique:users|email',
            'password' => 'required',

        ]);


    }

}
