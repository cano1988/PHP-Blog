<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return "Aquí se mostrarán todos los posts";
    }

    public function create(){
        return "Aquí se mostrará un formulario para crear ";
    }

    public function  show($id){
        return "Aquí se mostrará el id: {$id}";
    }
}
