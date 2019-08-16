<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Motor extends Model
{
    protected $fillable = ['motor_kode', 'motor_merk', 'motor_type', 'motor_warna_pilihan', 'harga_motor', 'motor_gambar'];
    public $timestamps = true;
    public function beli_kridit()
    {
        return $this->hasOne('App\beli_kridit');
    }
}
