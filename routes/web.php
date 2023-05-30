<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

/*
    HTTP Methods
    GET - Request a resource
    POST - Create a new resource
    PUT - Update a resource
    PATCH - Modify a resource
    DELETE - Delete a resource
    OPTIONS - Ask the server which verbs are allowed 
*/

// Route for single action controllers
Route::get('/', DashboardController::class);
