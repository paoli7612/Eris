<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Year extends Model
{
    use HasFactory;

    public function route()
    {
        return 'years/' . $this->id;
    }

    public static function create($id, $slug)
    {
        $y = new static;
        $y->id = $id;
        $y->slug = $slug;
        $y->save();
    }
}
