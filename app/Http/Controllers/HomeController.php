<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function  index(){
        $properties=Property::all();
        return view('frontend.home',compact('properties'));
    }
}
