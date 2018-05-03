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
    	
        $findnorek = DB::select("select no_rekening from nasabah where no_rekening = '$no_rekening'");

        if ( !empty($findnorek)) {
            $nasabah = DB::select("select * from nasabah where no_rekening = '$no_rekening'");
        } else {
            return view('menu-tabungan-empty');
        }

        return view('menu-tabungan-cari', ['nasabah'=>$nasabah]);
    }
    public function error()
    {
        return view('menu-tabungan-empty');
    }
    
}
