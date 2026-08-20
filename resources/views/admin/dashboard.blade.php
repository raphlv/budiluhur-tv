@extends('layouts.app')

@section('title', 'Admin Dashboard - Budi Luhur TV CMS')

@section('content')
<div style="background: var(--bl-navy); color: white; padding: 40px;">
    <div style="max-width: 1280px; margin: 0 auto; display: flex; justify-content: space-between; align-items: center;">
        <div>
            <h1 style="font-size: 32px; font-weight: 900;">Admin CMS Dashboard</h1>
            <p style="color: #CBD5E1;">Pengelolaan Konten Media & Data Siaran Budiluhur TV</p>
        </div>
        <div style="display: flex; gap: 12px;">
            <a href="{{ route('admin.news.index') }}" style="background: var(--bl-yellow); color: var(--bl-navy); font-weight: 800; padding: 10px 20px; border-radius: 10px; font-size: 14px;">
                <i class="fa-solid fa-newspaper"></i> Kelola Berita
            </a>
            <a href="{{ route('admin.tickers.index') }}" style="background: white; color: var(--bl-navy); font-weight: 800; padding: 10px 20px; border-radius: 10px; font-size: 14px;">
                <i class="fa-solid fa-bullhorn"></i> Kelola Ticker
            </a>
        </div>
    </div>
</div>

<div style="max-width: 1280px; margin: 40px auto; padding: 0 40px;">
    <!-- METRICS CARDS -->
    <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 24px; margin-bottom: 40px;">
        <div style="background: white; padding: 24px; border-radius: 16px; border: 1px solid var(--bl-border); box-shadow: 0 4px 15px rgba(0,0,0,0.03);">
            <span style="color: #64748B; font-size: 14px; font-weight: 600;">Total Artikel Berita</span>
            <h2 style="font-size: 36px; font-weight: 900; color: var(--bl-navy); margin-top: 8px;">{{ $totalNews }}</h2>
        </div>
        <div style="background: white; padding: 24px; border-radius: 16px; border: 1px solid var(--bl-border); box-shadow: 0 4px 15px rgba(0,0,0,0.03);">
            <span style="color: #64748B; font-size: 14px; font-weight: 600;">Total Program TV</span>
            <h2 style="font-size: 36px; font-weight: 900; color: var(--bl-navy); margin-top: 8px;">{{ $totalPrograms }}</h2>
        </div>
        <div style="background: white; padding: 24px; border-radius: 16px; border: 1px solid var(--bl-border); box-shadow: 0 4px 15px rgba(0,0,0,0.03);">
            <span style="color: #64748B; font-size: 14px; font-weight: 600;">Total Video Broadcast</span>
            <h2 style="font-size: 36px; font-weight: 900; color: var(--bl-navy); margin-top: 8px;">{{ $totalVideos }}</h2>
        </div>
        <div style="background: white; padding: 24px; border-radius: 16px; border: 1px solid var(--bl-border); box-shadow: 0 4px 15px rgba(0,0,0,0.03);">
            <span style="color: #64748B; font-size: 14px; font-weight: 600;">Pendaftar Crew New</span>
            <h2 style="font-size: 36px; font-weight: 900; color: #D97706; margin-top: 8px;">{{ $totalCrew }}</h2>
        </div>
    </div>

    <div style="display: grid; grid-template-columns: 1.2fr 1fr; gap: 30px;">
        <!-- RECENT CREW REGISTRATIONS TABLE -->
        <div style="background: white; border-radius: 16px; padding: 24px; border: 1px solid var(--bl-border);">
            <h3 style="font-size: 18px; font-weight: 800; color: var(--bl-navy); margin-bottom: 20px;">
                <i class="fa-solid fa-users"></i> Pendaftaran Crew Terbaru
            </h3>

            <table style="width: 100%; border-collapse: collapse; text-align: left; font-size: 14px;">
                <thead>
                    <tr style="border-bottom: 2px solid #E2E8F0; color: #64748B;">
                        <th style="padding: 10px;">Nama</th>
                        <th style="padding: 10px;">NIM</th>
                        <th style="padding: 10px;">Divisi</th>
                        <th style="padding: 10px;">WhatsApp</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($recentCrew as $crew)
                    <tr style="border-bottom: 1px solid #F1F5F9;">
                        <td style="padding: 12px 10px; font-weight: 700; color: var(--bl-navy);">{{ $crew->full_name }}</td>
                        <td style="padding: 12px 10px;">{{ $crew->nim }}</td>
                        <td style="padding: 12px 10px;">
                            <span style="background: var(--bl-ice-blue); color: var(--bl-navy); padding: 2px 8px; border-radius: 6px; font-size: 12px; font-weight: 700;">
                                {{ $crew->division_interest }}
                            </span>
                        </td>
                        <td style="padding: 12px 10px; color: #004FC2;">{{ $crew->whatsapp }}</td>
                    </tr>
                    @empty
                    <tr><td colspan="4" style="padding: 20px; text-align: center; color: #94A3B8;">Belum ada pendaftar crew.</td></tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <!-- RECENT NEWS TABLE -->
        <div style="background: white; border-radius: 16px; padding: 24px; border: 1px solid var(--bl-border);">
            <h3 style="font-size: 18px; font-weight: 800; color: var(--bl-navy); margin-bottom: 20px;">
                <i class="fa-solid fa-newspaper"></i> Berita Terakhir
            </h3>

            <ul style="list-style: none;">
                @foreach($news as $item)
                <li style="padding: 12px 0; border-bottom: 1px solid #F1F5F9; display: flex; justify-content: space-between; align-items: center;">
                    <div>
                        <a href="{{ route('news.show', $item->slug) }}" style="font-weight: 700; color: var(--bl-navy); font-size: 14px; display: block;">{{ Str::limit($item->title, 40) }}</a>
                        <span style="font-size: 12px; color: #94A3B8;">{{ $item->published_at ? $item->published_at->format('d M Y') : 'Draft' }}</span>
                    </div>
                    <span style="font-size: 12px; color: #64748B;"><i class="fa-solid fa-eye"></i> {{ number_format($item->views) }}</span>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection
