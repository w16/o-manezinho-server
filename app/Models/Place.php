<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    use HasFactory;

    protected $fillable = [
        "name", "description"
    ];

    public function tags()
    {
        return $this->belongsToMany(Tag::class, "places_tags");
    }

    public function address()
    {
        return $this->hasMany(Address::class);
    }
}
