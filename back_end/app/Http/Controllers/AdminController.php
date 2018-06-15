<?php

namespace App\Http\Controllers;

use App\cars;
use App\images;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $listCar = cars::all();
        return view('admin.listCar')->with('listCar', $listCar);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $image = new images();
        $car = new cars();
        $car->id = $request->get('id');
        $car->name = $request->get('name');
        $car->maker_id = $request->get('maker_id');
        $car->year = $request->get('year');
        $car->engine = $request->get('engine');
        $car->horse_power = $request->get('horse_power');
        $car->tire_size = $request->get('tire_size');
        $car->clazz_id = $request->get('clazz_id');
        $car->price = $request->get('price');
        $car->note = $request->get('note');
//        $file = $request->file('url_img')->store('/public/upload');
//        echo $file;
//
//        $car->url_img = $file->;
//
//
        $file = $request->file('url_img');
        if (File::exists($file)) {
            $file->store('public/upload');
            echo $file;
            $car->url_img = "storage/upload/" . $file->hashName();
        }

//        $image->save();
        $car->save();

        return redirect('/admin');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return 'show';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $car = cars::find($id);

        return $car;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
//        return view('admin.add');
        if($request->get('isAjax')){
        $car = cars::find($id);
        $car->name = $request->get('name_Update');
        $car->maker_id = $request->get('maker_id_Update');
        $car->year = $request->get('year_Update');
        $car->engine = $request->get('engine_Update');
        $car->horse_power = $request->get('horse_power_Update');
        $car->tire_size = $request->get('tire_size_Update');
        $car->clazz_id = $request->get('clazz_id_Update');
        $car->price = $request->get('price_Update');
        $car->note = $request->get('note_Update');

        $car->save();
        return $car;
        }
//        if ($request->get("isAjax")) {
//            return $car;
//        }
//        return view('admin.add');
//        return 'update';

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        cars::destroy($id);
        return 'destroy';

    }

    public function showJson($id)
    {
        //
//        $car = cars::find($id);
//
//        return $car;
    }

}
