<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    protected $fillable = [
        'user_id',
        'title',
        'description'
    ];

    use HasFactory;

    public function getRouteKeyName()
    {
        return 'id';
    }

    public function getRouteAttribute()
    {
        return '/lezioni/' . $this->id;
    }
}
