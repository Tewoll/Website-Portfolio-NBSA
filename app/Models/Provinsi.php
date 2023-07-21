<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provinsi extends Model
{
    use HasFactory;

    protected $table  = 'provinsi';

    protected $fillable = [
        'id','nm_provinsi'
    ];

    public function lokasi()
    {
        return $this->belongsTo(Lokasi::class);
    }

    protected $hidden = [];
}
