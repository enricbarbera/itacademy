<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller{
    public function index(){
        return view('home');
        // return 'Pantalla principal';
        // return view('welcome');
    }
}
