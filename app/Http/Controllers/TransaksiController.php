<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaksi;

class TransaksiController extends Controller
{
   public function index()
    {
    	$transaksi = Transaksi::orderBy('no_rekening','asc')->get();
        return view('menu-transaksi', ['transaksi'=>$transaksi]);
    }

    public function getFormTambahTransaksi()
    {
        return view('form.tambah.transaksi');
    }

    public function setFormTambahTransaksi(Request $request)
    {
        $transaksi = new Transaksi();
        $transaksi->no_rekening = $request->input('no_rekening');
        $transaksi->id_sampah = $request->input('id_sampah');
        $transaksi->kuantitas = $request->input('kuantitas');
        $transaksi->tgl_transaksi = $request->input('tgl_transaksi');

        $transaksi->save();

        return redirect()->back();
    }
}
