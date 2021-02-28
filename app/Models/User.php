<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function places()
    {
        return $this->morphedByMany(Place::class, 'taggable');
    }

    public function categories()
    {
        return $this->morphedByMany(Category::class, 'taggable');
    }

    public function types()
    {
        return $this->morphedByMany(Type::class, 'taggable');
    }

    public function tags()
    {
        return $this->morphedByMany(Tag::class, 'taggable');
    }
}
