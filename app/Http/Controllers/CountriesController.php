<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Support\Facades\Http;


class CountriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){
        $countries = Http::get('https://restcountries.com/v3.1/all')->json();
        // $österreich = Http::get('https://restcountries.com/v3.1/name/austria')->json();
        // $Ungarn = Http::get('https://restcountries.com/v3.1/name/hungary')->json();
        // $Ungarn = Http::get('https://restcountries.com/v3.1/name/hungary')->json();
        // $Kroatien = Http::get('https://restcountries.com/v3.1/name/croatia')->json();
        // $Bosnia_Herzegovina = Http::get('https://restcountries.com/v3.1/name/bosnia-herzegovina')->json();
        // $newContries = Country::all();
      
  


        return view('index',[
         'countries' => collect($countries)->paginate(36),
        //  'countries' => collect($countries)->take(30)->paginate(10),
        //  'österreich' => $österreich,
        //  'Ungarn' => $Ungarn,
        //  'Kroatien' => $Kroatien,
        //  'Bosnia_Herzegovina' => $Bosnia_Herzegovina,
        //  'newContries' => $newContries,
        ]);
    }


    /**
     * Display the specified resource.
     */
    public function show(string $name)
    {
        // if ($name == 'united_states' || $name == 'united_arab_emirates') {
        //    $name = 'usa';
        //    $name = 'emirat';
        // }
        // $countries = Http::withToken(config('services.tmdb.token'))
        // ->get('https://restcountries.com/v3.1/name/'.$name)
        // ->json();
        $countries = Http::get('https://restcountries.com/v3.1/name/'.$name)
        ->json();
        
        return view('show',[
            'countries' =>  $countries,
           ]);
    }

}
