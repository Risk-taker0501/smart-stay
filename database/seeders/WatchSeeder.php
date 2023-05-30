<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Watch;

class WatchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        
        $watches = [
                'app_name' => 'disney',
                'app_icon' => './img/desiney.icon',
                'app_package' => 'Content of Post One',
                'default_activity' => 'great activity',
                'order' => 'Empty for now'
        ];
        foreach($watches as $key => $value) {
            Watch::create($value);
        }

    }
}
