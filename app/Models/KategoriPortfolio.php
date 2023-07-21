<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriPortfolio extends Model
{
    use HasFactory;

    protected $table  = 'kategori_portfolio';

    protected $fillable = [
        'id','nm_ktgr','slug_portfolio','meta_desc'
    ];

    protected $hidden = [];
    
    public function portfolio()
    {
        return $this->hasOne(Portfolio::class, 'id', 'kategori_porfolio_id');
    }
}
