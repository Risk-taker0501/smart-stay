<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class App extends Model
{
    use HasFactory;
    protected $apps = [
        'id',
        'app_name',
        'app_package',
        'default_activity',
        'order'
    ];
}
