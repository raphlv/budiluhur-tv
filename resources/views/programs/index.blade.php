@extends('layouts.app')

@section('title', 'Program TV Kampus - Budi Luhur TV')

@section('content')
<div style="background: var(--bl-navy); color: white; padding: 60px 40px; text-align: center;">
    <h1 style="font-size: 38px; font-weight: 900; margin-bottom: 12px;">Program TV & Komunitas Kreatif</h1>
    <p style="color: #CBD5E1; max-width: 650px; margin: 0 auto; font-size: 16px;">
        Jelajahi berbagai pilihan program siaran berita, talkshow inspiratif, dan pameran sinematografi buatan civitas akademika Universitas Budi Luhur.
    </p>
</div>

<div style="max-width: 1280px; margin: 40px auto; padding: 0 40px;">
    <!-- CATEGORY FILTER BUTTONS -->
    <div style="display: flex; gap: 12px; flex-wrap: wrap; margin-bottom: 40px; justify-content: center;">
        <a href="{{ route('programs.index') }}" style="padding: 10px 22px; border-radius: 25px; font-weight: 700; font-size: 14px; background: {{ !$categorySlug ? 'var(--bl-navy)' : 'white' }}; color: {{ !$categorySlug ? 'var(--bl-yellow)' : 'var(--bl-navy)' }}; border: 1px solid var(--bl-border);">
            Semua Program
        </a>
        @foreach($categories as $cat)
        <a href="{{ route('programs.index', ['category' => $cat->slug]) }}" style="padding: 10px 22px; border-radius: 25px; font-weight: 700; font-size: 14px; background: {{ $categorySlug == $cat->slug ? 'var(--bl-navy)' : 'white' }}; color: {{ $categorySlug == $cat->slug ? 'var(--bl-yellow)' : 'var(--bl-navy)' }}; border: 1px solid var(--bl-border);">
            {{ $cat->name }}
        </a>
        @endforeach
    </div>

    <!-- PROGRAM CARDS GRID -->
    <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 30px;">
        @forelse($programs as $program)
        <div style="background: white; border-radius: 16px; overflow: hidden; box-shadow: 0 6px 20px rgba(0,0,0,0.05); border: 1px solid var(--bl-border); display: flex; flex-direction: column;">
            <img src="{{ $program->thumbnail_url }}" alt="{{ $program->title }}" style="width: 100%; height: 200px; object-fit: cover;">
            <div style="padding: 24px; flex: 1; display: flex; flex-direction: column; justify-content: space-between;">
                <div>
                    <span style="background: var(--bl-yellow); color: var(--bl-navy); font-weight: 800; font-size: 11px; padding: 4px 10px; border-radius: 12px; text-transform: uppercase;">
                        {{ $program->category->name }}
                    </span>
                    <h3 style="font-size: 20px; font-weight: 800; color: var(--bl-navy); margin: 12px 0 8px;">{{ $program->title }}</h3>
                    <p style="font-size: 13px; color: #64748B; margin-bottom: 12px;">
                        <i class="fa-regular fa-clock"></i> {{ $program->broadcast_schedule }}
                    </p>
                    <p style="font-size: 14px; color: #475569; line-height: 1.5; margin-bottom: 20px;">
                        {{ Str::limit($program->description, 110) }}
                    </p>
                </div>
                <a href="{{ route('programs.show', $program->slug) }}" style="display: block; text-align: center; background: var(--bl-navy); color: white; font-weight: 700; padding: 12px; border-radius: 10px;">
                    Lihat Detail & Episode <i class="fa-solid fa-chevron-right"></i>
                </a>
            </div>
        </div>
        @empty
        <div style="grid-column: span 3; text-align: center; padding: 60px; background: white; border-radius: 16px;">
            <i class="fa-solid fa-tv" style="font-size: 48px; color: #94A3B8; margin-bottom: 16px;"></i>
            <h3>Belum ada program untuk kategori ini.</h3>
        </div>
        @endforelse
    </div>

    <div style="margin-top: 40px;">
        {{ $programs->links() }}
    </div>
</div>
@endsection
