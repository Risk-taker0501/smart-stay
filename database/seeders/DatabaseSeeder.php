<?php

namespace Database\Seeders;

use App\Models\App;
use App\Models\User;
use App\Models\Watch;
use App\Models\HouseRule;
use App\Models\DiningRoom;
use App\Models\WeatherForecast;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
//        $this->call(PostsTableSeeder::class);
        App::factory(10)->create();
        HouseRule::factory(3)->create();
        Watch::factory(20)->create();
        DiningRoom::factory(50)->create();
        WeatherForecast::factory(20)->create();
        User::factory(20)->create();
    }
}
