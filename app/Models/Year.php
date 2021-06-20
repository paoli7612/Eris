<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Year extends Model
{
    use HasFactory;

    public function route()
    {
        return 'years/' . $this->slug;
    }

    public static function create($id, $title)
    {
        $y = new static;
        $y->id = $id;
        $y->title = $title;
        $y->slug = Str::slug($title);
        $y->save();
    }
}
