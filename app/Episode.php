<?php

namespace App;
use App\Movie;

use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{
    public function Movie()
    {
        return $this->belongsTo(Movie::class);
    }
}
