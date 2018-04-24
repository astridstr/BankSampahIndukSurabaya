<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table = 'transaksi';
    protected $primaryKey = 'id_transaksi';
    public $timestamps = true;
    public $incrementing = true;
    protected $fillable = [
    'no_rekening',
    ]; 
    
    //const CREATED_AT = 'tanggal_transaksi';
    //const UPDATED_AT = 'last_update';

    public function transaksi()
    {
        return $this->belongsTo('App\Nasabah', 'no_rekening');
    }

     public function sampah()
    {
        return $this->belongsToMany('App\Sampah');
    }
}
