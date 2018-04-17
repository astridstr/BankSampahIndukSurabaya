<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sampah;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Image;
class SampahController extends Controller
{
    public function index()
    {
        $sampah = Sampah::orderBy('id_sampah','asc')->get();
        //dd($post);

        return view('menu-sampah', ['sampah'=>$sampah]);
    }

    public function getFormTambahDataSampah()
    {
        return view('form.tambah.sampah');
    }

    public function setFormTambahDataSampah(Request $request)
    {
        $sampah = new Sampah();
        $sampah->jenis_sampah = $request->input('jenis_sampah');
        $sampah->nama_sampah = $request->input('nama_sampah');
        $sampah->harga_fluktuatif = $request->input('harga_fluktuatif');
        $sampah->harga_stabil = $request->input('harga_stabil');
        $sampah->contoh_barang = $request->input('contoh_barang');

        $sampah->save();

        return redirect()->back();
    }

    public function editFormTambahDataSampah($id_sampah)
    {
        $sampah = Sampah::find($id_sampah);
        return view('form.edit.sampah', compact('sampah'));
    }

    public function updateFormTambahDataSampah(Request $request, $id_sampah)
    {
        //$sampah = new Sampah();
        $jenis_sampah = $request->jenis_sampah;
        $nama_sampah = $request->nama_sampah;
        $harga_fluktuatif = $request->harga_fluktuatif;
        $harga_stabil = $request->harga_stabil;
        $contoh_barang = $request->contoh_barang;
        $sampah = Sampah::find($id_sampah);
        if($jenis_sampah != ""){
            $sampah->jenis_sampah = $request->input('jenis_sampah');
            $sampah->nama_sampah = $request->input('nama_sampah');
            $sampah->harga_fluktuatif = $request->input('harga_fluktuatif');
            $sampah->harga_stabil = $request->input('harga_stabil');
            $sampah->contoh_barang = $request->input('contoh_barang');
        }
        $sampah->save();
        return redirect()->back();
    }
    public function deleteDataSampah($id_sampah)
    {
        Sampah::destroy($id_sampah);
        return back();
    }
}
