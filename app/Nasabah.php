<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nasabah extends Model
{
    protected $table = 'nasabah';
    protected $primaryKey = 'no_rekening';
    public $timestamps = false;
    public $incrementing = true;
    protected $hidden = [
        'no_rekening',
    ];
    protected $fillable = [
    'nama_nasabah',
    'kategori_nasabah', 
    'nama_banksampah',
    'no_ktp',
    'no_telp',
    'alamat',
    'kecamatan', 
    'kelurahan',
    'wilayah',
    'tgl_lahir',
    'tempat_lahir',
    'pekerjaan',
    'program_simpanan', 
    'cara_setor',
    'waktu_setor',
    'hari_setor',
    'jam_setor',
    ]; 

    const CREATED_AT = 'tanggal_daftar';
    const UPDATED_AT = 'last_update';

    public function transaksi()
    {
        return $this->hasMany('App\Transaksi');
    }
}
