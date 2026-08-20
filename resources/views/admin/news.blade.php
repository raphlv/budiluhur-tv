@extends('layouts.app')

@section('title', 'Kelola Berita - Admin BLTV')

@section('content')
<div style="background: var(--bl-navy); color: white; padding: 40px;">
    <div style="max-width: 1280px; margin: 0 auto;">
        <h1 style="font-size: 32px; font-weight: 900;">Kelola Artikel Berita</h1>
        <p style="color: #CBD5E1;">Tambah dan kelola berita portal Budiluhur TV</p>
    </div>
</div>

<div style="max-width: 1280px; margin: 40px auto; padding: 0 40px;">
    @if(session('success'))
    <div style="background: #DEF7EC; border: 1px solid #31C48D; color: #03543F; padding: 14px 20px; border-radius: 10px; margin-bottom: 30px; font-weight: 600;">
        {{ session('success') }}
    </div>
    @endif

    <div style="display: grid; grid-template-columns: 1fr 2fr; gap: 30px;">
        <!-- FORM TAMBAH BERITA -->
        <div style="background: white; border-radius: 16px; padding: 30px; border: 1px solid var(--bl-border);">
            <h3 style="font-size: 20px; font-weight: 800; color: var(--bl-navy); margin-bottom: 20px;">Tambah Berita Baru</h3>

            <form action="{{ route('admin.news.store') }}" method="POST">
                @csrf
                <div style="margin-bottom: 16px;">
                    <label style="display: block; font-weight: 700; font-size: 13px; color: var(--bl-navy); margin-bottom: 6px;">Judul Berita</label>
                    <input type="text" name="title" required placeholder="Judul berita..." style="width: 100%; padding: 10px 14px; border-radius: 8px; border: 1px solid #CBD5E1; outline: none;">
                </div>

                <div style="margin-bottom: 16px;">
                    <label style="display: block; font-weight: 700; font-size: 13px; color: var(--bl-navy); margin-bottom: 6px;">Kategori</label>
                    <select name="category_id" required style="width: 100%; padding: 10px 14px; border-radius: 8px; border: 1px solid #CBD5E1; outline: none; background: white;">
                        @foreach($categories as $cat)
                            <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div style="margin-bottom: 16px;">
                    <label style="display: block; font-weight: 700; font-size: 13px; color: var(--bl-navy); margin-bottom: 6px;">Penulis / Author</label>
                    <input type="text" name="author_name" value="Tim Redaksi BLTV" required style="width: 100%; padding: 10px 14px; border-radius: 8px; border: 1px solid #CBD5E1; outline: none;">
                </div>

                <div style="margin-bottom: 16px;">
                    <label style="display: block; font-weight: 700; font-size: 13px; color: var(--bl-navy); margin-bottom: 6px;">URL Gambar Thumbnail</label>
                    <input type="text" name="image_url" placeholder="https://images.unsplash.com/..." style="width: 100%; padding: 10px 14px; border-radius: 8px; border: 1px solid #CBD5E1; outline: none;">
                </div>

                <div style="margin-bottom: 16px;">
                    <label style="display: block; font-weight: 700; font-size: 13px; color: var(--bl-navy); margin-bottom: 6px;">Ringkasan Singkat</label>
                    <textarea name="summary" rows="3" required placeholder="Ringkasan artikel..." style="width: 100%; padding: 10px 14px; border-radius: 8px; border: 1px solid #CBD5E1; outline: none;"></textarea>
                </div>

                <div style="margin-bottom: 16px;">
                    <label style="display: block; font-weight: 700; font-size: 13px; color: var(--bl-navy); margin-bottom: 6px;">Konten Berita Lengkap</label>
                    <textarea name="content" rows="6" required placeholder="Tuliskan berita lengkap di sini..." style="width: 100%; padding: 10px 14px; border-radius: 8px; border: 1px solid #CBD5E1; outline: none;"></textarea>
                </div>

                <div style="margin-bottom: 20px;">
                    <label style="display: flex; align-items: center; gap: 8px; font-weight: 600; font-size: 14px; cursor: pointer;">
                        <input type="checkbox" name="is_featured" value="1"> Berita Unggulan (Featured)
                    </label>
                </div>

                <button type="submit" style="width: 100%; background: var(--bl-navy); color: var(--bl-yellow); border: none; font-weight: 800; padding: 12px; border-radius: 8px; cursor: pointer;">
                    Publikasikan Berita <i class="fa-solid fa-upload"></i>
                </button>
            </form>
        </div>

        <!-- DAFTAR BERITA -->
        <div style="background: white; border-radius: 16px; padding: 30px; border: 1px solid var(--bl-border);">
            <h3 style="font-size: 20px; font-weight: 800; color: var(--bl-navy); margin-bottom: 20px;">Daftar Artikel</h3>

            <table style="width: 100%; border-collapse: collapse; text-align: left; font-size: 14px;">
                <thead>
                    <tr style="border-bottom: 2px solid #E2E8F0; color: #64748B;">
                        <th style="padding: 10px;">Judul</th>
                        <th style="padding: 10px;">Kategori</th>
                        <th style="padding: 10px;">Penulis</th>
                        <th style="padding: 10px;">Views</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($newsList as $item)
                    <tr style="border-bottom: 1px solid #F1F5F9;">
                        <td style="padding: 12px 10px; font-weight: 700; color: var(--bl-navy);">
                            <a href="{{ route('news.show', $item->slug) }}" target="_blank">{{ Str::limit($item->title, 35) }}</a>
                        </td>
                        <td style="padding: 12px 10px;">{{ $item->category->name }}</td>
                        <td style="padding: 12px 10px;">{{ $item->author_name }}</td>
                        <td style="padding: 12px 10px;">{{ number_format($item->views) }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            <div style="margin-top: 20px;">
                {{ $newsList->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
