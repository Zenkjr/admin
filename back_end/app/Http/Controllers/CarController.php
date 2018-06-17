<?php

namespace App\Http\Controllers;

use App\Car;
use App\Image;
use App\Stock;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class CarController extends Controller
{
    public function index()
    {

        $cars = Car::all();
        foreach ($cars as $car) {
            $idImagesShow = $car->id;
            $img = Image::where('car_id', $idImagesShow)->first();
            $car->img = $img['url'];
        }

        return view('admin.car.list')->with('cars', $cars);
    }

    public function create()
    {
        return view('admin.car.form');
    }

    public function store(request $request)
    {
//        add info to table car
        $cars = new Car();
        $cars->name = $request->get('name');
        $cars->brand_id = $request->get('brand_id');
        $cars->year = $request->get('year');
        $cars->seat = $request->get('seat');
        $cars->engine = $request->get('engine');
        $cars->horse_power = $request->get('horse_power');
        $cars->tire_size = $request->get('tire_size');
        $cars->clazz_id = $request->get('clazz_id');
        $cars->note = $request->get('note');
        $cars->save();

//        add info to table Stock
        $stock = new Stock();
        $stock->car_id = $cars->id;
        $stock->note = $request->get('note');
        $stock->in_at = $request->get('first_plate');
        $stock->out_at = $request->get('regis_expiry');
        $stock->status = $cars->id;
        $stock->plate_num = $request->get('plate_num');
        $stock->first_plate = $request->get('first_plate');
        $stock->regis_expiry = $request->get('regis_expiry');
        $stock->country_id = $request->get('country_id');
        $stock->color_id = $request->get('color_id');
        $stock->price = $request->get('price');
        $stock->save();

//        add info to table image
        $images = new Image();
        $file = $request->file('img_url');
        if (File::exists($file)) {
            $file->store('public/upload');
            $images->url = "/storage/upload/" . $file->hashName();
        }
        $images->car_id = $cars->id;
        $images->save();
        return redirect('/admin/car/list');
    }

    public function edit($id)
    {
//        $color = Color::find($id);
//        return view('admin.color.list')->with('color',$color);
//return $color;
    }
    public function destroy(request $request,$id){
        Car::destroy($id);
        return redirect('/admin/car/list');
    }
}
