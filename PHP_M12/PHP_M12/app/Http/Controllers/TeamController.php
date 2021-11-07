<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;

class TeamController extends Controller
{
    public function list(){
        $teams = Team::all();
        return view('teams.index', compact('teams'));
    }
    
    public function create(){
        return view('teams.create');
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'color' => 'nullable'
        ]);
        $team = new Team;
        $team -> name = $request -> name;
        $team -> city = $request -> city;
        $team -> stadium = $request -> stadium;
        $team -> color = $request -> color;
        $team -> save();
        // return view('teams.createOk', ['nom'=>$request->name]);
        return redirect()->route('teams.show', $team->id);
    }
    
    // public function read(){
    //     return view('teams.read');
    // }
    
    // public function show(Request $request){
    //     $team = new Team;
    //     $team = Team::find($request->id);
    //     return view('teams.show', compact('team'));
    // }
    
    public function show(Team $team){
        // $team = Team::find($team);
        return view('teams.show', compact('team'));
    }
    
    // public function show($elquesigui){
    //     return $elquesigui;
    // }
    
    public function edit(Team $team){
        // $team = Team::find($team);
        return view('teams.edit', compact('team'));
    }
    
    // public function whichUpdate(Request $request){
    //     $team = new Team;
    //     $team = Team::find($request->id);
    //     return view('teams.whichUpdate', compact('team'));
    // }
    
    public function update(Request $request, Team $team){
        $request->validate([
            'name' => 'required'
        ]);
        // return $team;
        $team -> name = $request -> name;
        $team -> city = $request -> city;
        $team -> stadium = $request -> stadium;
        $team -> color = $request -> color;
        $team -> save();
        // return $team;
        return view('teams.update', compact('team'));
    }
    
    public function delete(Team $team){
        // $team = Team::find($team);
        return view('teams.delete', compact('team'));
    }

    public function destroy(Team $team){
        $team -> delete();
        return view('teams.deleted', compact('team'));
    }
}
