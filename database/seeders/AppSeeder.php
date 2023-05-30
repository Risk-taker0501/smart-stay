<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\App;

class AppSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $apps = [
                'app_name' => 'disney',
                'app_icon' => './img/desiney.icon',
                'app_package' => 'Content of Post One',
                'default_activity' => 'great activity',
                'order' => 'Empty for now'
        ];
        foreach($apps as $key => $value) {
            App::create($value);
        }

    }
}
