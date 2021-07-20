<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'surname',
        'email',
        'slug',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getCompleteNameAttribute()
    {
        return $this->name . " " . $this->surname;
    }

    public function getRouteAttribute()
    {
        return '/utenti/' . $this->slug;
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function lessons()
    {
        return $this->hasMany(Lesson::class);
    }
}
