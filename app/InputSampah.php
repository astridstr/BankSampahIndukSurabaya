<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InputSampah extends Model
{
    protected $table = 'inputsampah';
    protected $primaryKey = 'id';
    public $timestamps = true;
    public $incrementing = true;
    protected $fillable = array('no_rekening');
    public function transaksi(){
    	return $this->hasMany('App\Transaksi');
    }
}
