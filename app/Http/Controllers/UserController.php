<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dependencia;

class UserController extends Controller
{
    // Mostrar la página de inicio
    public function index()
    {
        $dependencias = Dependencia::all();
        
        return view('home', compact('dependencias'));
    }
}