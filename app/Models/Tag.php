<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
    ];

    public function places()
    {
        return $this->belongsToMany(Place::class, "places_tags");
    }

    public function users()
    {
        return $this->morphToMany(User::class, 'favoritable');
    }
}
