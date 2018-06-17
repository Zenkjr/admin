<?php

namespace App\Http\Controllers;

use App\Color;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//use function MongoDB\BSON\toJSON;

class ColorController extends Controller
{
    //
    public function index()
    {

        $color = Color::all();
        return view('admin.color.list')->with('color', $color);
    }

    public function create()
    {
//        return view('admin.clazz.form');
    }

    public function store(request $request)
    {
        $color = new Color();
        $color->name = $request->get('name');
        $color->save();

        return redirect('admin/color/list');
    }

    public function edit($id)
    {
        $color = Color::find($id);
        return $color;
    }

    public function update(request $request, $id)
    {
//        return 'oki';
        if ($request->isMethod('put')) {
            $colorUpdate = Color::find($id);
            $colorUpdate->name = $request->get('name_Update');
            $colorUpdate->save();
            return $colorUpdate;
        }
    }

    public function destroy($id)
    {
        Color::destroy($id);
        return redirect('admin/color/list');

    }
}
