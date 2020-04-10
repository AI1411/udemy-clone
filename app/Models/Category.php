<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function getRouteKeyName()
    {
        return 'slug';
    }
    public function courses()
    {
        return $this->hasMany(Course::class);
    }
}
