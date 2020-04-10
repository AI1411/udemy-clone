<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show(Category $category)
    {
        $courses_by_category = Category::with('courses')->get();

        return view('categories.show', compact('courses_by_category'));
    }
}
