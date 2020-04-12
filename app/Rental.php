<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rental extends Model
{
    protected $table = 'rentals';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama', 'email', 'nomor_hp', 'mulai_sewa', 'akhir_sewa', 'mobil'
    ];
}
