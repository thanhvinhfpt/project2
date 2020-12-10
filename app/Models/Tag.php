<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Tag extends Model
{
    use HasFactory;
    use Sluggable;
    public function sluggable(){
        return ['slug' => [
            'source' => 'title'
        ]];
        // TODO: Implement sluggable() method.
    }

    public function post(){
        return $this->hasMany('App\Models\Post');
    }
}
