<?php

namespace App\Http\Controllers;

use App\Country;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CountryController extends Controller
{
    //
    public function index()
    {

        $country = Country::all();
        return view('admin.country.list')->with('country', $country);
    }

    public function create()
    {
//        return view('admin.clazz.form');
    }

    public function store(request $request)
    {
        $country = new Country();
        $country->name = $request->get('name');
        $country->save();

        return redirect('admin/country/list');
    }

    public function edit($id)
    {
        $country = Country::find($id);
        return $country;
    }

    public function update(request $request, $id)
    {
//        return 'oki';
        if ($request->isMethod('put')) {
            $countryUpdate = Country::find($id);
            $countryUpdate->name = $request->get('name_Update');
            $countryUpdate->save();
            return $countryUpdate;
        }
    }

    public function destroy($id)
    {
        Country::destroy($id);
        return redirect('admin/country/list');

    }
}
