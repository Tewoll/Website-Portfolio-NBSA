<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\KategoriPortfolio;
use App\Models\Gallery;

class Portfolio extends Model
{
    use HasFactory;

    protected $table  = 'portfolio';

    protected $fillable = [
        'nama','slug','kategori_portfolio_id','deskripsi','lokasi_id','foto','lama','mulai','selesai'
    ];

    // protected $hidden = [];
    
    public function kategori()
    {
        return $this->belongsTo(KategoriPortfolio::class, 'kategori_portfolio_id', 'id');
    }
    public function gallery()
    {
        return $this->belongsToMany(Gallery::class, 'project_id', 'id');
    }
    public function lokasi()
    {
        return $this->hasOne(Lokasi::class, 'id','lokasi_id');
    }
    
    

}
