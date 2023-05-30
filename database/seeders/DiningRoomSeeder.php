<?php

namespace Database\Seeders;

use App\Models\DiningRoom;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DiningRoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        
        $dining_rooms = [
            'dining_name' => 'Les Palmas',
            'dining_img' => './img/desiney.icon',
            'detail_imgs' => './img/desiney.icon,./img/desiney2.icon',
            'dining_rate' => '2',
            'dining_package' => 'packages',
            'default_activity' => 'great activity',
            'order' => 'Empty for now'
    ];
    foreach($dining_rooms as $key => $value) {
        DiningRoom::create($value);
    }
    }
}
