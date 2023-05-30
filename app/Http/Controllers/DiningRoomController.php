<?php

namespace App\Http\Controllers;

use App\Models\DiningRoom;
use Illuminate\Http\Request;


class DiningRoomController extends Controller
{
    //
    public function __invoke()
    {
        $dining_rooms = DiningRoom::all();
        return $dining_rooms;
    }
}
