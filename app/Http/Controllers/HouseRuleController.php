<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HouseRule;

class HouseRuleController extends Controller
{
    /* 
    Whenever you will be using one method in a controller, 
    use the invoke method
    */
    public function __invoke()
    {
        $rules =  HouseRule::all();
        return $rules;
    }
    
}
