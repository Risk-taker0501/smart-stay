<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\App;

class HomeController extends Controller
{
    /* 
    Whenever you will be using one method in a controller, 
    use the invoke method
    */
    public function __invoke()
    {
        $apps =  App::all();
        return $apps;
    }
}
