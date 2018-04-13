<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RapotController extends Controller
{
    public function index()
    {
        return view('menu-rapot');
    }

    public function indexpertahun()
    {
        return view('menu-rapot.pertahun');
    }

    public function indexperwilayah()
    {
        return view('menu-rapot.perwilayah');
    }
}
