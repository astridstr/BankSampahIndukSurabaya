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
        $sampah = DB::select("select * from sampah");
        return view('form.tambah.transaksi', ['sampah'=>$sampah]);
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
        $transaksi = Transaksi::find($no_rekening);
        return view('form.edit.transaksi', compact('transaksi'));
    }

    public function updateFormTambahTransaksi(Request $request, $no_rekening)
    {
        //$sampah = new Sampah();
        $id_sampah = $request->id_sampah;
        $kuantitas = $request->kuantitas;
        $tgl_transaksi = $request->tgl_transaksi;
        $transaksi = Transaksi::find($no_rekening);
        if($jenis_sampah != ""){
            $sampah->jenis_sampah = $request->input('jenis_sampah');
            $sampah->nama_sampah = $request->input('nama_sampah');
            $sampah->harga_fluktuatif = $request->input('harga_fluktuatif');
            $sampah->harga_stabil = $request->input('harga_stabil');

            if ($request->hasFile('contoh_barang')) {
                $image = $request->file('contoh_barang');
                $path = time() . '.' .$image->getClientOriginalExtension();
                Image::make($image)->resize(600, 300)->save(public_path('/img_sampah/' . $path ));
                $sampah->contoh_barang = $path;
                //$sampah->save();
            }
        }
        $sampah->save();
        return redirect()->back();
    }
    public function deleteTransaksi($id_transaksi)
    {
        Transaksi::destroy($id_transaksi);
        return back();
    }
}
