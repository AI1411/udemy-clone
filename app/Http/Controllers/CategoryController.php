<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show(Category $category)
    {
        $courses = $category->courses;
        return view('categories.show', compact( 'category', 'courses'));
    }
}
