<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Categorie;

class CategoriesController extends Controller
{
    public function index() {
        $categories = Categorie::all();
        return view('app.categories.show', compact('categories'));
    }
    
    public function show($category): View
    {
        $tracks = $category->tracks()
            ->withCount('likes')
            ->orderBy('likes_count');

        return view('app.categories.show', compact('category', 'tracks'));
    }
}