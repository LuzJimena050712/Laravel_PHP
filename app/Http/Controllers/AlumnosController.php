<?php

namespace App\Http\Controllers;

use App\Models\Alumnos;
use Illuminate\Http\Request;

class AlumnosController extends Controller
{
    
    public function index()
    {
        $alumnos = Alumnos::all();
        return view('alumnos.index', compact('alumnos'));
    }
}