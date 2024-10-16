<?php

use App\Http\Controllers\CountriesController;
use App\Http\Controllers\ShowCountryController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [CountriesController::class,'index'])->name('index');

Route::get('/country/{name}' , [CountriesController::class, 'show'])->name('country.show');
Route::post('/country/store' , [CountriesController::class, 'store'])->name('country.store');

Route::resource('showcountry' ,ShowCountryController::class);

