<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Toko extends Model
{
    protected $table = 'tokos';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama_toko', 'alamat', 'jumlah_mobil', 'logo_toko', 'deskripsi', 'websites', 'nomor_hp', 'status'
    ];
}
