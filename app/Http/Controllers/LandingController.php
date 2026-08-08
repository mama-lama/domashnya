<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use App\Models\Category;
use App\Models\MenuItem;
use App\Models\Review;
use App\Services\MenuService;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index(MenuService $menuService)
    {
        $settings = Setting::all()->pluck('value', 'key');

        $featuredItems = MenuItem::where('is_featured', true)->get();
        $menuItems = $menuService->groupMenuItems($featuredItems);

        $categories = Category::orderBy('sort_order')
            ->get()
            ->filter(fn (Category $category) => $featuredItems->contains(
                fn (MenuItem $item) => in_array($category->slug, $item->categorySlugs(), true)
            ))
            ->values();
        $reviews = Review::where('is_active', true)->get();
        $roomImages = collect(File::exists(public_path('images/rooms')) ? File::files(public_path('images/rooms')) : [])
            ->map(fn ($file) => asset('images/rooms/' . $file->getFilename()))
            ->values();
        $sadImages = collect(File::exists(public_path('images/sad')) ? File::files(public_path('images/sad')) : [])
            ->map(fn ($file) => asset('images/sad/' . $file->getFilename()))
            ->sort()
            ->values();

        $hallImages = collect(File::exists(public_path('images/zal')) ? File::files(public_path('images/zal')) : [])
            ->map(fn ($file) => asset('images/zal/' . $file->getFilename()))
            ->sort()
            ->values();

        return view('landing', compact('settings', 'menuItems', 'categories', 'reviews', 'roomImages', 'sadImages', 'hallImages'));
    }
}
