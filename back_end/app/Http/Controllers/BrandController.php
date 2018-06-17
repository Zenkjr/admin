<?php

namespace App\Http\Controllers;

use App\Brand;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BrandController extends Controller
{
    //
    public function index()
    {
        $brands = Brand::all();
        return view('admin.brand.list')->with('brands', $brands);
    }

    public function create()
    {
        return view('admin.brand.form');
    }

    public function store(request $request)
    {
        $brand = new Brand();
        $brand->name = $request->get('name');
        $brand->save();

        return redirect('admin/brand/list');
    }

    public function edit($id)
    {
        $brand = Brand::find($id);
        return $brand;
    }

    public function update(request $request, $id)
    {
//        return 'oki';
        if ($request->isMethod('put')) {
            $brandUpdate = Brand::find($id);
            $brandUpdate->name = $request->get('name_Update');
            $brandUpdate->save();
            return $brandUpdate;
        }
    }

    public function destroy($id)
    {
        Brand::destroy($id);
        return redirect('admin/brand/list');

    }

    public function destroyMany(request $request, $id)
    {
        $idDelete = $request->input('check-car');
//        Brand::destroy($idDelete);
        return $idDelete;
//        return redirect('admin/brand/list');
    }
}
