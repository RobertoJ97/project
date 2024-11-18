<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function about(){
        return view('nav.aboutus');
    }
    public function services(){
        return view('nav.services');
    }
    public function project(){
        return view('nav.project');
    }
    public function contact(){
        return view('nav.contactnav');
    }
    public function comentario(){
        return view('pages.comentario');
    }
}