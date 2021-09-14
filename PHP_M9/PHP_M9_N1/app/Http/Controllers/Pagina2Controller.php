<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Pagina2Controller extends Controller{
    public function __invoke() {
//        return "Pàgina 2";
        return view('pagina2.index');
    }
}
