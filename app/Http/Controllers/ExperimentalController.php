<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExperimentalController extends Controller
{
    public function index(){
        return view('debug.experimental');
}

    public function sendPost(Request $request){
    $data1 = $request->data1;
    $data2 = $request->data2;
    // dd($data);
        return view('debug.post', compact(['data1', 'data2']));
}
}
