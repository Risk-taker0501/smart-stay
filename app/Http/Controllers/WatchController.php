<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Watch;

class WatchController extends Controller
{
    //
    public function __invoke()
    {
        $watches =  Watch::all();
        return $watches;
    }
}
