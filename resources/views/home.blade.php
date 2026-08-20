@extends('layouts.app')

@section('title', 'Budi Luhur TV - Media Kampus dan Komunitas Kreatif')

@section('styles')
<style>
    /* HERO SECTION */
    .hero-section {
        background: linear-gradient(135deg, rgba(0, 37, 90, 0.95) 0%, rgba(0, 18, 60, 0.92) 100%), 
                    url('https://images.unsplash.com/photo-1598899134739-24c46f58b8c0?w=1600&auto=format&fit=crop') center/cover;
        color: white;
        padding: 95px 40px;
        position: relative;
    }

    .hero-container {
        max-width: 1280px;
        margin: 0 auto;
        display: grid;
        grid-template-columns: 1.2fr 0.8fr;
        gap: 50px;
        align-items: center;
    }

    .hero-tag {
        display: inline-block;
        background: var(--bl-yellow);
        color: var(--bl-navy);
        padding: 6px 18px;
        border-radius: 30px;
        font-size: 13px;
        font-weight: 900;
        margin-bottom: 20px;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .hero-title {
        font-size: 52px;
        font-weight: 900;
        line-height: 1.08;
        margin-bottom: 12px;
    }

    .hero-subtitle {
        font-size: 22px;
        font-weight: 700;
        color: var(--bl-yellow);
        margin-bottom: 20px;
    }

    .hero-desc {
        font-size: 16px;
        color: #E2E8F0;
        margin-bottom: 35px;
        line-height: 1.7;
    }

    .hero-btns {
        display: flex;
        gap: 16px;
        flex-wrap: wrap;
    }

    .btn-primary {
        background: var(--bl-yellow);
        color: var(--bl-navy);
        padding: 14px 32px;
        border-radius: 12px;
        font-weight: 800;
        font-size: 16px;
        transition: all 0.3s ease;
        display: inline-flex;
        align-items: center;
        gap: 10px;
        box-shadow: 0 4px 20px rgba(255, 230, 0, 0.4);
    }

    .btn-primary:hover {
        transform: translateY(-3px);
        background: white;
        box-shadow: 0 8px 25px rgba(255, 255, 255, 0.4);
    }

    .btn-secondary {
        background: rgba(255, 255, 255, 0.15);
        color: white;
        border: 2px solid rgba(255, 255, 255, 0.3);
        padding: 14px 28px;
        border-radius: 12px;
        font-weight: 700;
        font-size: 16px;
        transition: all 0.3s ease;
        display: inline-flex;
        align-items: center;
        gap: 10px;
    }

    .btn-secondary:hover {
        background: white;
        color: var(--bl-navy);
    }

    .hero-card-preview {
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(14px);
        border: 1px solid rgba(255, 255, 255, 0.2);
        border-radius: 24px;
        padding: 30px;
        box-shadow: 0 20px 40px rgba(0,0,0,0.35);
    }

    .counter-section {
        background-color: var(--bl-ice-blue);
        padding: 60px 40px;
        border-y: 2px solid #BFDBFE;
    }

    .counter-container {
        max-width: 1280px;
        margin: 0 auto;
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 30px;
        text-align: center;
    }

    .counter-card {
        background: white;
        padding: 32px 20px;
        border-radius: 20px;
        box-shadow: 0 4px 15px rgba(0, 37, 90, 0.08);
        border: 1px solid #DBEAFE;
    }

    .counter-number {
        font-size: 46px;
        font-weight: 900;
        color: var(--bl-navy);
        line-height: 1;
        margin-bottom: 8px;
    }

    .counter-label {
        font-size: 15px;
        color: #475569;
        font-weight: 700;
    }

    @media (max-width: 1024px) {
        .hero-container { grid-template-columns: 1fr; }
        .counter-container { grid-template-columns: repeat(2, 1fr); }
    }
</style>
@endsection

@section('content')

<!-- HERO SECTION -->
<section class="hero-section">
    <div class="hero-container">
        <div>
            <span class="hero-tag"><i class="fa-solid fa-satellite-dish"></i> Official Media Kampus & Komunitas Kreatif</span>
            <h1 class="hero-title">BUDI LUHUR <span style="color: var(--bl-yellow);">TV</span></h1>
            <div class="hero-subtitle">Media dan Komunitas Kreatif Siswa & Mahasiswa</div>
            <p class="hero-desc">
                Media penyiaran digital resmi Universitas Budi Luhur. Menyajikan berita kampus independen, liputan siaran langsung (Live Report), talkshow kreatif, serta pameran sinematografi buatan civitas akademika.
            </p>
            <div class="hero-btns">
                <a href="#live-section" class="btn-primary">
                    <i class="fa-solid fa-play"></i> Tonton Siaran Langsung
                </a>
                <a href="{{ route('programs.index') }}" class="btn-secondary">
                    <i class="fa-solid fa-tv"></i> Jelajahi Program TV
                </a>
            </div>
        </div>

        <div class="hero-card-preview">
            <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 15px;">
                <span style="background: #EF4444; color: white; font-weight: 900; font-size: 12px; padding: 4px 12px; border-radius: 20px;">
                    <i class="fa-solid fa-circle"></i> SIARAN UTAMA
                </span>
                <span style="color: #94A3B8; font-size: 13px;"><i class="fa-regular fa-clock"></i> Live Broadcast</span>
            </div>
            <h3 style="font-size: 22px; font-weight: 800; margin-bottom: 12px;">Wisuda & Inaugurasi Universitas Budi Luhur</h3>
            <p style="font-size: 14px; color: #CBD5E1; margin-bottom: 20px;">
                Siaran langsung resmi rangkaian acara wisuda sarjana & pascasarjana dari Grha Budi Luhur Jakarta.
            </p>
            <a href="{{ route('videos.index') }}" style="display: block; text-align: center; background: var(--bl-yellow); color: var(--bl-navy); font-weight: 900; padding: 14px; border-radius: 12px;">
                Buka Player Full HD <i class="fa-solid fa-arrow-right"></i>
            </a>
        </div>
    </div>
</section>

<!-- ABOUT US BLTV SECTION -->
<section id="about-section" style="background: white; padding: 80px 40px; border-bottom: 1px solid #E2E8F0;">
    <div style="max-width: 1280px; margin: 0 auto; display: grid; grid-template-columns: 1.1fr 0.9fr; gap: 50px; align-items: center;">
        <div>
            <span style="color: #D97706; font-weight: 800; font-size: 13px; letter-spacing: 1.5px; text-transform: uppercase;">ABOUT US BLTV</span>
            <h2 style="font-size: 36px; font-weight: 900; color: var(--bl-navy); margin: 10px 0 20px;">
                Media dan Komunitas Kreatif Terdepan Universitas Budi Luhur
            </h2>
            <p style="color: #475569; font-size: 16px; line-height: 1.7; margin-bottom: 24px;">
                Budi Luhur TV (BLTV) didirikan sebagai wadah ekspresi visual, pembelajaran jurnalistik, dan produksi penyiaran kreatif bagi seluruh mahasiswa dan komunitas kreatif di lingkungan Universitas Budi Luhur.
            </p>
            <div style="display: flex; flex-direction: column; gap: 16px;">
                <div style="display: flex; gap: 14px; align-items: flex-start;">
                    <div style="width: 36px; height: 36px; background: var(--bl-ice-blue); color: var(--bl-navy); border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 16px; font-weight: 800;">
                        <i class="fa-solid fa-video"></i>
                    </div>
                    <div>
                        <h4 style="font-[#00255A]; font-weight: 800; font-size: 16px;">Produksi Siaran Digital Berstandar TV</h4>
                        <p style="color: #64748B; font-size: 14px;">Penggunaan studio OB Van, ruang kendali siaran, dan kamera profesional.</p>
                    </div>
                </div>
                <div style="display: flex; gap: 14px; align-items: flex-start;">
                    <div style="width: 36px; height: 36px; background: var(--bl-ice-blue); color: var(--bl-navy); border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 16px; font-weight: 800;">
                        <i class="fa-solid fa-newspaper"></i>
                    </div>
                    <div>
                        <h4 style="font-[#00255A]; font-weight: 800; font-size: 16px;">Portal Jurnalistik Kampus</h4>
                        <p style="color: #64748B; font-size: 14px;">Menyampaikan berita riset, kegiatan akademis, dan isu hangat komunitas siswa.</p>
                    </div>
                </div>
            </div>
        </div>

        <div style="position: relative;">
            <img src="https://images.unsplash.com/photo-1598899134739-24c46f58b8c0?w=1000&auto=format&fit=crop" alt="BLTV Studio" style="width: 100%; border-radius: 24px; box-shadow: 0 20px 40px rgba(0,0,0,0.15);">
        </div>
    </div>
</section>

<!-- LIVE STREAMING / FEATURED VIDEO SECTION -->
<section id="live-section" style="background: #0B192C; color: white; padding: 80px 40px;">
    <div style="text-align: center; margin-bottom: 45px;">
        <span style="color: var(--bl-yellow); font-weight: 800; font-size: 13px; letter-spacing: 1.5px;">MEDIA BROADCAST</span>
        <h2 style="font-size: 38px; font-weight: 900; color: white; margin-top: 6px;">Live Stream & Video Terbaru</h2>
    </div>

    <div style="max-width: 1280px; margin: 0 auto; display: grid; grid-template-columns: 2fr 1fr; gap: 30px;">
        <!-- MAIN PLAYER -->
        <div style="background: black; border-radius: 20px; overflow: hidden; box-shadow: 0 15px 40px rgba(0,0,0,0.6);">
            <div style="position: relative; padding-bottom: 56.25%; height: 0;">
                @if(isset($liveVideo) && $liveVideo->youtube_id)
                    <iframe src="https://www.youtube-nocookie.com/embed/{{ $liveVideo->youtube_id }}?autoplay=0" title="{{ $liveVideo->title }}" style="position: absolute; top:0; left:0; width:100%; height:100%; border:0;" allowfullscreen></iframe>
                @else
                    <iframe src="https://www.youtube-nocookie.com/embed/L_LUpnjgPso" title="Live Broadcast" style="position: absolute; top:0; left:0; width:100%; height:100%; border:0;" allowfullscreen></iframe>
                @endif
            </div>
            <div style="padding: 24px; background: #1E293B;">
                <span style="background: var(--bl-yellow); color: var(--bl-navy); font-weight: 900; font-size: 12px; padding: 4px 12px; border-radius: 6px;">FEATURED BROADCAST</span>
                <h3 style="font-size: 22px; font-weight: 800; color: white; margin: 12px 0 8px;">{{ optional($liveVideo)->title ?? 'LIVE REPORT: Procession Wisuda & Inaugurasi Universitas Budi Luhur' }}</h3>
                <p style="color: #94A3B8; font-size: 14px;">
                    {{ optional($liveVideo)->description ?? 'Siaran langsung resmi Budi Luhur TV dari Grha Budi Luhur Jakarta Selatan.' }}
                </p>
            </div>
        </div>

        <!-- PLAYLIST SIDEBAR -->
        <div style="background: #1E293B; border-radius: 20px; padding: 24px; max-height: 520px; overflow-y: auto;">
            <h4 style="font-size: 18px; font-weight: 800; color: var(--bl-yellow); margin-bottom: 18px; padding-bottom: 10px; border-bottom: 1px solid #334155;">
                <i class="fa-solid fa-list-ul"></i> Playlist Rekaman Siaran
            </h4>
            
            @foreach($featuredVideos as $video)
            <a href="{{ route('videos.show', $video->slug) }}" style="display: flex; gap: 12px; padding: 12px; border-radius: 12px; margin-bottom: 12px; background: rgba(255, 255, 255, 0.05); text-decoration: none;">
                <img src="{{ $video->thumbnail_url }}" alt="{{ $video->title }}" style="width: 100px; height: 65px; border-radius: 8px; object-fit: cover;">
                <div>
                    <h5 style="font-size: 13px; font-weight: 700; color: white; line-height: 1.3; margin-bottom: 4px;">{{ Str::limit($video->title, 45) }}</h5>
                    <span style="font-size: 11px; color: #94A3B8;"><i class="fa-regular fa-clock"></i> {{ $video->duration }}</span>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</section>

<!-- COUNTER / STATS SECTION -->
<section class="counter-section">
    <div class="counter-container">
        <div class="counter-card">
            <div class="counter-number">{{ $stats['broadcast_hours'] }}</div>
            <div class="counter-label"><i class="fa-solid fa-clock"></i> Total Jam Siaran</div>
        </div>
        <div class="counter-card">
            <div class="counter-number">{{ $stats['programs_count'] }}</div>
            <div class="counter-label"><i class="fa-solid fa-tv"></i> Program TV Active</div>
        </div>
        <div class="counter-card">
            <div class="counter-number">{{ $stats['community_members'] }}</div>
            <div class="counter-label"><i class="fa-solid fa-users"></i> Anggota Komunitas</div>
        </div>
        <div class="counter-card">
            <div class="counter-number">{{ $stats['published_news'] }}</div>
            <div class="counter-label"><i class="fa-solid fa-newspaper"></i> Berita Terpublikasi</div>
        </div>
    </div>
</section>

<!-- PROGRAM TV SECTION -->
<section style="padding: 80px 40px; max-width: 1280px; margin: 0 auto;">
    <div style="text-align: center; margin-bottom: 50px;">
        <span style="color: #D97706; font-weight: 800; font-size: 13px; letter-spacing: 1.5px; text-transform: uppercase;">PROGRAM KREATIF</span>
        <h2 style="font-size: 38px; font-weight: 900; color: var(--bl-navy);">Program Tayangan Unggulan BLTV</h2>
    </div>

    <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 32px;">
        @foreach($programs as $program)
        <div style="background: white; border-radius: 20px; overflow: hidden; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05); border: 1px solid var(--bl-border); display: grid; grid-template-columns: 0.9fr 1.1fr;">
            <img src="{{ $program->thumbnail_url }}" alt="{{ $program->title }}" style="width: 100%; height: 100%; min-height: 200px; object-fit: cover;">
            <div style="padding: 24px; display: flex; flex-direction: column; justify-content: space-between;">
                <div>
                    <span style="background: var(--bl-yellow); color: var(--bl-navy); font-weight: 900; font-size: 11px; padding: 4px 12px; border-radius: 20px; text-transform: uppercase;">
                        {{ $program->category->name }}
                    </span>
                    <h3 style="font-size: 20px; font-weight: 900; color: var(--bl-navy); margin: 12px 0 8px;">{{ $program->title }}</h3>
                    <p style="font-size: 13px; color: var(--bl-text-muted); margin-bottom: 12px;"><i class="fa-regular fa-calendar-check"></i> {{ $program->broadcast_schedule }}</p>
                    <p style="font-size: 14px; color: #475569; line-height: 1.5; margin-bottom: 16px;">
                        {{ Str::limit($program->description, 100) }}
                    </p>
                </div>
                <a href="{{ route('programs.show', $program->slug) }}" style="font-weight: 800; color: #004FC2; font-size: 14px; display: inline-flex; align-items: center; gap: 6px; text-decoration: none;">
                    Lihat Detail Program <i class="fa-solid fa-chevron-right"></i>
                </a>
            </div>
        </div>
        @endforeach
    </div>
</section>

<!-- NEWS & UPDATES SECTION -->
<section style="background: white; padding: 80px 40px; border-top: 1px solid #E2E8F0;">
    <div style="max-width: 1280px; margin: 0 auto;">
        <div style="text-align: center; margin-bottom: 50px;">
            <span style="color: #D97706; font-weight: 800; font-size: 13px; letter-spacing: 1.5px; text-transform: uppercase;">KABAR KAMPUS</span>
            <h2 style="font-size: 38px; font-weight: 900; color: var(--bl-navy);">Berita & Informasi Terkini</h2>
        </div>

        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 30px;">
            @foreach($newsList as $news)
            <article style="background: white; border-radius: 20px; overflow: hidden; box-shadow: 0 6px 20px rgba(0, 0, 0, 0.05); border: 1px solid var(--bl-border); display: flex; flex-direction: column; justify-content: space-between;">
                <div>
                    <img src="{{ $news->image_url }}" alt="{{ $news->title }}" style="width: 100%; height: 200px; object-fit: cover;">
                    <div style="padding: 24px;">
                        <div style="font-size: 12px; color: var(--bl-text-muted); margin-bottom: 8px;">
                            <span style="color: #004FC2; font-weight: 800;">{{ $news->category->name }}</span> • {{ $news->published_at->format('d M Y') }}
                        </div>
                        <h3 style="font-size: 18px; font-weight: 800; color: var(--bl-navy); margin-bottom: 10px; line-height: 1.4;">
                            <a href="{{ route('news.show', $news->slug) }}" style="text-decoration: none; color: inherit;">{{ $news->title }}</a>
                        </h3>
                        <p style="font-size: 14px; color: #475569; line-height: 1.6; margin-bottom: 16px;">
                            {{ Str::limit($news->summary, 110) }}
                        </p>
                    </div>
                </div>
                <div style="padding: 16px 24px 24px; border-top: 1px solid #F1F5F9; display: flex; justify-content: space-between; align-items: center; font-size: 13px; color: #64748B;">
                    <span><i class="fa-solid fa-user"></i> {{ $news->author_name }}</span>
                    <a href="{{ route('news.show', $news->slug) }}" style="font-weight: 800; color: var(--bl-navy); text-decoration: none;">
                        Baca Selengkapnya <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </article>
            @endforeach
        </div>
    </div>
</section>

@endsection
