<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Team;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $team = new Team;
        $team->name = "One";
        $team->city = "First";
        $team->stadium = "First center";
        $team->color = "Blue";
        $team->save();

        $team2 = new Team;
        $team2->name = "Two";
        $team2->city = "Second";
        $team2->stadium = "Second center";
        $team2->color = "Red";
        $team2->save();
        
        $team3 = new Team;
        $team3->name = "Three";
        $team3->city = "Third";
        $team3->stadium = "Third center";
        $team3->color = "Green";
        $team3->save();
        
        $team4 = new Team;
        $team4->name = "Four";
        $team4->city = "Fourth";
        $team4->stadium = "Fourth center";
        $team4->color = "Yellow";
        $team4->save();
    }
}
