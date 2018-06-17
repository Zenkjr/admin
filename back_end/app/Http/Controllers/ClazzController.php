<?php

namespace App\Http\Controllers;

use App\Clazz;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ClazzController extends Controller
{
    //
    public function index()
    {

        $classCar = Clazz::all();
        return view('admin.clazz.list')->with('clazzes', $classCar);
    }

    public function create()
    {
//        return view('admin.clazz.form');
    }

    public function store(request $request)
    {
        $classCar = new Clazz();
        $classCar->clazzes_name = $request->get('name');
        $classCar->save();

        return redirect('admin/clazz/list');
    }

    public function edit($id)
    {
        $classCar = Clazz::find($id);
        return $classCar;
    }

    public function update(request $request, $id)
    {
//        return 'oki';
        if ($request->isMethod('put')) {
            $classCarUpdate = Clazz::find($id);
            $classCarUpdate->clazzes_name = $request->get('name_Update');
            $classCarUpdate->save();
            return $classCarUpdate;
        }
    }

    public function destroy($id)
    {
        Clazz::destroy($id);
        return redirect('admin/clazz/list');

    }
}
