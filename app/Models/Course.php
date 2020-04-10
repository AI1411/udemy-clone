<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Request;

class Course extends Model
{
    protected $primaryKey = 'id';

    public $incrementing = false;

    protected $keyType = 'string';

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function scopeSearchCourse($query)
    {
        $search_keyword = Request::input('search_course');
        if ($search_keyword) {
            return $query->where('title', 'like', "%{$search_keyword}%");
        }
        return $query;
    }
}
