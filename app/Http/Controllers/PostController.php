<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class PostController extends Controller
{
    // CONSTRUCTOR PARA VALIDAR QUE EL USUARIO ESTA LOGEADO
    public function __construct(){
        $this -> middleware('auth');
    }
    
    // VA A SER LA PAGINA DONDE VAMOS A CREAR NUESTRO MURO DE NOTIFICACIONES
    public function index(){
        return view ('dashboard');
    }

    public function create(){
        return view ('post.create');
    }


}
