<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;

class FoodController extends Controller
{
    public function index()
    {
        $includes = ['category'];
        $foods = Food::with($includes)->get();
        return response()->json($foods);
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Food $food)
    {
        //
    }

    public function update(Request $request, Food $food)
    {
        //
    }

    public function destroy(Food $food)
    {
        //
    }
}
