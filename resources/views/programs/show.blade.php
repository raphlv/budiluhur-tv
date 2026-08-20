@extends('layouts.app')

@section('title', $program->title . ' - Budi Luhur TV')

@section('content')
<div style="background: var(--bl-navy); color: white; padding: 60px 40px;">
    <div style="max-width: 1280px; margin: 0 auto; display: grid; grid-template-columns: 1fr 2fr; gap: 40px; align-items: center;">
        <img src="{{ $program->thumbnail_url }}" alt="{{ $program->title }}" style="width: 100%; border-radius: 16px; box-shadow: 0 10px 30px rgba(0,0,0,0.4);">
        <div>
            <span style="background: var(--bl-yellow); color: var(--bl-navy); font-weight: 800; font-size: 13px; padding: 6px 14px; border-radius: 20px; text-transform: uppercase;">
                {{ $program->category->name }}
            </span>
            <h1 style="font-size: 36px; font-weight: 900; margin: 16px 0 10px;">{{ $program->title }}</h1>
            <div style="display: flex; gap: 20px; font-size: 15px; color: #CBD5E1; margin-bottom: 20px;">
                <span><i class="fa-regular fa-calendar-check"></i> {{ $program->broadcast_schedule }}</span>
                <span><i class="fa-solid fa-user-tie"></i> Host: {{ $program->host_name }}</span>
            </div>
            <p style="font-size: 16px; color: #E2E8F0; line-height: 1.7;">
                {{ $program->description }}
            </p>
        </div>
    </div>
</div>

<div style="max-width: 1280px; margin: 60px auto; padding: 0 40px;">
    <h2 style="font-size: 26px; font-weight: 800; color: var(--bl-navy); margin-bottom: 24px;">
        <i class="fa-solid fa-play-circle"></i> Episode Video Tayangan
    </h2>

    <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 30px;">
        @forelse($program->videos as $video)
        <div style="background: white; border-radius: 16px; overflow: hidden; box-shadow: 0 6px 20px rgba(0,0,0,0.05); border: 1px solid var(--bl-border);">
            <img src="{{ $video->thumbnail_url }}" alt="{{ $video->title }}" style="width: 100%; height: 180px; object-fit: cover;">
            <div style="padding: 20px;">
                <h4 style="font-size: 16px; font-weight: 700; color: var(--bl-navy); margin-bottom: 8px;">{{ $video->title }}</h4>
                <div style="font-size: 13px; color: #64748B; margin-bottom: 14px;">
                    <span><i class="fa-regular fa-clock"></i> {{ $video->duration }}</span> • 
                    <span>{{ number_format($video->views) }} views</span>
                </div>
                <a href="{{ route('videos.show', $video->slug) }}" style="display: block; text-align: center; background: var(--bl-yellow); color: var(--bl-navy); font-weight: 800; padding: 10px; border-radius: 8px;">
                    Putar Video <i class="fa-solid fa-play"></i>
                </a>
            </div>
        </div>
        @empty
        <div style="grid-column: span 3; padding: 40px; background: white; text-align: center; border-radius: 12px;">
            <p style="color: #64748B;">Belum ada video episode yang dipublikasikan untuk program ini.</p>
        </div>
        @endforelse
    </div>
</div>
@endsection
