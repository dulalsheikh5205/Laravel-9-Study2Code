<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class weatherController extends Controller
{
    // function getWeather($city){
    //     return "Weather in {$city} is good";
    // }
    // function getWeather($city='optional parameter'){
    //     return "Weather in {$city} is good";
    // }
    function getWeather($city=null){
        if(!$city){
            return "please mention a city";
        }
        return "Weather in {$city} is good";
    }
}
