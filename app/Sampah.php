<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Sampah extends Model
{
    protected $table = 'sampah';
    protected $primaryKey = 'id_sampah';
    public $timestamps = true;
    public $incrementing = true;
    protected $fillable = [
    'jenis_sampah',
    'nama_sampah', 
    'harga_fluktuatif',
    'harga_stabil', 
    'contoh_barang',
    ]; 

     public function sampah()
    {
        return $this->belongsToMany('App\Transaksi');
    }
}
