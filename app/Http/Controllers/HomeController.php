<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Company;
use App\Models\Location;
use App\Models\Work;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::orderBy('id', 'desc')
            ->get();

        $companies = Company::with([
            'works' => function ($query) {
                $query->take(10)->with(['company', 'employer']);
            },
        ])
            ->take(5)
            ->get();

        return view('home.index')
            ->with([
                'categories' => $categories,
                'companies' => $companies,
            ]);
    }

    public function category($slug)
    {
        $category = Category::firstWhere('slug', $slug);

        $work = Work::where('category_id',$category->id)
            ->with('company','employer')
            ->orderBy('viewed','asc')
            ->paginate(24);

        return view('home.category')
            ->with([
                'category' => $category,
                'work' => $work,
            ]);
    }
}
