<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Categorie;

class CategoriesController extends Controller
{
    public function create() {
        $categories = Categorie::all();
        return view('app.categories.show', compact('categories'));
    }
}