<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\App;

class DashboardController extends Controller
{
    /* 
    Whenever you will be using one method in a controller, 
    use the invoke method
    */
    public function __invoke()
    {        
        return view('index');
    }
}
