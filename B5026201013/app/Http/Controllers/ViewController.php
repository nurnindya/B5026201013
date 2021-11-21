<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    //
    function showPraktikum2 () {
        return view('prak2');
    }

    function showETS () {
        return view('ets2021');
    }

    function showForm () {
        return view('inputfaktorial');
    }
    function showFaktorial (Request $request) {
        return view('hasilfaktorial');
    }
}
