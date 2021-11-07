<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Player;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $this->call(TeamSeeder::class);
        Player::factory(50)->create();
    }
}
