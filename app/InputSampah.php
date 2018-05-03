<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InputSampah extends Model
{
    protected $table = 'inputsampah';
    protected $primaryKey = 'id';
    public $timestamps = true;
    public $incrementing = true;

    protected $casts = [
    	'id_sampah' => 'json',
    	'kuantitas' => 'json',
    	'harga' => 'json',
    	'amount' => 'json',
    ];

    protected $fillable = ['id_transaksi','no_rekening', 'id_sampah', 'kuantitas', 'harga', 'amount'];

    // protected $fillable = array('no_rekening');


    public function transaksi(){
    	return $this->hasMany('App\Transaksi');
    }
}
