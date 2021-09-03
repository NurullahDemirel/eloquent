<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imagee extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function blogs()
    {
        return $this->morphedByMany(Blog::class, 'imagesable');
    }
    public function uruns()
    {
        return $this->morphedByMany(Blog::class, 'imagesable');
    }

}
