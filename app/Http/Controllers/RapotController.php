<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Nasabah;

class RapotController extends Controller
{
    public function index()
    {
        $nasabah = Nasabah::orderBy('no_rekening','asc')->where('kategori_nasabah','kolektif')->get();
        return view('menu-rapot', ['nasabah'=>$nasabah]);
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
