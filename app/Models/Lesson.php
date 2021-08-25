<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'course_id',
        'user_id'
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function scopeFilter($query)
    {
        if (request('search')) {
            $query->where('title', 'like', "%". request('search') . "%");
        }
    }

    public function scopeOf($query, $id)
    {
        $query->where('user_id', $id);
    }
}
