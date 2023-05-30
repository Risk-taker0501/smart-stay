<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiningRoom extends Model
{
    use HasFactory;
    protected $dining_rooms = [
        'id',
        'dining_name',
        'dining_img',
        'detail_imgs',
        'dining_package',
        'dining_rate',
        'default_activity',
        'order'
    ];
}
