<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\News;
use App\Models\Program;
use App\Models\Ticker;
use App\Models\Video;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $tickers = Ticker::where('is_active', true)->get();
        $liveVideo = Video::where('is_live', true)->first() ?? Video::where('is_featured', true)->first();
        $featuredVideos = Video::where('id', '!=', optional($liveVideo)->id)->latest()->take(3)->get();
        $programs = Program::with('category')->where('status', 'Active')->take(4)->get();
        $newsList = News::with('category')->whereNotNull('published_at')->latest('published_at')->take(3)->get();
        $categories = Category::all();

        // Statistics counter data
        $stats = [
            'broadcast_hours' => '1,250+',
            'programs_count' => Program::count(),
            'community_members' => '350+',
            'published_news' => News::count(),
        ];

        return view('home', compact('tickers', 'liveVideo', 'featuredVideos', 'programs', 'newsList', 'categories', 'stats'));
    }
}
