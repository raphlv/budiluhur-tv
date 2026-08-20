@extends('layouts.app')

@section('title', 'Contact Us - Budi Luhur TV')

@section('content')
<div style="background: var(--bl-navy); color: white; padding: 60px 40px; text-align: center;">
    <h1 style="font-size: 38px; font-weight: 900; margin-bottom: 12px;">Kontak Media Center</h1>
    <p style="color: #CBD5E1; max-width: 650px; margin: 0 auto; font-size: 16px;">
        Hubungi tim siaran & redaksi Budi Luhur TV untuk kemitraan media, konfirmasi event, dan liputan berita kampus.
    </p>
</div>

<div style="max-width: 1280px; margin: 60px auto; padding: 0 40px;">

    @if(session('success'))
    <div style="background: #DEF7EC; border: 1px solid #31C48D; color: #03543F; padding: 18px 24px; border-radius: 12px; margin-bottom: 40px; font-weight: 600; display: flex; align-items: center; gap: 12px;">
        <i class="fa-solid fa-circle-check" style="font-size: 22px;"></i>
        <span>{{ session('success') }}</span>
    </div>
    @endif

    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 40px;">
        <!-- INFORMASI KONTAK & MAPS -->
        <div>
            <div style="background: white; border-radius: 20px; padding: 40px; box-shadow: 0 6px 20px rgba(0,0,0,0.05); border: 1px solid var(--bl-border); margin-bottom: 30px;">
                <h3 style="font-size: 22px; font-weight: 800; color: var(--bl-navy); margin-bottom: 20px;">BLTV Media Center</h3>
                
                <div style="display: flex; gap: 16px; margin-bottom: 20px; color: #475569;">
                    <i class="fa-solid fa-location-dot" style="font-size: 22px; color: var(--bl-navy); margin-top: 2px;"></i>
                    <div>
                        <strong style="color: var(--bl-navy); display: block;">Alamat Studio & Office:</strong>
                        <span>Jl. Ciledug Raya, RT.10/RW.2, Petukangan Utara, Kec. Pesanggrahan, Kota Jakarta Selatan, DKI Jakarta 12260</span>
                    </div>
                </div>

                <div style="display: flex; gap: 16px; margin-bottom: 20px; color: #475569;">
                    <i class="fa-solid fa-phone" style="font-size: 20px; color: var(--bl-navy); margin-top: 2px;"></i>
                    <div>
                        <strong style="color: var(--bl-navy); display: block;">Telepon Utama & WA:</strong>
                        <span>+62 21 5853753 / +62 812 3456 7890</span>
                    </div>
                </div>

                <div style="display: flex; gap: 16px; margin-bottom: 20px; color: #475569;">
                    <i class="fa-solid fa-envelope" style="font-size: 20px; color: var(--bl-navy); margin-top: 2px;"></i>
                    <div>
                        <strong style="color: var(--bl-navy); display: block;">Email Redaksi & Public Relations:</strong>
                        <span>info@budiluhur.tv / pr@budiluhur.tv</span>
                    </div>
                </div>
            </div>

            <!-- GOOGLE MAP EMBED -->
            <div style="background: white; border-radius: 20px; overflow: hidden; box-shadow: 0 6px 20px rgba(0,0,0,0.05); border: 1px solid var(--bl-border); height: 260px;">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.2415779344445!2d106.75022917578051!3d-6.236622293751522!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f0e1c251221b%3A0xa6450630b91129b8!2sUniversitas%20Budi%20Luhur!5e0!3m2!1sid!2sid!4v1700000000000!5m2!1sid!2sid" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>

        <!-- FORM KIRIM PESAN -->
        <div style="background: white; border-radius: 20px; padding: 40px; box-shadow: 0 6px 20px rgba(0,0,0,0.05); border: 1px solid var(--bl-border);">
            <h3 style="font-size: 22px; font-weight: 800; color: var(--bl-navy); margin-bottom: 10px;">Kirim Pesan ke Redaksi</h3>
            <p style="color: #64748B; font-size: 14px; margin-bottom: 24px;">Silakan tuliskan pertanyaan atau tawaran kerjasama media Anda</p>

            <form action="{{ route('contact.send') }}" method="POST">
                @csrf
                <div style="margin-bottom: 18px;">
                    <label style="display: block; font-weight: 700; font-size: 14px; color: var(--bl-navy); margin-bottom: 6px;">Nama Anda</label>
                    <input type="text" name="name" required placeholder="Masukkan nama lengkap" style="width: 100%; padding: 12px 16px; border-radius: 10px; border: 1px solid #CBD5E1; outline: none;">
                </div>

                <div style="margin-bottom: 18px;">
                    <label style="display: block; font-weight: 700; font-size: 14px; color: var(--bl-navy); margin-bottom: 6px;">Alamat Email</label>
                    <input type="email" name="email" required placeholder="email@domain.com" style="width: 100%; padding: 12px 16px; border-radius: 10px; border: 1px solid #CBD5E1; outline: none;">
                </div>

                <div style="margin-bottom: 18px;">
                    <label style="display: block; font-weight: 700; font-size: 14px; color: var(--bl-navy); margin-bottom: 6px;">Subjek / Topik</label>
                    <input type="text" name="subject" required placeholder="Contoh: Permohonan Liputan Event" style="width: 100%; padding: 12px 16px; border-radius: 10px; border: 1px solid #CBD5E1; outline: none;">
                </div>

                <div style="margin-bottom: 24px;">
                    <label style="display: block; font-weight: 700; font-size: 14px; color: var(--bl-navy); margin-bottom: 6px;">Pesan Anda</label>
                    <textarea name="message" rows="5" required placeholder="Tuliskan isi pesan secara rinci..." style="width: 100%; padding: 12px 16px; border-radius: 10px; border: 1px solid #CBD5E1; outline: none;"></textarea>
                </div>

                <button type="submit" style="width: 100%; background: var(--bl-navy); color: var(--bl-yellow); border: none; font-weight: 800; font-size: 16px; padding: 14px; border-radius: 10px; cursor: pointer;">
                    Kirim Pesan <i class="fa-solid fa-paper-plane"></i>
                </button>
            </form>
        </div>
    </div>
</div>
@endsection
