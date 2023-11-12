<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;
    protected $table = 'movies';

    public function episode(){
        return $this->hasMany(Episode::class);
    }

    public function genres(){
        return $this->belongsToMany(Genre::class);
    }

}
