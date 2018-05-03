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
            $sums = DB::select("select DISTINCT i.id_transaksi, i.no_rekening, i.created_at, tmp.jml from inputsampah i, (SELECT `id_transaksi`, SUM(amount) AS `jml` FROM `inputsampah` WHERE `no_rekening` = '$no_rekening' GROUP BY `id_transaksi`) tmp where i.id_transaksi = tmp.id_transaksi");
            $saldo = DB::select("select DISTINCT n.no_rekening, n.nama_nasabah, n.wilayah, x.jumlah FROM nasabah n, (SELECT total.`no_rekening`, SUM(total.jml) AS `jumlah` FROM (select DISTINCT i.id_transaksi, i.no_rekening, i.created_at, tmp.jml from inputsampah i, (SELECT `id_transaksi`, SUM(amount) AS `jml` FROM `inputsampah` WHERE `no_rekening` = '1' GROUP BY `id_transaksi`) tmp where i.id_transaksi = tmp.id_transaksi) total GROUP BY `no_rekening`) x WHERE n.no_rekening = x.no_rekening");

        } else {
            return view('menu-tabungan-empty');
        }

        return view('menu-tabungan-cari', ['nasabah'=>$nasabah, 'sums'=>$sums, 'saldo'=>$saldo]);
    }
    public function error()
    {
        return view('menu-tabungan-empty');
    }
    
}
