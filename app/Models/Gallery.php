<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Portfolio;

class Gallery extends Model
{
    protected $table  = 'gallery';

    protected $fillable = [
        'project_id','file_resource'
    ];

    protected $hidden = [];

    public function portfolio()
    {
        return $this->belongsTo(Portfolio::class, 'id', 'project_id');
    }
}
