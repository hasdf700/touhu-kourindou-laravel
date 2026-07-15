<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $categorys = Category::orderBy('id')->get();

        $products = Product::with('shop', 'category', 'images')
            ->when($request->filled('category'), function ($query) use ($request) {
                $query->where('category_id', $request->input('category'));
            })
            ->when($request->filled('search'), function ($query) use ($request) {
                $keyword = $request->input('search');
                $query->where(function ($subquery) use ($keyword) {
                    $subquery->where('name', 'like', "%{$keyword}%")
                        ->orWhereHas('shop', function ($shopquery) use ($keyword) {
                            $shopquery->where('name', 'like', "%{$keyword}%");
                        });
                });
            })
            ->where('is_open', true)
            ->orderBy('sort')
            ->paginate(8)
            ->withQueryString();
        return view('shop.index', [
            'categorys' => $categorys,
            'products' => $products,
        ]);
    }
}
