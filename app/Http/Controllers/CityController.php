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

   public function byCountry($countryCode){
      $cities = DB::select('SELECT ID, name, CountryCode, Population, District 
      FROM city 
      WHERE CountryCode = ?', [$countryCode]);
      return view('cities.byCountry', compact('cities', 'countryCode'));
      
   }

   public function create(){
      return view('cities.create');
   }

   public function store(Request $request)
   {
      DB::insert('INSERT INTO city (Name, CountryCode, District, Population)
          VALUES (?, ?, ?, ?)', [
          $request->input('Name'),
          $request->input('CountryCode'),
          $request->input('District'),
          $request->input('Population')
      ]);
   }



}