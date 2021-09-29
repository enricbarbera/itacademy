<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index(){
        // return 'Login usuari';
        return view ('auth.login');
    }
    public function store(Request $request){
        // $request->validate([
        //     'name' => 'required',
        //     'pwd' => 'required',
        // ]);
        // return $request;
        $nom = $request->name;
        $userNameCookie = cookie('userNameCookie', $nom, 60);
        // $response = response("user cookie");
        // $response->withcookie($userNameCookie);
        return view ('catalog.index', ['user'=>$nom]);
        // return $response;
        // return $nom;
        // return $userNameCookie;
        // return redirect ('catalog.index')->withCookie(cookie('userNameCookie', $request->input('name'),60));
    }
}
