<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatalogController extends Controller
{
    // public function __construct(){
    //     $this->middleware('date');
    // }
    public function index(){
        // return 'Llista llibres';
        $nom = \Request::cookie('userNameCookie','user');
        return view ('catalog.index', ['user'=>$nom]);
        // return $nom;
    }
    public function show($id){
        // return "Vista detall llibre $id";
        return view ('catalog.show', ['id'=>$id]);
    }
    public function create(){
        // return 'Afegir llibre';
        return view ('catalog.create');
    }
    public function store(Request $request){
        $request->validate([
            'titol' => 'required',
            'autor' => 'required',
            'any' =>  'required' 
        ]);
        // return $request;
        return view ('catalog.entradaOk', ['llibre'=>$request]);
    }
    public function edit($id){
        return view ('catalog.edit', ['id'=>$id]);
    }
    public function update(Request $request){
        // return "Modificar llibre $id";
        $request->validate([
            'titol' => 'required',
            'autor' => 'required',
            'any' =>  'required' 
        ]);
        return view ('catalog.edicioOk', ['llibre'=>$request]);
    }
}
