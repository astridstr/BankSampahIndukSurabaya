<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerDataNasabah extends Controller
{
    public function requestDaftarDataNasabah(){
        return view('nasabah.listnasabah');
    }
}
