<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'slug'];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function route($arg = 'slug')
    {
        return "/courses/{$this->$arg}";
    }

    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }

    public function year()
    {
        return $this->belongsTo(Year::class);
    }
}
