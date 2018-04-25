<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Nasabah;

class RapotController extends Controller
{
    public function index()
    {
        $rapot2018 = Nasabah::orderBy('no_rekening','asc')->where('kategori_nasabah','kolektif')->get();

        $rapot2017 = Nasabah::orderBy('no_rekening','asc')->where('kategori_nasabah','kolektif')->get();
        
        $rapot2016 = Nasabah::orderBy('no_rekening','asc')->where('kategori_nasabah','kolektif')->get();

        return view('menu-rapot', ['rapot2018'=>$rapot2018], ['rapot2017'=>$rapot2017], ['rapot2016'=>$rapot2016]);
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
