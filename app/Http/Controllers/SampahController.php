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
        if ($request->hasFile('contoh_barang')) {
            $image = $request->file('contoh_barang');
            $path = time() . '.' .$image->getClientOriginalExtension();
            Image::make($image)->resize(600, 300)->save(public_path('/img_sampah/' . $path ));
            $sampah->contoh_barang = $path;
            $sampah->save();
        }

        $sampah->save();

        return redirect()->back();
    }
}
