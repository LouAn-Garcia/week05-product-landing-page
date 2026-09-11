<?php

namespace App\Http\Controllers;

use App\Models\CatProfile;
use App\Models\MenuItem;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        return view('pages.home', [
            'featuredMenuItems' => MenuItem::query()->where('is_featured', true)->orderBy('sort_order')->take(3)->get(),
            'cats' => CatProfile::query()->where('is_featured', true)->orderBy('sort_order')->take(3)->get(),
        ]);
    }

    public function menu(): View
    {
        return view('pages.menu', [
            'menuItems' => MenuItem::query()->orderBy('category')->orderBy('sort_order')->get()->groupBy('category'),
        ]);
    }

    public function cats(): View
    {
        return view('pages.cats', [
            'cats' => CatProfile::query()->orderBy('sort_order')->get(),
        ]);
    }
}
