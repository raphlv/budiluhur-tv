<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function index(Request $request)
    {
        $liveStream = Video::where('is_live', true)->first();
        $videos = Video::with('program')->latest()->paginate(9);

        return view('videos.index', compact('liveStream', 'videos'));
    }

    public function show($slug)
    {
        $video = Video::with('program')->where('slug', $slug)->firstOrFail();
        $video->increment('views');
        $moreVideos = Video::where('id', '!=', $video->id)->latest()->take(4)->get();

        return view('videos.show', compact('video', 'moreVideos'));
    }
}
