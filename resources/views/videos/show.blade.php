@extends('layouts.app')

@section('title', $video->title . ' - Budi Luhur TV')

@section('content')
<div style="background: #0B192C; color: white; padding: 60px 40px;">
    <div style="max-width: 1100px; margin: 0 auto;">
        <div style="background: black; border-radius: 16px; overflow: hidden; box-shadow: 0 15px 40px rgba(0,0,0,0.7); margin-bottom: 24px;">
            <div style="position: relative; padding-bottom: 56.25%; height: 0;">
                <iframe src="https://www.youtube-nocookie.com/embed/{{ $video->youtube_id }}?autoplay=1" style="position: absolute; top:0; left:0; width:100%; height:100%; border:0;" allowfullscreen></iframe>
            </div>
        </div>

        <div style="background: #1E293B; border-radius: 16px; padding: 30px;">
            <span style="background: var(--bl-yellow); color: var(--bl-navy); font-weight: 800; font-size: 12px; padding: 4px 12px; border-radius: 10px;">
                {{ optional($video->program)->title ?? 'Program Media' }}
            </span>
            <h1 style="font-size: 26px; font-weight: 800; color: white; margin: 12px 0 8px;">{{ $video->title }}</h1>
            <div style="font-size: 14px; color: #94A3B8; margin-bottom: 20px;">
                <span><i class="fa-solid fa-eye"></i> {{ number_format($video->views) }} views</span> • 
                <span><i class="fa-regular fa-clock"></i> Durasi: {{ $video->duration }}</span>
            </div>
            <p style="color: #CBD5E1; font-size: 15px; line-height: 1.7;">
                {{ $video->description }}
            </p>
        </div>
    </div>
</div>

<div style="max-width: 1100px; margin: 60px auto; padding: 0 40px;">
    <h3 style="font-size: 22px; font-weight: 800; color: var(--bl-navy); margin-bottom: 24px;">Video Lainnya</h3>
    
    <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px;">
        @foreach($moreVideos as $vid)
        <div style="background: white; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.05); border: 1px solid var(--bl-border);">
            <img src="{{ $vid->thumbnail_url }}" alt="{{ $vid->title }}" style="width: 100%; height: 130px; object-fit: cover;">
            <div style="padding: 14px;">
                <h5 style="font-size: 14px; font-weight: 700; color: var(--bl-navy); margin-bottom: 8px;">{{ Str::limit($vid->title, 40) }}</h5>
                <a href="{{ route('videos.show', $vid->slug) }}" style="font-size: 12px; font-weight: 700; color: #004FC2;">Putar Video <i class="fa-solid fa-play"></i></a>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
