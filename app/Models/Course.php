<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Course extends Model
{
    use HasFactory;

    public function route()
    {
        return '/courses/' . $this->slug;
    }
    
    public static function create($request)
    {
        $c = new static;

        $c->title = $request->title;
        $c->slug = Str::slug($c->title);
        $c->year_id = $request->year;

        $c->save();
    }

    public static function edit($request)
    {
        $c = Course::find($request->id);

        $c->title = $request->title;
        $c->slug = Str::slug($c->title);
        $c->description = $request->description;
        $c->year_id = $request->year;

        $c->save();
        return $c;
    }
}
