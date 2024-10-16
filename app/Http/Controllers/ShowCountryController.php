<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class ShowCountryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

      /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
            $validator = $request->validate([
            'country' => 'required|max:255',
            'capital_city' => 'required',
            'population' => 'required',
            'region' => 'required',
            'area' => 'required',
            'flag' => 'nullable|mimes:jpeg,bmp,png,gif,jpg|max:20000',
        ]);
        $data['country'] = $request->country;
        $data['capital_city'] = $request->capital_city;
        $data['population'] = $request->population;
        $data['region'] = $request->region;
        $data['area'] = $request->area;

        if ($image = $request->file('flag')) {
            $filename = Str::slug($request->country) . '.' . $image->getClientOriginalExtension();
            $path = public_path('/assets/imag/' . $filename);
            Image::make($image->getRealPath())->save($path, 100);
            $data['flag'] = $filename;
        }
        Country::create($data);

        return redirect()->route('index')->with([
            'message' => 'Country created successfully',
            'alert-type' => 'success',
        ]);
    }


        /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $country = Country::findOrFail($id);
        return view('country_blade.showCountry',[
            'country' =>  $country,
           ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $country =Country::findOrFail($id);
        if ($country) {
            return view('country_blade.editCountry', compact('country'));
        }

        return redirect()->route('.index')->with([
            'message' => 'You have not permeission to continue this process',
            'alert-type' => 'danger',
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = $request->validate([
            'country' => 'required|max:255',
            'capital_city' => 'required',
            'population' => 'required',
            'region' => 'required',
            'area' => 'required',
            'flag' => 'nullable|mimes:jpeg,bmp,png,gif,jpg|max:20000',
        ]);
 
        $country = Country::whereId($id)->first();

        if ($country) {
            $data['country'] = $request->country;
            $data['capital_city'] = $request->capital_city;
            $data['population'] = $request->population;
            $data['region'] = $request->region;
            $data['area'] = $request->area;

            if ($image = $request->file('flag')) {
                // Remove the image  from computer
                if (File::exists('assets/imag/' . $country->flag)) {
                    unlink('assets/imag/' . $country->flag);
                }
                $filename = Str::slug($request->country) . '.' . $image->getClientOriginalExtension();
                $path = public_path('assets/imag/' . $filename);
                Image::make($image->getRealPath())->save($path, 100);
                $data['flag'] = $filename;
            }
            $country->update($data);

            return redirect()->route('index')->with([
                'message' => 'Country Updated successfully',
                'alert-type' => 'success',
            ]);
        }
        return redirect()->route('posts.index')->with([
            'message' => 'You have not permeission to continue this process',
            'alert-type' => 'danger',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $country = Country::whereId($id)->first();
        if ($country) {
            if ($country->flag != '') {
                // Remove the flag  from computer
                if (File::exists('assets/imag/' . $country->flag)) {
                    unlink('assets/imag/' . $country->flag);
                }
            }

            $country->delete();
            return redirect()->route('index')->with([
                'message' => 'Country Deleted successfully',
                'alert-type' => 'success',
            ]);
        }

        return redirect()->route('index')->with([
            'message' => 'You have not permeission to continue this process',
            'alert-type' => 'danger',
        ]);

    }
}
