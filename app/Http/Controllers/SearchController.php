<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    function  index(){
        $properties=Property::all();
        return view('frontend.search',compact('properties'));
    }
}
