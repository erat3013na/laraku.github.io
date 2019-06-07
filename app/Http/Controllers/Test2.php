<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Test2 extends Controller
{
    protected $nyama = "Emmang";

    public function index($nama = '$this->nyama')
    {
        return view('test1', ['name'=> $nama]);
    }

    public function proses(Request $request)
    {
        return $request->input('tim');
    }
}
