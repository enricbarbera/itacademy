<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Encounter;
use App\Models\Team;

class MatchController extends Controller
{
    public function list(){
        $matches = Encounter::all();
        return view('matches.index', compact('matches'));
    }
    
    public function show(Encounter $match){
        // $match = Encounter::find($match);
        $team1 = Team::find($match->team_1_id);
        $team2 = Team::find($match->team_2_id);
        return view('matches.show', compact('team1', 'team2', 'match'));
        return $team1;
    }
    
    public function create(){
        return view('matches.create');
    }

    public function store(Request $request){
        // dd($request);
        $request->validate([
            'team_1' => 'required|integer|between:1,4',
            'team_2' => 'required|integer|between:1,4|different:team_1',
            'when' => 'required|date',
            'place' => 'nullable'
        ]);
        $match = new Encounter;
        $match -> when = $request -> when;
        $match -> place = $request -> place;
        $match -> team_1_id = $request -> team_1;
        $match -> team_2_id = $request -> team_2;
        $match -> save();
        $team1 = Team::find($match->team_1_id);
        $team2 = Team::find($match->team_2_id);
        return view('matches.show', compact('team1', 'team2', 'match'));
        return view('matches.show', compact('match'));
        return $team1->name;
        return $match->team_1_id;
    }
    
    public function edit(Encounter $match){
        // $match=Encounter::find($match);
        return view('matches.edit', compact('match'));
    }

    public function update(Request $request, Encounter $match){
        $request->validate([
            'team_1' => 'required|integer|between:1,4',
            'team_2' => 'required|integer|between:1,4|different:team_1',
            'when' => 'required|date',
            'place' => 'nullable'
        ]);
        $match -> team_1_id = $request -> team_1;
        $match -> team_2_id = $request -> team_2;
        $match -> when = $request -> when;
        $match -> place = $request -> place;
        $match -> save();
        return view('matches.update', compact('match'));
    }

    public function delete(Encounter $match){
        return view('matches.delete', compact('match'));
    }

    public function destroy(Encounter $match){
        $match -> delete();
        return view('matches.deleted', compact('match'));
    }


}
