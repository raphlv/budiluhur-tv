@extends('layouts.app')

@section('title', 'Kelola Ticker Pengumuman - Admin BLTV')

@section('content')
<div style="background: var(--bl-navy); color: white; padding: 40px;">
    <div style="max-width: 1280px; margin: 0 auto;">
        <h1 style="font-size: 32px; font-weight: 900;">Kelola Running Text Ticker</h1>
        <p style="color: #CBD5E1;">Atur teks pengumuman berjalan yang tampil di header website</p>
    </div>
</div>

<div style="max-width: 1280px; margin: 40px auto; padding: 0 40px;">
    @if(session('success'))
    <div style="background: #DEF7EC; border: 1px solid #31C48D; color: #03543F; padding: 14px 20px; border-radius: 10px; margin-bottom: 30px; font-weight: 600;">
        {{ session('success') }}
    </div>
    @endif

    <div style="display: grid; grid-template-columns: 1fr 2fr; gap: 30px;">
        <!-- FORM TAMBAH TICKER -->
        <div style="background: white; border-radius: 16px; padding: 30px; border: 1px solid var(--bl-border);">
            <h3 style="font-size: 20px; font-weight: 800; color: var(--bl-navy); margin-bottom: 20px;">Tambah Ticker Pengumuman</h3>

            <form action="{{ route('admin.tickers.store') }}" method="POST">
                @csrf
                <div style="margin-bottom: 16px;">
                    <label style="display: block; font-weight: 700; font-size: 13px; color: var(--bl-navy); margin-bottom: 6px;">Teks Pengumuman (Running Text)</label>
                    <textarea name="content" rows="4" required placeholder="Contoh: OPEN RECRUITMENT CREW BLTV 2026 TELAH DIBUKA!..." style="width: 100%; padding: 10px 14px; border-radius: 8px; border: 1px solid #CBD5E1; outline: none;"></textarea>
                </div>

                <div style="margin-bottom: 20px;">
                    <label style="display: block; font-weight: 700; font-size: 13px; color: var(--bl-navy); margin-bottom: 6px;">URL Link (Opsional)</label>
                    <input type="text" name="link_url" placeholder="/contact atau https://..." style="width: 100%; padding: 10px 14px; border-radius: 8px; border: 1px solid #CBD5E1; outline: none;">
                </div>

                <button type="submit" style="width: 100%; background: var(--bl-navy); color: var(--bl-yellow); border: none; font-weight: 800; padding: 12px; border-radius: 8px; cursor: pointer;">
                    Tambah Ticker <i class="fa-solid fa-plus-circle"></i>
                </button>
            </form>
        </div>

        <!-- DAFTAR TICKER -->
        <div style="background: white; border-radius: 16px; padding: 30px; border: 1px solid var(--bl-border);">
            <h3 style="font-size: 20px; font-weight: 800; color: var(--bl-navy); margin-bottom: 20px;">Ticker Aktif</h3>

            <ul style="list-style: none;">
                @forelse($tickers as $ticker)
                <li style="padding: 16px; border: 1px solid #E2E8F0; border-radius: 12px; margin-bottom: 12px; display: flex; justify-content: space-between; align-items: center; background: #F8FAFC;">
                    <div>
                        <p style="font-weight: 700; color: var(--bl-navy); font-size: 14px; margin-bottom: 4px;">{{ $ticker->content }}</p>
                        @if($ticker->link_url)
                        <span style="font-size: 12px; color: #004FC2;"><i class="fa-solid fa-link"></i> {{ $ticker->link_url }}</span>
                        @endif
                    </div>
                    <form action="{{ route('admin.tickers.delete', $ticker->id) }}" method="POST" onsubmit="return confirm('Hapus ticker ini?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" style="background: #FEE2E2; color: #DC2626; border: none; padding: 8px 14px; border-radius: 8px; font-size: 13px; font-weight: 700; cursor: pointer;">
                            <i class="fa-solid fa-trash"></i> Hapus
                        </button>
                    </form>
                </li>
                @empty
                <p style="color: #94A3B8;">Belum ada ticker pengumuman.</p>
                @endforelse
            </ul>
        </div>
    </div>
</div>
@endsection
