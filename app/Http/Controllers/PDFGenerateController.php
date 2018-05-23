<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use DB;
use PDF;

class PdfGenerateController extends Controller
{
    public function pdfviewNota($id_transaksi)
    {
        $nota = DB::table('transaksi')
        ->join('nasabah', 'nasabah.no_rekening', '=', 'transaksi.no_rekening')
        ->where('transaksi.id_transaksi', $id_transaksi)
        ->select('transaksi.*', 'nasabah.nama_nasabah')
        ->get(); 

        $sampah = DB::table('inputsampah')
            ->where('inputsampah.id_transaksi', $id_transaksi)
            ->select('inputsampah.*')
            ->get();         
     
        $total = DB::table('inputsampah')
            ->select('id_transaksi', DB::raw('SUM(amount) as total'))
            ->groupBy('id_transaksi')
            ->where('inputsampah.id_transaksi', $id_transaksi)
            ->get();  

        PDF::setOptions(['dpi' => 150, "default_paper_size" => "a5", "default_font" => "verdana"]);
        $pdf = PDF::loadView('nota-transaksi', ['nota'=>$nota, 'sampah'=>$sampah, 'total'=>$total]);
        return $pdf->download('nota-transaksi.pdf');
    }
}
