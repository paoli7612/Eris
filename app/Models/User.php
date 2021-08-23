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
        'email',
        'password',
        'avatar'
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

    public function getImgAttribute()
    {
        return $this->avatar ? ('/images/' . $this->avatar) : "https://i.pravatar.cc/200?u=" . $this->email ;
    }

    public function lessons()
    {
        return $this->hasMany(Lesson::class);
    }

    public function courses()
    {
        return $this->belongsToMany(Course::class);
    }

    public function scopeTeachers($query)
    {
        if (request('search')) {
            $query->where('name', 'like', "%". request('search') . "%");
        }
        $query->where('type', 'teacher');
    }
}
