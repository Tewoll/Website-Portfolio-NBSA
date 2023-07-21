<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Kota;
use App\Models\Provinsi;

class Lokasi extends Model
{
    use HasFactory;
    protected $table  = 'lokasi';

    protected $fillable = [
        'id','kota_id','provinsi_id'
    ];

    public function kota()
    {
        return $this->hasOne(Kota::class,'id', 'kota_id');
    }
    public function prov()
    {
        return $this->hasOne(Provinsi::class, 'id','provinsi_id');
    }
}
