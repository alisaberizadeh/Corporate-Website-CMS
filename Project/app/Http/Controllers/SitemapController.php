<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Product;
use Illuminate\Http\Request;

class SitemapController extends Controller
{
    public function index()
    {
        return response()->view('sitemap.index')->header('Content-Type', 'text/xml');
    }

    public function blog()
    {
        $articles = Blog::latest()->get();
        return response()->view('sitemap.articles', ['articles' => $articles])->header('Content-Type', 'text/xml');
    }
    public function products()
    {
        $products = Product::all();
        return response()->view('sitemap.products', ['products' => $products])->header('Content-Type', 'text/xml');
    }
    
}
