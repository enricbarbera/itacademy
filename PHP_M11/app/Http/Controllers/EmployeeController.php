<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Request;
use App\Models\Employee;
use Cookie;

class EmployeeController extends Controller{
    public function login(){
        return view('login');
    }
    public function index(Request $request){
        $employees = Employee::all();
        // return $employees;
        $nomUsuari = Cookie::queue(Cookie::forever('nomUsuari', $request->name));
        // $nomUsuari = Cookie::make('nomUsuari', 'PILI', 120);
        // $nomUsuari = Cookie::queue(Cookie::make('nomUsuari', $request->name, 120));
        // $nomUsuari = cookie('nomUsuari', 'pepa', 120);
        // return view('index', ['nomUsuari'=>Request::cookie('nomUsuari')]);
        // return $request->name;
        // return Request::cookie('nomUsuari');
        // return $nomUsuari;
        // return view('index', ['nomUsuari'=>$request->name], compact('employees'));
        // return Cookie::get('nomUsuari');
        // return Cookie::get('nomUsuari');
        $val = Cookie::get('nomUsuari');
        return view('index', compact('employees'));
        // return $val;
    }
    public function create(){
        return view('create');
    }
    public function createOk(Request $request){
        $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'dni' => 'required'
        ]);
        $employee = new Employee;
        $employee -> name = $request -> name;
        $employee -> surname = $request -> surname;
        $employee -> dni = $request -> dni;
        $employee -> save();
        return view('createOk', ['nom'=>$request->name]);
    }
    public function edit(Employee $employee){
        // $employee = Employee::where('id', $id)->get();{
        // return view('edit', ['id'=>$id], compact('employee'));}
        return view ('edit', compact('employee'));
    }
    public function editOk(Request $request, Employee $employee){
        // $employee = new Employee;
        $employee -> name = $request -> name;
        $employee -> surname = $request -> surname;
        $employee -> dni = $request -> dni;
        $employee -> save();
        // return $employee;
        // return $request;
        return view('editOk', ['nom'=>$request->name]);
    }
    public function show($id){
        // $employee = Employee::where('id', $id)->get();
        $employee = Employee::find($id);
        // return $employee[0]->name;
        return view('show', ['id'=>$id], compact('employee'));
    }
    public function delete(Employee $employee){
        return view('delete', compact('employee'));
    }
    public function deleteOk(Employee $employee){
        $employee -> delete();
        return view('deleteOk', compact('employee'));
    }
}
