<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $table  = 'tag';
    protected $guarded = [];

    public function artikel_detail()
    {
        return $this->hasMany(DetailArtikel::class, 'tag_id', 'id');
    }
    public function artikel()
    {
        return $this->belongsToMany(Artikel::class);
    }

}
