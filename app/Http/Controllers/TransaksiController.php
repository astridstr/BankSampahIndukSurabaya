<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Input;

use Illuminate\Http\Request;
use App\Transaksi;
use App\InputSampah;
use App\Sampah;

class TransaksiController extends Controller
{
 public function index()
 {
   $data = DB::select("select * from inputsampah");

   return view('menu-transaksi', ['data'=>$data]);
}

public function getFormTambahTransaksi()
{
    $sampah = DB::select("select * from sampah");

   return view('form.tambah.transaksi', ['sampah'=>$sampah]);
}

public function setFormTambahTransaksi(Request $request)
{

    $Sampah = DB::select("select * from Sampah");
    //return $request;
    $transaksi = new Transaksi();
    $transaksi->no_rekening = $request->input('no_rekening');
    $transaksi->save();

    $inputsampah = new InputSampah();
    // $inputsampah->id_transaksi = $transaksi->id_transaksi;
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
    $transaksi = Transaksi::where('no_rekening',$no_rekening)->first();
    $id_sampah = $request->id_sampah;
    $kuantitas = $request->kuantitas;
    $inputsampah = InputSampah::where('no_rekening',$no_rekening)->first();   
    $inputsampah->save();
    //return $request;
    return redirect('/transaksi');
}

public function deleteTransaksi($id)
{
    // dd($id);
    $id_transaksi = DB::select("SELECT `id_transaksi` FROM `inputsampah` WHERE `id` = $id");
    // dd($id_transaksi);
    InputSampah::destroy($id);
    Transaksi::destroy($id_transaksi);
    return redirect('/transaksi');
}
}
