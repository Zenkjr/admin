<?php

namespace App\Http\Controllers;

use App\Car;
use App\Image;
use App\Stock;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StockController extends Controller
{
    //
    public function index()
    {
        $stock = Stock::all();
        return view('admin.stock.list')->with('stock', $stock);

    }

//    public function create()
//    {
//        return view('admin.car.form');
//    }
//
//    public function store(request $request)
//    {
//        $images = new Image();
//        $cars = new Car();
//        $cars->name = $request->get('name');
//        $cars->brand_id = $request->get('brand_id');
//        $cars->year = $request->get('year');
//        $cars->seat = $request->get('seat');
//        $cars->engine = $request->get('engine');
//        $cars->horse_power = $request->get('horse_power');
//        $cars->tire_size = $request->get('tire_size');
//        $cars->clazz_id = $request->get('clazz_id');
//        $cars->note = $request->get('note');
//        $cars->save();
//
//        $file = $request->file('img_url');
//        if (File::exists($file)) {
//            $file->store('public/upload');
//            $images->url = "/storage/upload/" . $file->hashName();
//        }
//        $images->car_id = $cars->id;
//        $images->save();
//        return redirect('/admin/car/list');
//    }
//    public function edit($id)
//    {
////        $color = Color::find($id);
////        return view('admin.color.list')->with('color',$color);
////return $color;
//    }
}
