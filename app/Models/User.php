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
        'surname',
        'nickname',
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

    public function getRouteKeyName()
    {
        return 'nickname';
    }

    public function getCompleteNameAttribute()
    {
        return $this->name . ' ' . $this->surname;
    }

    public function getRouteAttribute()
    {
        return '/' . $this->type . '/' . $this->nickname;
    }

    public function followers()
    {
        return $this->belongsToMany(User::class, 'follow', 'follow_user_id', 'user_id');
    }
    
    public function following()
    {
        return $this->belongsToMany(User::class, 'follow', 'user_id', 'follow_user_id');
    }

    public function follow(User $user)
    {
        $this->following()->save($user);
    }

    public function avatar($size)
    {
        if ($this->image) {
            return "<img "
            . "src=\"img/{$this->image}\" "
            . "width=\"$size\" "
            . "height=\"$size\" "
            . "alt=\"{$this->nickname}\" "
            . "class=\"rounded-circle\" "
        . ">";
        } else {
            return "<img "
                . "src=\"https://i.pravatar.cc/$size?u={$this->email}\" "
                . "width=\"$size\" "
                . "height=\"$size\" "
                . "alt=\"{$this->nickname}\" "
                . "class=\"rounded-circle\" "
            . ">";
        }
    }
}
