<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ComentarioController;


Route::get('/', function () {
    return view('home');
})->name('home');
Route::get('/sobre_nosotros',[HomeController::class,'about'])->name('about');
Route::get('/servicios',[HomeController::class,'services'])->name('services');
Route::get('/proyectos',[HomeController::class,'project'])->name('project');
Route::get('/contactenos',[HomeController::class,'contact'])->name('contact');
Route::get('/comentario',[ComentarioController::class,'create'])->name('create');
Route::post('/comentario',[ComentarioController::class,'store'])->name('store');
