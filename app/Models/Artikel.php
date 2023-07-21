<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Kategori;
use App\Models\User;
use App\Models\Tag;
use Illuminate\Database\Eloquent\SoftDeletes;

class Artikel extends Model
{
    use HasFactory;

    protected $table  = 'artikel';

    protected $fillable = [
        'judul','slug','body','kategori_id','user_id','gambar_artikel','status_publish'
    ];

    //protected $hidden = [];
    
    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }

    public function tag()
    {
        return $this->hasMany(Tag::class);
    }
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
