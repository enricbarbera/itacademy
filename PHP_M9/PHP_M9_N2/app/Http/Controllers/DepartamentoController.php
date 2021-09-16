<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DepartamentoController extends Controller{
    public function index($capturaUrl){
        return view('paises.departamentos.index', ['capturaPassada' => $capturaUrl]);
    }
    public function store($pais){
        return view('paises.departamentos.store', ['pais' => $pais]);
    }
    public function show($primeraCaptura, $segonaCaptura){
        return view('paises.departamentos.show', ['capturaPais' => $primeraCaptura, 'capturaDept' => $segonaCaptura]);
    }
    public function update($primeraCaptura, $segonaCaptura){
        return view('paises.departamentos.update', ['capturaPais' => $primeraCaptura, 'capturaDept' => $segonaCaptura]);
    }
    public function destroy($primeraCaptura, $segonaCaptura){
        return view('paises.departamentos.destroy', ['capturaPais' => $primeraCaptura, 'capturaDept' => $segonaCaptura]);
    }
}
