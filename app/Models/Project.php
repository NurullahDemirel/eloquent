<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    public function deployments()
    {
        return $this->hasManyThrough(Deployments::class, Environment::class);
    }
}
