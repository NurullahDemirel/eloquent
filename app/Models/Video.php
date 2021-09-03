<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;
    public function commentable(){
        return $this->morphMany(Comm::class,'commentable');
    }
    public function categories() {
        return $this->morphToMany(Category::class, 'categoryable');
    }
}
