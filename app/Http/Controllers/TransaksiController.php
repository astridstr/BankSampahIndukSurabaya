<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Transaksi;
use App\InputSampah;
use App\Sampah;

class TransaksiController extends Controller
{
 public function index()
 {
   $transaksi = DB::select("select * from transaksi");
   $inputsampah = DB::select("select * from inputsampah");
        //dd($transaksi);
   return view('menu-transaksi', ['transaksi'=>$transaksi], ['inputsampah'=>$inputsampah]);
}

public function getFormTambahTransaksi()
{
    return view('form.tambah.transaksi');
}

public function setFormTambahTransaksi(Request $request)
{
    //return $request;
    $transaksi = new Transaksi();
    $transaksi->no_rekening = $request->input('no_rekening');
    $transaksi->save();

    $inputsampah = new InputSampah();
    $inputsampah->id_sampah = $request->input('id_sampah');
    $inputsampah->no_rekening=$transaksi->no_rekening;
    $inputsampah->kuantitas = $request->input('kuantitas');
    $inputsampah->save();

    return redirect('/transaksi');
}
public function editFormTambahTransaksi($no_rekening)
{
    //return $no_rekening;
    $transaksi = DB::select("select * from transaksi where no_rekening=$no_rekening");
    foreach ($transaksi as $transaksi) {}
        $inputsampah = DB::select("select * from inputsampah where no_rekening=$no_rekening");
    foreach ($inputsampah as $inputsampah) {}
        return view('form.edit.transaksi', ['transaksi'=>$transaksi], ['inputsampah'=>$inputsampah]);
}

public function updateFormTambahTransaksi(Request $request, $no_rekening)
{
    //return $request;
    $transaksi = Transaksi::find($no_rekening);
    $no_rekening = $request->no_rekening;
    $transaksi->save();

    $inputsampah = InputSampah::find($no_rekening);
    $id_sampah = $request->id_sampah;
    $inputsampah->no_rekening = $no_rekening;
    $kuantitas = $request->kuantitas;    
    $inputsampah->save();

    return redirect('/transaksi');
}
public function deleteTransaksi($no_rekening)
{
    Transaksi::destroy($no_rekening);
    InputSampah::destroy($no_rekening);
    return back();
}
}
