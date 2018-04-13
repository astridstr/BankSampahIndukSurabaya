<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Nasabah;
class NasabahController extends Controller
{
    public function index()
    {
        $nasabah = Nasabah::orderBy('no_rekening','asc')->where('kategori_nasabah','individu')->get();
        //dd($post);

        return view('menu-nasabah', ['nasabah'=>$nasabah]);

    }

    public function indexkolektif()
    {
        $nasabah = Nasabah::orderBy('no_rekening','asc')->where('kategori_nasabah','kolektif')->get();
        //dd($post);

        return view('menu-nasabah.kolektif', ['nasabah'=>$nasabah]);
    }

    public function getFormTambahNasabah()
    {
        return view('form.tambah.nasabah');
    }

    public function setFormTambahNasabah(Request $request)
    {
        $nasabah = new Nasabah();
        $nasabah->nama_nasabah = $request->input('nama_nasabah');
        $nasabah->kategori_nasabah = $request->input('kategori_nasabah');
        $nasabah->nama_banksampah = $request->input('nama_banksampah');
        $nasabah->no_ktp = $request->input('no_ktp');
        $nasabah->no_telp = $request->input('no_telp');
        $nasabah->alamat = $request->input('alamat');
        $nasabah->kecamatan = $request->input('kecamatan');
        $nasabah->kelurahan = $request->input('kelurahan');
        $nasabah->wilayah = $request->input('wilayah');
        $nasabah->tgl_lahir = $request->input('tgl_lahir');
        $nasabah->tempat_lahir = $request->input('tempat_lahir');
        $nasabah->pekerjaan = $request->input('pekerjaan');
        $nasabah->program_simpanan = $request->input('program_simpanan');
        $nasabah->cara_setor = $request->input('cara_setor');
        $nasabah->waktu_setor = $request->input('waktu_setor');
        $nasabah->hari_setor = $request->input('hari_setor');
        $nasabah->jam_setor = $request->input('jam_setor');

        $nasabah->save();

        return redirect()->back();
    }


}
