<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proje extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function students(){
        return $this->morphedByMany(Student::class,'projesable');
    }
    public function teachers(){
        return $this->morphedByMany(Teacher::class,'projesable');
    }
}
