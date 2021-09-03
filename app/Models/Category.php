<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    public function posts()
    {
        return $this->morphedByMany('App\Post', 'categoryable');
    }

    /**
     * Get all of the videos that are assigned this category.
     */
    public function videos()
    {
        return $this->morphedByMany('App\Video', 'categoryable');
    }
    protected $guarded=[];
}
