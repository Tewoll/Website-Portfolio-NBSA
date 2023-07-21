<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailArtikel extends Model
{
    
    protected $table  = 'detail_artikel';
    
    public function tag()
    {
        return $this->belongsTo(Tag::class);
    }
    public function artikel_tag()
    {
        return $this->belongsTo(Artikel::class, 'artikel_id');
    }
}
