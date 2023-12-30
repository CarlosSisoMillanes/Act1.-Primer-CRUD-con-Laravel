<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UsuariosModel;

class UsuariosController extends Controller
{
    public function index()
    {
        $usuarios = UsuariosModel::all();
        return view('usuarios.index', compact('usuarios'));
    }
}