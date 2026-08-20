@extends('layouts.app')

@section('title', $news->title . ' - Budi Luhur TV')

@section('content')
<div style="max-width: 1000px; margin: 50px auto; padding: 0 30px;">
    <div style="background: white; border-radius: 20px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.05); border: 1px solid var(--bl-border); padding: 40px;">
        <span style="background: var(--bl-yellow); color: var(--bl-navy); font-weight: 800; font-size: 13px; padding: 6px 14px; border-radius: 20px; text-transform: uppercase;">
            {{ $news->category->name }}
        </span>
        
        <h1 style="font-size: 34px; font-weight: 900; color: var(--bl-navy); margin: 16px 0 14px; line-height: 1.3;">
            {{ $news->title }}
        </h1>

        <div style="display: flex; gap: 20px; color: #64748B; font-size: 14px; border-bottom: 1px solid #E2E8F0; padding-bottom: 20px; margin-bottom: 30px;">
            <span><i class="fa-solid fa-user-pen"></i> Oleh: <strong>{{ $news->author_name }}</strong></span>
            <span><i class="fa-regular fa-calendar-alt"></i> {{ $news->published_at->format('d F Y, H:i') }} WIB</span>
            <span><i class="fa-solid fa-eye"></i> {{ number_format($news->views) }} Pembaca</span>
        </div>

        <img src="{{ $news->image_url }}" alt="{{ $news->title }}" style="width: 100%; max-height: 450px; object-fit: cover; border-radius: 14px; margin-bottom: 30px;">

        <div style="font-size: 17px; line-height: 1.8; color: #334155;">
            <p style="font-size: 18px; font-weight: 600; color: var(--bl-navy); margin-bottom: 24px; border-left: 4px solid var(--bl-yellow); padding-left: 16px;">
                {{ $news->summary }}
            </p>
            <div>
                {!! nl2br(e($news->content)) !!}
            </div>
        </div>
    </div>

    <!-- RECENT NEWS -->
    <div style="margin-top: 60px;">
        <h3 style="font-size: 24px; font-weight: 800; color: var(--bl-navy); margin-bottom: 24px;">Berita Lainnya</h3>
        
        <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 24px;">
            @foreach($recentNews as $item)
            <a href="{{ route('news.show', $item->slug) }}" style="display: flex; gap: 16px; background: white; padding: 16px; border-radius: 14px; border: 1px solid var(--bl-border);">
                <img src="{{ $item->image_url }}" alt="{{ $item->title }}" style="width: 110px; height: 80px; object-fit: cover; border-radius: 10px;">
                <div>
                    <span style="font-size: 11px; color: #004FC2; font-weight: 700;">{{ $item->category->name }}</span>
                    <h4 style="font-size: 15px; font-weight: 700; color: var(--bl-navy); margin: 4px 0;">{{ Str::limit($item->title, 55) }}</h4>
                    <span style="font-size: 12px; color: #94A3B8;">{{ $item->published_at->format('d M Y') }}</span>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</div>
@endsection
