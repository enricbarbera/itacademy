<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pais;

class PaisController extends Controller{
    public function index(){
        return view('paises.index');
//        $paises = Pais::all();
//        return $paises;
    }
    public function store() {
//        $pais = new Pais;
//        $pais->nom = $request->nom;
        return view('paises.store');
    }
    public function show($pais) {
        return view('paises.show', ['pais' => $pais]);
    }
    public function update($pais) {
        return view('paises.update', ['pais' => $pais]);
    }
    public function destroy($pais) {
        return view('paises.destroy', ['pais' => $pais]);
    }
}
