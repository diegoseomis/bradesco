<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CityController extends Controller
{
   public function index(){
    $cities = DB::select("SELECT ID, name, CountryCode, Population,District  FROM city LIMIT 10");
    return view('cities.index', compact('cities'));
   }
}