<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\WeatherForecast;

class WeatherForecastSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        
        $weather_Forescast = [
            'app_name' => 'disney',
            'app_icon' => './img/desiney.icon',
            'app_package' => 'Content of Post One',
            'default_activity' => 'great activity',
            'order' => 'Empty for now'
    ];
    foreach($weather_Forescast as $key => $value) {
        WeatherForecast::create($value);
    }
    }
}
