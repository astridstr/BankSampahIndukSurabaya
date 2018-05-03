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
     $sum = DB::select("SELECT `no_rekening`, SUM(amount) AS `jml` FROM `inputsampah` GROUP BY `no_rekening`");
     foreach ($sum as $sum) {}
        return view('menu-transaksi', ['data'=>$data], ['sum'=>$sum]);
}

public function getFormTambahTransaksi()
{
    $sampah = DB::select("select * from sampah");
    return view('form.tambah.transaksi', ['sampah'=>$sampah]);
}

public function setFormTambahTransaksi(Request $request)
{

    $sampah = DB::select("select * from Sampah");
    //return $request;
    $transaksi = new Transaksi();
    $transaksi->no_rekening = $request->input('no_rekening');
<<<<<<< HEAD
    $id_sampah = array();
        $id_sampah = Input::get('id_sampah');
        $kuantitas = Input::get('kuantitas');
        $harga = Input::get('harga');
        $amount = Input::get('amount');
    $inputsampah = new InputSampah;

    // $id_sampah = array();
    //     $id_sampah = Input::get('id_sampah');
    //     $kuantitas = Input::get('kuantitas');
    //     $harga = Input::get('harga');
    //     $amount = Input::get('amount');
    // $inputsampah = new InputSampah;
=======
>>>>>>> 78efc70abc1a4bd41e0571809391dff8650ff8ad

    $dataSet = [];
    if ($transaksi->save()) {
        for ($i = 0; $i < count($request->id_sampah); $i++) {
            $dataSet[] = [
                'id_transaksi' => $transaksi->id_transaksi,
                'no_rekening' => $transaksi->no_rekening,
                'id_sampah' => $request->id_sampah[$i],
                'kuantitas' => $request->kuantitas[$i],
                'harga' => $request->harga[$i],
                'amount' => $request->amount[$i],
            ];
        }
    }
    InputSampah::insert($dataSet);
    return redirect('/transaksi');
}

public function editFormTambahTransaksi($no_rekening)
{
    //return $no_rekening;
    $sampah = DB::select("select * from sampah");
    $transaksi = DB::select("select * from transaksi where no_rekening=$no_rekening");
    foreach ($transaksi as $transaksi) {

    }
    $inputsampah = DB::select("select * from inputsampah where no_rekening=$no_rekening");
    foreach ($inputsampah as $inputsampah) {

    }
    return view('form.edit.transaksi', ['sampah'=>$sampah], ['transaksi'=>$transaksi], ['inputsampah'=>$inputsampah]);
}

public function updateFormTambahTransaksi(Request $request, $no_rekening)
{
    $transaksi = Transaksi::where('no_rekening',$no_rekening)->first();
    $inputsampah = InputSampah::where('no_rekening',$no_rekening)->first();
    $id_sampah = $request->id_sampah;
    $kuantitas = $request->kuantitas;   
    $inputsampah->save();
    //return $request;
    return redirect('/transaksi');
}

public function deleteTransaksi($id)
{
    // dd($id);
    $id_transaksi = DB::select("SELECT `id` FROM `inputsampah` WHERE `id` = $id");
    // dd($id_transaksi);
    InputSampah::destroy($id);
    //Transaksi::destroy($id_transaksi);
    return redirect('/transaksi');
}
}
