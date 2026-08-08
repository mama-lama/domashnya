<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\MenuItem;
use App\Models\Setting;
use App\Services\MenuService;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index(MenuService $menuService, Request $request)
    {
        $settings = Setting::all()->pluck('value', 'key');

        $rawMenuItems = MenuItem::all();
        $menuItems = $menuService->groupMenuItems($rawMenuItems);

        $categories = Category::orderBy('sort_order')
            ->get()
            ->filter(fn (Category $category) => $rawMenuItems->contains(
                fn (MenuItem $item) => in_array($category->slug, $item->categorySlugs(), true)
            ))
            ->values();

        $activeCategory = $request->input('category', 'all');
        if ($activeCategory !== 'all' && !$categories->contains('slug', $activeCategory)) {
            $activeCategory = 'all';
        }

        return view('menu.index', compact(
            'settings',
            'menuItems',
            'categories',
            'activeCategory'
        ));
    }
}
