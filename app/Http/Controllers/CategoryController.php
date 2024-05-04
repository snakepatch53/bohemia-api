<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $includes = ['foods'];
        $categories = Category::with($includes)->get();
        return response()->json($categories);
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Category $category)
    {
        //
    }

    public function update(Request $request, Category $category)
    {
        //
    }

    public function destroy(Category $category)
    {
        //
    }
}
