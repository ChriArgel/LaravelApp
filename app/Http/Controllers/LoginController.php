<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index(){
        return view('login');
    }
    
    public function store(Request $request){

        $this -> validate( $request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        //ESTO SOLICITA QUE ESTEN CORRECTAS LAS CREDENCIALES Y EN CASO DE QUE NO LO REGRESA A UNA PAGINA ANTERIOR CON UN MENSAJE QUE DIGA CREDENCIALES INCORRECTA ESTO ESTA CONECTADO CON EL REGISTER CONTROLLER

        if(!auth()-> attempt($request -> only('email', 'password'))){

            return back() -> with('mensaje','credenciales incorretas');
        }
        return redirect()->route('post.index', auth()->user()->username);
    }



}
