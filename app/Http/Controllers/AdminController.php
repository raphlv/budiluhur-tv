<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\CrewRegistration;
use App\Models\News;
use App\Models\Program;
use App\Models\Ticker;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdminController extends Controller
{
    public function dashboard()
    {
        $totalNews = News::count();
        $totalPrograms = Program::count();
        $totalVideos = Video::count();
        $totalCrew = CrewRegistration::count();
        $recentCrew = CrewRegistration::latest()->take(5)->get();
        $news = News::latest()->take(5)->get();

        return view('admin.dashboard', compact('totalNews', 'totalPrograms', 'totalVideos', 'totalCrew', 'recentCrew', 'news'));
    }

    public function newsIndex()
    {
        $newsList = News::with('category')->latest()->paginate(10);
        $categories = Category::all();

        return view('admin.news', compact('newsList', 'categories'));
    }

    public function storeNews(Request $request)
    {
        $validated = $request->validate([
            'category_id' => 'required|exists:categories,id',
            'title' => 'required|string|max:255',
            'summary' => 'required|string',
            'content' => 'required|string',
            'image_url' => 'nullable|string',
            'author_name' => 'required|string',
            'is_featured' => 'boolean',
        ]);

        $validated['slug'] = Str::slug($validated['title']) . '-' . rand(100, 999);
        $validated['is_featured'] = $request->has('is_featured');
        $validated['published_at'] = now();

        News::create($validated);

        return redirect()->back()->with('success', 'Berita baru berhasil ditambahkan!');
    }

    public function tickersIndex()
    {
        $tickers = Ticker::latest()->get();
        return view('admin.tickers', compact('tickers'));
    }

    public function storeTicker(Request $request)
    {
        $validated = $request->validate([
            'content' => 'required|string|max:255',
            'link_url' => 'nullable|string',
        ]);

        $validated['is_active'] = true;
        Ticker::create($validated);

        return redirect()->back()->with('success', 'Ticker pengumuman baru berhasil ditambahkan!');
    }

    public function deleteTicker($id)
    {
        Ticker::findOrFail($id)->delete();
        return redirect()->back()->with('success', 'Ticker berhasil dihapus!');
    }
}
