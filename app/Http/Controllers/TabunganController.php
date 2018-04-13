<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Nasabah;
class TabunganController extends Controller
{
    public function index(Request $request)
    {
    	$no_rekening = $request->input('no_rekening');
        $nasabah = Nasabah::where('no_rekening','$no_rekening')->get();
        //dd($post);

        return view('menu-tabungan', ['nasabah'=>$nasabah]);
    }
}
