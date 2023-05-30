<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\HouseRule;


class HouseRuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        
        $rules = [
            'rule' => 'no smoke',
            'rule' => 'no pet',
        ];
        foreach($rules as $key => $value) {
            HouseRule::create($value);
        }
    }
}
