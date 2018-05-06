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
    $jumlahtransaksi = DB::select("SELECT COUNT(`id_transaksi`) as jumlah FROM transaksi");
    $sums = DB::select("select DISTINCT i.id_transaksi, i.no_rekening, i.created_at, tmp.jml from inputsampah i, (SELECT `id_transaksi`, SUM(amount) AS `jml` FROM `inputsampah` GROUP BY `id_transaksi`) tmp where i.id_transaksi = tmp.id_transaksi");

    return view('menu-transaksi', ['data'=>$data, 'jumlahtransaksi'=>$jumlahtransaksi, 'sums'=>$sums]);
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

    $id_sampah = array();
    $id_sampah = Input::get('id_sampah');
    $kuantitas = Input::get('kuantitas');
    $harga = Input::get('harga');
    $amount = Input::get('amount');
    $inputsampah = new InputSampah;

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

public function editFormTambahTransaksi($id_transaksi)
{
    //return $no_rekening;
    $sampah = DB::select("select * from sampah");
    $transaksi = DB::select("select * from transaksi where id_transaksi=$id_transaksi");
    foreach ($transaksi as $transaksi) {

    }
    $inputsampah = DB::select("SELECT * FROM `inputsampah` WHERE `id_transaksi`=$id_transaksi");
    return view('form.edit.transaksi', ['sampah'=>$sampah, 'transaksi'=>$transaksi, 'inputsampah'=>$inputsampah]);
}

public function updateFormTambahTransaksi(Request $request, $id_transaksi)
{
    $transaksi = Transaksi::where('id_transaksi',$id_transaksi)->first();
    $transaksi->save();

    //$is_idsampah1 = InputSampah::where('id_transaksi',$id_transaksi)->delete();
    $is_idsampah = Input::get('id_sampah');
    $is_kuantitas = Input::get('kuantitas');
    $is_harga = Input::get('harga');
    $is_amount = Input::get('amount');
    if (isset($is_idsampah)){
        foreach($is_idsampah as $is_idsampah){
            $inputsampah = New InputSampah();
            $inputsampah->id_sampah = $is_idsampah;
            $inputsampah->kuantitas = $is_kuantitas;
            $inputsampah->harga = $is_harga;
            $inputsampah->amount = $is_amount;
            $inputsampah->id_transaksi = $transaksi->id_transaksi;
            $inputsampah->no_rekening = $transaksi->no_rekening;
            $inputsampah->save();
        }   
    }
    return redirect('/transaksi');
}

public function deleteTransaksi($id_transaksi)
{
    Transaksi::where('id_transaksi', $id_transaksi)->delete();
    InputSampah::where('id_transaksi', $id_transaksi)->delete();
    return back();
}
}
