<?php

namespace App;
use App\Genre;
use App\Episode;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    public function Genre()
    {
        return $this->belongsTo(Genre::class);
    }
    public function Episode()
    {
        return $this->hasMany(Episode::class);
    }
}
