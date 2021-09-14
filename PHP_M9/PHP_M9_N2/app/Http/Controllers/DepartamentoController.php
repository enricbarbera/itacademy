<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DepartamentoController extends Controller{
    public function index(){
        return view('paises.{pais}.departamentos.index');
    }
    public function store(){
        return view('paises.{pais}.departamentos.store');
    }
    public function show(){
        return view('paises.{pais}.departamentos.{departamento}.show');
    }
    public function update(){
        return view('paises.{pais}.departamentos.{departamento}.update');
    }
    public function destroy(){
        return view('paises.{pais}.departamentos.{departamento}.destroy');
    }
}
