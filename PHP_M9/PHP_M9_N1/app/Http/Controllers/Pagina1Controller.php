<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Pagina1Controller extends Controller{
    public function index() {
//        return "Pàgina 1";
        return view('pagina1.index');
    }
    public function create() {
//        return "Formulari inserció dades";
        return view('pagina1.create');
    }
    public function show($nom) {
//        return "Hello $nom";
        return view('pagina1.show', ['nom' => $nom]);
    }
}
