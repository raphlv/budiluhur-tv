<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->query('q');
        $categorySlug = $request->query('category');

        $query = News::with('category')->whereNotNull('published_at');

        if ($search) {
            $query->where(function ($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                  ->orWhere('summary', 'like', "%{$search}%")
                  ->orWhere('content', 'like', "%{$search}%");
            });
        }

        if ($categorySlug) {
            $query->whereHas('category', function ($q) use ($categorySlug) {
                $q->where('slug', $categorySlug);
            });
        }

        $newsList = $query->latest('published_at')->paginate(6);
        $categories = Category::all();

        return view('news.index', compact('newsList', 'categories', 'search', 'categorySlug'));
    }

    public function show($slug)
    {
        $news = News::with('category')->where('slug', $slug)->firstOrFail();
        $news->increment('views');

        $recentNews = News::where('id', '!=', $news->id)->latest('published_at')->take(4)->get();

        return view('news.show', compact('news', 'recentNews'));
    }
}
