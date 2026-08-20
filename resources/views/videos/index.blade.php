@extends('layouts.app')

@section('title', 'Live Streaming & Video Report - Budi Luhur TV')

@section('content')
<div style="background: #0B192C; color: white; padding: 60px 40px;">
    <div style="max-width: 1280px; margin: 0 auto;">
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 30px;">
            <div>
                <span style="background: #EF4444; color: white; font-weight: 800; font-size: 12px; padding: 4px 12px; border-radius: 20px;">
                    <i class="fa-solid fa-signal"></i> LIVE BROADCAST PLAYER
                </span>
                <h1 style="font-size: 34px; font-weight: 900; margin-top: 10px;">Siaran Langsung & Arsip Liputan Media</h1>
            </div>
        </div>

        <div style="display: grid; grid-template-columns: 2.2fr 1fr; gap: 30px;">
            <div style="background: black; border-radius: 16px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.6);">
                <div style="position: relative; padding-bottom: 56.25%; height: 0;">
                    <iframe src="https://www.youtube-nocookie.com/embed/{{ optional($liveStream)->youtube_id ?? 'L_LUpnjgPso' }}?autoplay=0" style="position: absolute; top:0; left:0; width:100%; height:100%; border:0;" allowfullscreen></iframe>
                </div>
                <div style="padding: 24px; background: #1E293B;">
                    <h3 style="font-size: 22px; font-weight: 700; color: white; margin-bottom: 8px;">
                        {{ optional($liveStream)->title ?? 'LIVE STREAMING: Wisuda & Inaugurasi Universitas Budi Luhur 2026' }}
                    </h3>
                    <p style="color: #94A3B8; font-size: 14px;">
                        {{ optional($liveStream)->description ?? 'Siaran langsung resmi Universitas Budi Luhur dari Grha Budi Luhur Jakarta.' }}
                    </p>
                </div>
            </div>

            <div style="background: #1E293B; border-radius: 16px; padding: 20px;">
                <h3 style="font-size: 18px; font-weight: 700; color: var(--bl-yellow); margin-bottom: 16px; border-bottom: 1px solid #334155; padding-bottom: 10px;">
                    <i class="fa-solid fa-list-ul"></i> Playlist Rekaman
                </h3>

                @foreach($videos as $vid)
                <a href="{{ route('videos.show', $vid->slug) }}" style="display: flex; gap: 12px; margin-bottom: 14px; background: rgba(255,255,255,0.05); padding: 10px; border-radius: 10px; transition: background 0.2s;">
                    <img src="{{ $vid->thumbnail_url }}" alt="{{ $vid->title }}" style="width: 100px; height: 60px; object-fit: cover; border-radius: 6px;">
                    <div>
                        <h5 style="font-size: 13px; font-weight: 600; color: white; line-height: 1.3; margin-bottom: 4px;">{{ Str::limit($vid->title, 45) }}</h5>
                        <span style="font-size: 11px; color: #94A3B8;"><i class="fa-regular fa-clock"></i> {{ $vid->duration }}</span>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
    </div>
</div>

<div style="max-width: 1280px; margin: 60px auto; padding: 0 40px;">
    <h2 style="font-size: 26px; font-weight: 800; color: var(--bl-navy); margin-bottom: 30px;">Semua Video & Siaran TV</h2>

    <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 30px;">
        @foreach($videos as $video)
        <div style="background: white; border-radius: 16px; overflow: hidden; box-shadow: 0 6px 20px rgba(0,0,0,0.05); border: 1px solid var(--bl-border);">
            <img src="{{ $video->thumbnail_url }}" alt="{{ $video->title }}" style="width: 100%; height: 180px; object-fit: cover;">
            <div style="padding: 20px;">
                <span style="background: var(--bl-ice-blue); color: var(--bl-navy); font-weight: 800; font-size: 11px; padding: 4px 10px; border-radius: 10px;">
                    {{ optional($video->program)->title ?? 'Special Broadcast' }}
                </span>
                <h4 style="font-size: 16px; font-weight: 700; color: var(--bl-navy); margin: 10px 0 8px;">{{ $video->title }}</h4>
                <div style="font-size: 13px; color: #64748B; margin-bottom: 16px;">
                    <span><i class="fa-regular fa-clock"></i> {{ $video->duration }}</span> • 
                    <span>{{ number_format($video->views) }} views</span>
                </div>
                <a href="{{ route('videos.show', $video->slug) }}" style="display: block; text-align: center; background: var(--bl-navy); color: white; font-weight: 700; padding: 10px; border-radius: 8px;">
                    Tonton Video <i class="fa-solid fa-play"></i>
                </a>
            </div>
        </div>
        @endforeach
    </div>

    <div style="margin-top: 40px;">
        {{ $videos->links() }}
    </div>
</div>
@endsection
