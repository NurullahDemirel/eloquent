<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resim extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function blogs()
    {
        return $this->morphedByMany(Blog::class, 'resimsable');
    }

    /**
     * Get all of the videos that are assigned this category.
     */
    public function products()
    {
        return $this->morphedByMany(Product::class, 'resimsable');
    }

}
