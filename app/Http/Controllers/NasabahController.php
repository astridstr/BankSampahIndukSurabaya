<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Nasabah;

class NasabahController extends Controller
{
    public function index()
    {
        $nasabah = Nasabah::orderBy('no_rekening','asc')
                    ->where('kategori_nasabah','individu')
                    ->where('status','1')
                    ->get();
        $jumlahnasabah = DB::select("SELECT COUNT(`no_rekening`) as jumlah FROM nasabah WHERE `kategori_nasabah` = 'individu' AND status = '1' ");

        return view('menu-nasabah', ['nasabah'=>$nasabah, 'jumlahnasabah'=>$jumlahnasabah]);

    }

    public function indexkolektif()
    {
        $nasabah = Nasabah::orderBy('no_rekening','asc')
                    ->where('kategori_nasabah','kolektif')
                    ->where('status','1')
                    ->get();
        $jumlahnasabah = DB::select("SELECT COUNT(`no_rekening`) as jumlah FROM nasabah WHERE `kategori_nasabah` = 'kolektif' AND status = '1'");
        return view('menu-nasabah.kolektif', ['nasabah'=>$nasabah, 'jumlahnasabah'=>$jumlahnasabah]);
    }

    public function getFormTambahNasabah()
    {
        return view('form.tambah.nasabah');
    }

    public function setFormTambahNasabah(Request $request)
    {
        $nasabah = new Nasabah();
        $nasabah->status = '1';
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

    public function editFormTambahNasabah($no_rekening)
    {
        $nasabah = Nasabah::find($no_rekening);
        return view('form.edit.nasabah', compact('nasabah'));
    }

    public function updateFormTambahNasabah(Request $request, $no_rekening)
    {
        $nasabah = Nasabah::find($no_rekening);
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

    public function deleteNasabah($no_rekening)
    {
        $nasabah = Nasabah::find($no_rekening);
        $nasabah->status = '0';
        

        $nasabah->save();

        return redirect()->back();
    }

    // public function deleteNasabah($no_rekening)
    // {
    //     Nasabah::destroy($no_rekening);
    //     return back();
    // }


}
