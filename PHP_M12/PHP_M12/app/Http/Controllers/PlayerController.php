<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\Player;
use App\Models\Team;

class PlayerController extends Controller
{
    public function list(){
        $players = Player::all();
        return view('players.index', compact('players'));
    }
    
    public function create(){
        return view('players.create');
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required|unique:players',
            'address' => 'nullable|string',
            'email' => 'nullable|unique:players|email',
            'license' => 'required|unique:players|digits:8',
            'team' => 'required|integer|between:1,4'
        ]);
        $player = new Player;
        $player -> name = $request -> name;
        $player -> address = $request -> address;
        $player -> email = $request -> email;
        $player -> license = $request -> license;
        $player -> team_id = $request -> team;
        $player -> save();
        return redirect()->route('players.show', $player->id);
    }
    
    public function show(Player $player){
        $team = Team::find($player->team_id);
        return view('players.show', compact('player', 'team'));
    }

    public function edit(Player $player){
        return view('players.edit', compact('player'));
    }

    public function update(Request $request, Player $player){
        $request->validate([
            // 'name' => 'required'|Rule::unique('players')->ignore($player->id),
            'name' => ['required', Rule::unique('players')->ignore($player->id)],
            // 'name' => 'required|unique:players',
            'address' => 'nullable|string',
            // 'email' => 'nullable|unique:players|email',
            'email' => ['nullable', Rule::unique('players')->ignore($player->id)],
            // 'license' => 'required|unique:players|digits:8',
            'license' => ['required', 'digits:8', Rule::unique('players')->ignore($player->id)],
            'team' => 'required|integer|between:1,4'
        ]);
        $player -> name = $request -> name;
        $player -> address = $request -> address;
        $player -> email = $request -> email;
        $player -> license = $request -> license;
        $player -> team_id = $request -> team;
        $player -> save();
        return view('players.update', compact('player'));
    }

    public function delete(Player $player){
        return view('players.delete', compact('player'));
    }

    public function destroy(Player $player){
        $player -> delete();
        return view('players.deleted', compact('player'));
    }
}
