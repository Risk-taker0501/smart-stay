<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Watch extends Model
{
    use HasFactory;
    protected $watches = [
        'id',
        'app_name',
        'app_package',
        'default_activity',
        'order'
    ];
}
