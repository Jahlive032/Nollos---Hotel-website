<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IntroController extends Controller{

    // Afficher la page "index"
    public function index(){
        return view('index');
    }

    // Afficher la page "rooms"
    public function rooms(){
        return view('rooms.index');
    }

    // Afficher la page "facilities"
    public function facilities(){
        return view('facilities.index');
    }

    // Afficher la page "about"
    public function about(){
        return view('about.index');
    }

    // Afficher la page "contact"
    public function contact(){
        return view('contact.index');
    }
}