<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Year extends Model
{
    use HasFactory;
    protected $fillable = ['id'];

    public function route()
    {
        return '/years/' . $this->id;
    }

    public function courses()
    {
        return $this->hasMany(Course::class);
    }
}
