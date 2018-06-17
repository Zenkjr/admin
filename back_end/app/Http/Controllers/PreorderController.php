<?php

namespace App\Http\Controllers;

use App\Preorder;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PreorderController extends Controller
{
    //
    public function index()
    {
        $preorder = Preorder::all();
        return view('admin.preorder.list')->with('preorder', $preorder);
    }

    public function create()
    {
        return view('admin.preorder.form');
    }

    public function store(request $request)
    {
        $preorder = new Preorder();
        $preorder->name = $request->get('name');
        $preorder->save();

        return redirect('admin/preorder/list');
    }
}
