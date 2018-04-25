<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Nasabah;
class TabunganController extends Controller
{
    public function index()
    {
        $nasabah = Nasabah::where('no_rekening','$no_rekening')->get();
        //dd($post);

        return view('menu-tabungan', ['nasabah'=>$nasabah]);
    }
    public function cari(Request $request)
    {
    	$no_rekening = $request->input('no_rekening');
    	
        $nasabah = DB::select("select * from nasabah where no_rekening = '$no_rekening'");

        return view('menu-tabungan-cari', ['nasabah'=>$nasabah]);
    }
}
