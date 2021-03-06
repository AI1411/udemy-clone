<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show(Category $category, Course $course)
    {
        $courses = $category
            ->courses()
            ->priceSearch()
            ->starCount()
            ->levelSearch()
            ->isSale()
            ->get();

        return view('categories.show', compact('category', 'courses'));
    }
}
