<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SumaController; 
use App\Http\Controllers\AlumnosController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('inicial', function() {
    return view('inicial');
});

Route::get('clase', function() {
    return view('clase');
});

Route::get('vista1', function() {
    return view('vista1');
});

Route::get('vista2', function() {
    return view('vista2');
});

Route::get('vista3', function() {
    return view('vista3');
});

Route::get('/saludos', function() {
    return view('saludos');
});

Route::get('/suma', [SumaController::class,'index']);
Route::post('/suma', [SumaController::class, 'suma']);

Route::get('/app', function() {
    return view('layouts.app');
});

Route::get('/alumnos', [AlumnosController::class, 'index']);