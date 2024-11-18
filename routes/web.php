<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


Route::get('/', function () {
    return view('home');
})->name('home');
Route::get('/sobre_nosotros',[HomeController::class,'about'])->name('about');
Route::get('/servicios',[HomeController::class,'services'])->name('services');
Route::get('/proyectos',[HomeController::class,'project'])->name('project');
Route::get('/contactenos',[HomeController::class,'contact'])->name('contact');
Route::get('/comentario',[HomeController::class,'comentario'])->name('comentario');
