<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    //
    function showPraktikum2()
    {
        return view('prak2web');
    }


    function showETS()
    {
        return view('etsweb');
    }

    function showTugasPHP()
    {
        return view('tgsphpweb');
    }

}
