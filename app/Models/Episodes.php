<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Episodes extends Model
{
    use HasFactory;
    protected $table = 'episodes';

    public function movies(){
        return $this->belongsTo(Movies::class);
    }
}
