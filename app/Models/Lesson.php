<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use function PHPSTORM_META\map;

class Lesson extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'course_id'
    ];

    public function getRouteAttribute()
    {
        return '/lessons/' . $this->slug;
    }
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
