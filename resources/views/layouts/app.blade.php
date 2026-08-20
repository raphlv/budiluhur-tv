<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Budi Luhur TV - Media Kampus dan Komunitas Kreatif')</title>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    
    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        :root {
            --bl-navy: #00255A;
            --bl-navy-dark: #001A40;
            --bl-yellow: #FFE600;
            --bl-yellow-hover: #E6D000;
            --bl-light-bg: #F4F7FC;
            --bl-ice-blue: #DBEBFE;
            --bl-text-dark: #00255A;
            --bl-text-muted: #64748B;
            --bl-border: #E2E8F0;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--bl-light-bg);
            color: #334155;
            line-height: 1.6;
            overflow-x: hidden;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        /* ==================== STICKY HEADER ==================== */
        .bltv-header {
            position: sticky;
            top: 0;
            width: 100%;
            z-index: 999;
            box-shadow: 0 4px 20px rgba(0, 37, 90, 0.15);
        }

        /* TOP BLUE HEADER */
        .top-header {
            width: 100%;
            height: 80px;
            background: var(--bl-navy);
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 60px;
        }

        .logo-container {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .brand-badge {
            background: var(--bl-yellow);
            color: var(--bl-navy);
            padding: 6px 14px;
            border-radius: 8px;
            font-weight: 900;
            font-size: 20px;
            letter-spacing: 1px;
            box-shadow: 0 4px 10px rgba(255, 230, 0, 0.3);
        }

        .brand-text {
            color: white;
            font-size: 22px;
            font-weight: 800;
            letter-spacing: -0.5px;
        }

        .brand-text span {
            color: var(--bl-yellow);
        }

        .header-right {
            display: flex;
            align-items: center;
            gap: 16px;
        }

        .search-form {
            display: flex;
            align-items: center;
            background: rgba(255, 255, 255, 0.15);
            border-radius: 30px;
            padding: 4px 6px 4px 18px;
            border: 1px solid rgba(255, 255, 255, 0.2);
            transition: all 0.3s ease;
        }

        .search-form:focus-within {
            background: white;
            border-color: var(--bl-yellow);
        }

        .search-form input {
            background: transparent;
            border: none;
            outline: none;
            color: white;
            font-size: 14px;
            width: 220px;
            font-family: inherit;
        }

        .search-form:focus-within input {
            color: var(--bl-navy);
        }

        .search-form input::placeholder {
            color: rgba(255, 255, 255, 0.7);
        }

        .search-form:focus-within input::placeholder {
            color: #94A3B8;
        }

        .search-btn {
            width: 40px;
            height: 40px;
            border: none;
            border-radius: 50%;
            background: var(--bl-yellow);
            color: var(--bl-navy);
            font-size: 16px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: transform 0.2s ease;
        }

        .search-btn:hover {
            transform: scale(1.08);
            background: white;
        }

        .watch-btn {
            height: 46px;
            padding: 0 24px;
            background: var(--bl-yellow);
            border-radius: 12px;
            display: flex;
            align-items: center;
            gap: 10px;
            color: var(--bl-navy);
            font-size: 15px;
            font-weight: 700;
            box-shadow: 0 4px 15px rgba(255, 230, 0, 0.3);
            transition: all 0.3s ease;
        }

        .watch-btn:hover {
            transform: translateY(-2px);
            background: white;
            box-shadow: 0 6px 20px rgba(255, 255, 255, 0.4);
        }

        .live-dot {
            width: 10px;
            height: 10px;
            background-color: #EF4444;
            border-radius: 50%;
            animation: pulse-red 1.5s infinite;
        }

        @keyframes pulse-red {
            0% { transform: scale(0.95); box-shadow: 0 0 0 0 rgba(239, 68, 68, 0.7); }
            70% { transform: scale(1); box-shadow: 0 0 0 8px rgba(239, 68, 68, 0); }
            100% { transform: scale(0.95); box-shadow: 0 0 0 0 rgba(239, 68, 68, 0); }
        }

        /* WHITE NAVBAR */
        .navbar-white {
            width: 100%;
            height: 52px;
            background: white;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 36px;
            border-bottom: 1px solid #E2E8F0;
        }

        .nav-link {
            position: relative;
            color: var(--bl-navy);
            font-size: 15px;
            font-weight: 600;
            padding: 14px 0;
            transition: color 0.3s ease;
        }

        .nav-link:hover, .nav-link.active {
            color: #004FC2;
        }

        .nav-link::after {
            content: "";
            position: absolute;
            left: 0;
            bottom: 0;
            width: 0%;
            height: 3px;
            background: var(--bl-yellow);
            border-radius: 10px;
            transition: width 0.3s ease;
        }

        .nav-link:hover::after, .nav-link.active::after {
            width: 100%;
        }

        /* TICKER / ANNOUNCEMENT MARQUEE */
        .ticker-bar {
            width: 100%;
            background: white;
            border-bottom: 2px solid var(--bl-navy);
            display: flex;
            align-items: center;
            height: 48px;
            overflow: hidden;
        }

        .ticker-label {
            background: var(--bl-navy);
            color: var(--bl-yellow);
            font-weight: 800;
            font-size: 14px;
            padding: 0 24px;
            height: 100%;
            display: flex;
            align-items: center;
            gap: 10px;
            white-space: nowrap;
            z-index: 2;
            box-shadow: 4px 0 10px rgba(0,0,0,0.1);
        }

        .marquee-wrapper {
            flex: 1;
            overflow: hidden;
            position: relative;
            display: flex;
            align-items: center;
        }

        .marquee-content {
            display: inline-block;
            white-space: nowrap;
            color: var(--bl-navy);
            font-weight: 600;
            font-size: 15px;
            padding-left: 100%;
            animation: scrollText 30s linear infinite;
        }

        @keyframes scrollText {
            0% { transform: translateX(0); }
            100% { transform: translateX(-100%); }
        }

        /* MAIN CONTAINER */
        .main-content {
            min-height: 80vh;
        }

        /* FOOTER */
        .bltv-footer {
            background: var(--bl-navy-dark);
            color: white;
            padding-top: 60px;
            margin-top: 60px;
            border-top: 5px solid var(--bl-yellow);
        }

        .footer-container {
            max-width: 1280px;
            margin: 0 auto;
            padding: 0 40px;
            display: grid;
            grid-template-columns: 2fr 1fr 1fr 1.5fr;
            gap: 40px;
        }

        .footer-logo {
            font-size: 26px;
            font-weight: 900;
            color: white;
            margin-bottom: 16px;
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .footer-desc {
            color: #94A3B8;
            font-size: 14px;
            line-height: 1.7;
            margin-bottom: 20px;
        }

        .footer-title {
            color: var(--bl-yellow);
            font-size: 18px;
            font-weight: 700;
            margin-bottom: 20px;
            position: relative;
            padding-bottom: 8px;
        }

        .footer-title::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 30px;
            height: 3px;
            background: var(--bl-yellow);
            border-radius: 2px;
        }

        .footer-links {
            list-style: none;
        }

        .footer-links li {
            margin-bottom: 12px;
        }

        .footer-links a {
            color: #CBD5E1;
            font-size: 14px;
            transition: color 0.3s ease, transform 0.2s ease;
            display: inline-block;
        }

        .footer-links a:hover {
            color: var(--bl-yellow);
            transform: translateX(5px);
        }

        .footer-contact-item {
            display: flex;
            gap: 12px;
            margin-bottom: 16px;
            color: #CBD5E1;
            font-size: 14px;
        }

        .footer-contact-item i {
            color: var(--bl-yellow);
            margin-top: 4px;
        }

        .social-icons {
            display: flex;
            gap: 12px;
            margin-top: 20px;
        }

        .social-btn {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: rgba(255,255,255,0.1);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
        }

        .social-btn:hover {
            background: var(--bl-yellow);
            color: var(--bl-navy);
            transform: translateY(-3px);
        }

        .footer-bottom {
            background: rgba(0, 0, 0, 0.3);
            text-align: center;
            padding: 20px 0;
            margin-top: 60px;
            color: #94A3B8;
            font-size: 14px;
            border-top: 1px solid rgba(255,255,255,0.1);
        }

        /* RESPONSIVE DESIGN */
        @media (max-width: 1024px) {
            .top-header { padding: 0 30px; }
            .navbar-white { gap: 20px; flex-wrap: wrap; height: auto; padding: 10px; }
            .footer-container { grid-template-columns: 1fr 1fr; }
        }

        @media (max-width: 768px) {
            .top-header { flex-direction: column; height: auto; padding: 15px 20px; gap: 15px; }
            .header-right { width: 100%; justify-content: space-between; }
            .search-form input { width: 140px; }
            .footer-container { grid-template-columns: 1fr; }
        }
    </style>

    @yield('styles')
</head>
<body>

    <!-- STICKY HEADER -->
    <header class="bltv-header">
        <!-- TOP NAVY HEADER -->
        <div class="top-header">
            <a href="{{ route('home') }}" class="logo-container">
                <span class="brand-badge">BLTV</span>
                <span class="brand-text">BUDI LUHUR <span>TV</span></span>
            </a>

            <div class="header-right">
                <form action="{{ route('news.index') }}" method="GET" class="search-form">
                    <input type="text" name="q" placeholder="Cari berita atau program..." value="{{ request('q') }}">
                    <button type="submit" class="search-btn">
                        <i class="fa-solid => fa-magnifying-glass"></i>
                    </button>
                </form>

                <a href="{{ route('videos.index') }}" class="watch-btn">
                    <span class="live-dot"></span>
                    <span>TONTON LIVE</span>
                </a>
            </div>
        </div>

        <!-- WHITE NAVBAR -->
        <nav class="navbar-white">
            <a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
            <a href="{{ route('programs.index') }}" class="nav-link {{ request()->routeIs('programs.*') ? 'active' : '' }}">Programs</a>
            <a href="{{ route('videos.index') }}" class="nav-link {{ request()->routeIs('videos.*') ? 'active' : '' }}">Live Report</a>
            <a href="{{ route('news.index') }}" class="nav-link {{ request()->routeIs('news.*') ? 'active' : '' }}">News & Updates</a>
            <a href="{{ route('teams.index') }}" class="nav-link {{ request()->routeIs('teams.*') ? 'active' : '' }}">Teams & Crew</a>
            <a href="{{ route('contact.index') }}" class="nav-link {{ request()->routeIs('contact.*') ? 'active' : '' }}">Contact</a>
            <a href="{{ route('admin.dashboard') }}" class="nav-link" style="color: #D97706;"><i class="fa-solid fa-gauge"></i> CMS Admin</a>
        </nav>
    </header>

    <!-- ANNOUNCEMENT TICKER -->
    @if(isset($tickers) && count($tickers) > 0)
    <div class="ticker-bar">
        <div class="ticker-label">
            <i class="fa-solid fa-bullhorn"></i> INFO BLTV
        </div>
        <div class="marquee-wrapper">
            <div class="marquee-content">
                @foreach($tickers as $ticker)
                    <span>• {{ $ticker->content }} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                @endforeach
            </div>
        </div>
    </div>
    @endif

    <!-- MAIN PAGE CONTENT -->
    <main class="main-content">
        @yield('content')
    </main>

    <!-- FOOTER -->
    <footer class="bltv-footer">
        <div class="footer-container">
            <div>
                <div class="footer-logo">
                    <span style="background: var(--bl-yellow); color: var(--bl-navy); padding: 4px 10px; border-radius: 6px;">BLTV</span>
                    BUDI LUHUR TV
                </div>
                <p class="footer-desc">
                    Media Kampus & Komunitas Kreatif Universitas Budi Luhur. Menyajikan siaran informasi edukatif, jurnalistik independen, dan hiburan kreasi mahasiswa secara profesional.
                </p>
                <div class="social-icons">
                    <a href="https://youtube.com/@budiluhurtv?si=oeLDMHr50RLS-E27" target="_blank" rel="noopener noreferrer" class="social-btn" title="YouTube @budiluhurtv"><i class="fa-brands fa-youtube" style="color: #EF4444;"></i></a>
                    <a href="https://www.instagram.com/bltv_budiluhurtv?igsh=eGhrZDA0N2dham4=" target="_blank" rel="noopener noreferrer" class="social-btn" title="Instagram @bltv_budiluhurtv"><i class="fa-brands fa-instagram" style="color: #EC4899;"></i></a>
                    <a href="https://www.facebook.com/share/1ZF4nPGJr5/" target="_blank" rel="noopener noreferrer" class="social-btn" title="Facebook"><i class="fa-brands fa-facebook-f" style="color: #3B82F6;"></i></a>
                    <a href="https://www.tiktok.com/@budiluhurtv" target="_blank" rel="noopener noreferrer" class="social-btn" title="TikTok"><i class="fa-brands fa-tiktok"></i></a>
                </div>
            </div>

            <div>
                <h4 class="footer-title"><i class="fa-solid fa-compass" style="color: var(--bl-yellow); margin-right: 6px;"></i> Navigasi Cepat</h4>
                <ul class="footer-links">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('programs.index') }}">Program TV Kampus</a></li>
                    <li><a href="{{ route('videos.index') }}">Live Streaming & Video</a></li>
                    <li><a href="{{ route('news.index') }}">Berita & Artikel</a></li>
                    <li><a href="{{ route('teams.index') }}">Our Team & Crew</a></li>
                    <li><a href="{{ route('contact.index') }}">Hubungi Kami</a></li>
                </ul>
            </div>

            <div>
                <h4 class="footer-title"><i class="fa-solid fa-tv" style="color: var(--bl-yellow); margin-right: 6px;"></i> Kategori</h4>
                <ul class="footer-links">
                    <li><a href="{{ route('programs.index', ['category' => 'jurnalistik-news']) }}">Jurnalistik & News</a></li>
                    <li><a href="{{ route('programs.index', ['category' => 'creative-community']) }}">Creative Community</a></li>
                    <li><a href="{{ route('programs.index', ['category' => 'talkshow-podcast']) }}">Talkshow & Podcast</a></li>
                    <li><a href="{{ route('programs.index', ['category' => 'live-report-event']) }}">Live Report & Event</a></li>
                </ul>
            </div>

            <div>
                <h4 class="footer-title"><i class="fa-solid fa-location-dot" style="color: var(--bl-yellow); margin-right: 6px;"></i> Lokasi & Studio</h4>
                <a href="https://maps.app.goo.gl/yaFw9h4AGJN2ypiz5" target="_blank" rel="noopener noreferrer" class="footer-contact-item" style="color: inherit; text-decoration: none;">
                    <i class="fa-solid fa-map-location-dot" style="color: var(--bl-yellow); font-size: 18px; margin-top: 3px;"></i>
                    <span>
                        <strong style="color: var(--bl-yellow); display: block;">Studio BLTV UBL</strong>
                        Jl. Ciledug Raya, Petukangan Utara, Pesanggrahan, Jakarta Selatan 12260
                        <small style="color: #60A5FA; display: block; margin-top: 2px;">Buka di Google Maps <i class="fa-solid fa-arrow-up-right-from-square"></i></small>
                    </span>
                </a>
                <div class="footer-contact-item">
                    <i class="fa-solid fa-phone" style="color: #38BDF8;"></i>
                    <span>+62 21 5853753</span>
                </div>
                <div class="footer-contact-item">
                    <i class="fa-solid fa-envelope" style="color: #34D399;"></i>
                    <span>info@budiluhur.tv</span>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <p>&copy; {{ date('Y') }} <strong>Budi Luhur TV</strong>. All Rights Reserved. Universitas Budi Luhur Media Center.</p>
        </div>
    </footer>

    @yield('scripts')
</body>
</html>
