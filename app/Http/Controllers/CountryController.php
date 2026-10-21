<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CountryController extends Controller
{
    public function create()
    {
        return view('countries.create');
    }

    public function store(Request $request)
    {
        $country = $request->validate([
            'Code' => ['required', 'string', 'size:3', 'alpha_num', 'unique:country,Code'],
            'Name' => ['required', 'string', 'max:52'],
            'Continent' => ['required', 'in:Asia,Europe,North America,Africa,Oceania,Antarctica,South America'],
            'Region' => ['required', 'string', 'max:26'],
            'SurfaceArea' => ['required', 'numeric', 'min:0'],
            'IndepYear' => ['nullable', 'integer'],
            'Population' => ['required', 'integer', 'min:0'],
            'LifeExpectancy' => ['nullable', 'numeric', 'min:0'],
            'GNP' => ['nullable', 'numeric', 'min:0'],
            'GNPOld' => ['nullable', 'numeric', 'min:0'],
            'LocalName' => ['required', 'string', 'max:45'],
            'GovernmentForm' => ['required', 'string', 'max:45'],
            'HeadOfState' => ['nullable', 'string', 'max:60'],
            'Capital' => ['nullable', 'integer', 'min:1'],
            'Code2' => ['required', 'string', 'size:2', 'alpha_num'],
        ]);

        DB::insert(
            'INSERT INTO country (Code, Name, Continent, Region, SurfaceArea, IndepYear, Population, LifeExpectancy, GNP, GNPOld, LocalName, GovernmentForm, HeadOfState, Capital, Code2)
             VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)',
            [
                $country['Code'],
                $country['Name'],
                $country['Continent'],
                $country['Region'],
                $country['SurfaceArea'],
                $country['IndepYear'] ?? null,
                $country['Population'],
                $country['LifeExpectancy'] ?? null,
                $country['GNP'] ?? null,
                $country['GNPOld'] ?? null,
                $country['LocalName'],
                $country['GovernmentForm'],
                $country['HeadOfState'] ?? null,
                $country['Capital'] ?? null,
                $country['Code2'],
            ]
        );

        return redirect('/countries/create')
            ->with('success', 'País cadastrado com sucesso!');
    }
}
