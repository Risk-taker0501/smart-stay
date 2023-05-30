<?php

namespace App\Http\Controllers;

use App\Models\WeatherForecast;
use Illuminate\Http\Request;

class WeatherForecastController extends Controller
{
    //
    public function __invoke()
    {
        $weather_forecast =  WeatherForecast::all();
        return $weather_forecast;
    }
}
