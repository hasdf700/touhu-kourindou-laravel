<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $featuredProducts = Product::with(['images', 'shop'])
            ->where('is_open', true)
            ->orderBy('sort')
            ->take(4)
            ->get();

        return view('home', [
            'featuredProducts' => $featuredProducts,
        ]);
    }
}