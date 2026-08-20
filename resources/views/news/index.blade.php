@extends('layouts.app')

@section('title', 'News & Updates - Budi Luhur TV')

@section('content')
<div style="background: var(--bl-navy); color: white; padding: 60px 40px; text-align: center;">
    <h1 style="font-size: 38px; font-weight: 900; margin-bottom: 12px;">Portal Berita & Informasi Kampus</h1>
    <p style="color: #CBD5E1; max-width: 650px; margin: 0 auto 30px; font-size: 16px;">
        Dapatkan artikel berita terkini, liputan kegiatan civitas akademika, dan kabar komunitas kreatif Universitas Budi Luhur.
    </p>

    <!-- SEARCH FORM -->
    <form action="{{ route('news.index') }}" method="GET" style="max-width: 600px; margin: 0 auto; display: flex; gap: 10px; background: white; padding: 6px; border-radius: 30px;">
        <input type="text" name="q" value="{{ $search }}" placeholder="Cari judul atau kata kunci berita..." style="flex: 1; border: none; outline: none; padding: 12px 20px; font-size: 15px; border-radius: 20px;">
        <button type="submit" style="background: var(--bl-yellow); color: var(--bl-navy); border: none; font-weight: 800; padding: 0 28px; border-radius: 25px; cursor: pointer; font-size: 15px;">
            Cari Berita
        </button>
    </form>
</div>

<div style="max-width: 1280px; margin: 50px auto; padding: 0 40px;">
    <!-- CATEGORY FILTERS -->
    <div style="display: flex; gap: 12px; margin-bottom: 40px; justify-content: center; flex-wrap: wrap;">
        <a href="{{ route('news.index') }}" style="padding: 10px 22px; border-radius: 25px; font-weight: 700; font-size: 14px; background: {{ !$categorySlug ? 'var(--bl-navy)' : 'white' }}; color: {{ !$categorySlug ? 'var(--bl-yellow)' : 'var(--bl-navy)' }}; border: 1px solid var(--bl-border);">
            Semua Berita
        </a>
        @foreach($categories as $cat)
        <a href="{{ route('news.index', ['category' => $cat->slug]) }}" style="padding: 10px 22px; border-radius: 25px; font-weight: 700; font-size: 14px; background: {{ $categorySlug == $cat->slug ? 'var(--bl-navy)' : 'white' }}; color: {{ $categorySlug == $cat->slug ? 'var(--bl-yellow)' : 'var(--bl-navy)' }}; border: 1px solid var(--bl-border);">
            {{ $cat->name }}
        </a>
        @endforeach
    </div>

    <!-- NEWS CARDS GRID -->
    <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 30px;">
        @forelse($newsList as $news)
        <article style="background: white; border-radius: 16px; overflow: hidden; box-shadow: 0 6px 20px rgba(0,0,0,0.05); border: 1px solid var(--bl-border); display: flex; flex-direction: column;">
            <img src="{{ $news->image_url }}" alt="{{ $news->title }}" style="width: 100%; height: 200px; object-fit: cover;">
            <div style="padding: 24px; flex: 1; display: flex; flex-direction: column; justify-content: space-between;">
                <div>
                    <div style="font-size: 12px; color: #64748B; margin-bottom: 10px;">
                        <span style="color: #004FC2; font-weight: 700;">{{ $news->category->name }}</span> • 
                        <span>{{ $news->published_at->format('d M Y') }}</span>
                    </div>
                    <h3 style="font-size: 18px; font-weight: 800; color: var(--bl-navy); margin-bottom: 10px; line-height: 1.4;">
                        <a href="{{ route('news.show', $news->slug) }}">{{ $news->title }}</a>
                    </h3>
                    <p style="font-size: 14px; color: #475569; line-height: 1.6; margin-bottom: 20px;">
                        {{ Str::limit($news->summary, 120) }}
                    </p>
                </div>
                <div style="display: flex; justify-content: space-between; align-items: center; border-top: 1px solid #F1F5F9; padding-top: 14px;">
                    <span style="font-size: 12px; color: #94A3B8;"><i class="fa-solid fa-user"></i> {{ $news->author_name }}</span>
                    <a href="{{ route('news.show', $news->slug) }}" style="font-size: 14px; font-weight: 700; color: var(--bl-navy);">
                        Baca Selengkapnya <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </article>
        @empty
        <div style="grid-column: span 3; padding: 60px; background: white; text-align: center; border-radius: 16px;">
            <i class="fa-solid fa-newspaper" style="font-size: 48px; color: #94A3B8; margin-bottom: 16px;"></i>
            <h3>Tidak ada berita ditemukan.</h3>
        </div>
        @endforelse
    </div>

    <div style="margin-top: 40px;">
        {{ $newsList->links() }}
    </div>
</div>
@endsection
