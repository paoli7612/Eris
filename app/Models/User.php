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

    public function getRouteAttribute()
    {
        return "/account/{$this->id}";
    }

    public function avatar($size = 50)
    {
        return "<img src=\"https://i.pravatar.cc/{$size}?u={$this->email}\" width=\"$size\" class=\"rounded-circle\"/>";
    }

    public function follows()
    {
        return $this->belongsToMany(User::class, 'follows', 'following_user_id');
    }

    public function follow(User $user)
    {
        return $this->follows()->save($user);
    }
}
