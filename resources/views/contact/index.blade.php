@extends('layouts.app')

@section('title', 'Hubungi Kami - Budi Luhur TV')

@section('content')
<div style="background: linear-gradient(135deg, rgba(0, 37, 90, 0.95), rgba(0, 18, 60, 0.9)), url('https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=1600&auto=format&fit=crop') center/cover; color: white; padding: 75px 40px; text-align: center;">
    <span style="background: var(--bl-yellow); color: var(--bl-navy); font-weight: 800; font-size: 12px; padding: 4px 14px; border-radius: 20px; text-transform: uppercase;">
        HUBUNGI KAMI
    </span>
    <h1 style="font-size: 42px; font-weight: 900; margin: 12px 0 8px;">Kontak & Lokasi Studio BLTV</h1>
    <p style="font-size: 16px; color: #CBD5E1; max-width: 600px; margin: 0 auto;">
        Hubungi redaksi, tim produksi, atau kunjungi langsung studio penyiaran Universitas Budi Luhur.
    </p>
</div>

<div style="max-width: 1280px; margin: 60px auto; padding: 0 40px;">
    @if(session('success'))
    <div style="background: #DEF7EC; border: 1px solid #31C48D; color: #03543F; padding: 18px 24px; border-radius: 12px; margin-bottom: 40px; font-weight: 600; display: flex; align-items: center; gap: 12px;">
        <i class="fa-solid fa-circle-check" style="font-size: 22px;"></i>
        <span>{{ session('success') }}</span>
    </div>
    @endif

    <div style="display: grid; grid-template-columns: 1fr 1.3fr; gap: 45px; align-items: start;">
        
        <!-- CONTACT INFORMATION & LOCATION -->
        <div style="display: flex; flex-direction: column; gap: 20px;">
            <div>
                <span style="color: #D97706; font-weight: 800; font-size: 12px; letter-spacing: 1.5px; text-transform: uppercase;">INFORMASI KONTAK</span>
                <h2 style="font-size: 30px; font-weight: 900; color: var(--bl-navy); margin: 6px 0 12px;">Studio & Media Center</h2>
                <p style="color: #64748B; font-size: 14px; line-height: 1.6;">
                    Kami terbuka untuk kerjasama liputan acara kampus, siaran langsung (Live Report), wawancara media, serta kolaborasi komunitas kreatif.
                </p>
            </div>

            <!-- CARD 1: LOKASI TEMPAT DENGAN ICON -->
            <div style="background: white; border-radius: 20px; padding: 24px; border: 1px solid var(--bl-border); box-shadow: 0 4px 15px rgba(0,0,0,0.04); display: flex; gap: 16px;">
                <div style="width: 48px; height: 48px; border-radius: 14px; background: var(--bl-ice-blue); color: var(--bl-navy); display: flex; align-items: center; justify-content: center; font-size: 20px; flex-shrink: 0;">
                    <i class="fa-solid fa-map-location-dot"></i>
                </div>
                <div>
                    <h4 style="font-size: 16px; font-weight: 800; color: var(--bl-navy); margin-bottom: 4px;">Lokasi Studio BLTV</h4>
                    <p style="font-size: 13px; color: #475569; line-height: 1.5; margin-bottom: 8px;">
                        Jl. Ciledug Raya, RT 10/RW 2, Petukangan Utara, Kec. Pesanggrahan, Kota Jakarta Selatan, DKI Jakarta 12260
                    </p>
                    <a href="https://maps.app.goo.gl/yaFw9h4AGJN2ypiz5" target="_blank" rel="noopener noreferrer" style="color: #004FC2; font-weight: 800; font-size: 13px; text-decoration: none; display: inline-flex; align-items: center; gap: 4px;">
                        <i class="fa-solid fa-location-arrow"></i> Petunjuk Arah Google Maps
                    </a>
                </div>
            </div>

            <!-- CARD 2: TELEPON -->
            <div style="background: white; border-radius: 20px; padding: 24px; border: 1px solid var(--bl-border); box-shadow: 0 4px 15px rgba(0,0,0,0.04); display: flex; gap: 16px;">
                <div style="width: 48px; height: 48px; border-radius: 14px; background: #FEF3C7; color: #D97706; display: flex; align-items: center; justify-content: center; font-size: 20px; flex-shrink: 0;">
                    <i class="fa-solid fa-phone"></i>
                </div>
                <div>
                    <h4 style="font-size: 16px; font-weight: 800; color: var(--bl-navy); margin-bottom: 4px;">Telepon & Redaksi</h4>
                    <p style="font-size: 13px; color: #475569; margin-bottom: 4px;">Kantor Sekretariat & Studio Penyiaran</p>
                    <span style="font-weight: 800; color: #1E293B; font-size: 15px;">+62 21 5853753</span>
                </div>
            </div>

            <!-- CARD 3: EMAIL -->
            <div style="background: white; border-radius: 20px; padding: 24px; border: 1px solid var(--bl-border); box-shadow: 0 4px 15px rgba(0,0,0,0.04); display: flex; gap: 16px;">
                <div style="width: 48px; height: 48px; border-radius: 14px; background: #D1FAE5; color: #059669; display: flex; align-items: center; justify-content: center; font-size: 20px; flex-shrink: 0;">
                    <i class="fa-solid fa-envelope"></i>
                </div>
                <div>
                    <h4 style="font-size: 16px; font-weight: 800; color: var(--bl-navy); margin-bottom: 4px;">Email Resmi</h4>
                    <p style="font-size: 13px; color: #475569; margin-bottom: 4px;">Kirim rilis berita & kerjasama media</p>
                    <span style="font-weight: 800; color: #1E293B; font-size: 15px;">info@budiluhur.tv</span>
                </div>
            </div>

            <!-- CARD 4: SOCIAL MEDIA SYNC -->
            <div style="background: var(--bl-navy); color: white; border-radius: 20px; padding: 24px; box-shadow: 0 10px 25px rgba(0, 37, 90, 0.2);">
                <h4 style="font-size: 15px; font-weight: 800; color: var(--bl-yellow); text-transform: uppercase; margin-bottom: 8px; display: flex; align-items: center; gap: 8px;">
                    <i class="fa-solid fa-share-nodes"></i> Official Social Media
                </h4>
                <p style="font-size: 12px; color: #CBD5E1; margin-bottom: 16px;">
                    Ikuti seluruh channel resmi Budi Luhur TV untuk update tayangan dan liputan harian:
                </p>
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 12px;">
                    <a href="https://youtube.com/@budiluhurtv?si=oeLDMHr50RLS-E27" target="_blank" rel="noopener noreferrer" style="display: flex; align-items: center; gap: 10px; background: rgba(255,255,255,0.1); padding: 10px; border-radius: 12px; color: white; text-decoration: none; font-size: 13px; font-weight: 700;">
                        <i class="fa-brands fa-youtube" style="font-size: 18px; color: #EF4444;"></i> YouTube
                    </a>
                    <a href="https://www.instagram.com/bltv_budiluhurtv?igsh=eGhrZDA0N2dham4=" target="_blank" rel="noopener noreferrer" style="display: flex; align-items: center; gap: 10px; background: rgba(255,255,255,0.1); padding: 10px; border-radius: 12px; color: white; text-decoration: none; font-size: 13px; font-weight: 700;">
                        <i class="fa-brands fa-instagram" style="font-size: 18px; color: #EC4899;"></i> Instagram
                    </a>
                    <a href="https://www.facebook.com/share/1ZF4nPGJr5/" target="_blank" rel="noopener noreferrer" style="display: flex; align-items: center; gap: 10px; background: rgba(255,255,255,0.1); padding: 10px; border-radius: 12px; color: white; text-decoration: none; font-size: 13px; font-weight: 700;">
                        <i class="fa-brands fa-facebook-f" style="font-size: 18px; color: #3B82F6;"></i> Facebook
                    </a>
                    <a href="https://www.tiktok.com/@budiluhurtv" target="_blank" rel="noopener noreferrer" style="display: flex; align-items: center; gap: 10px; background: rgba(255,255,255,0.1); padding: 10px; border-radius: 12px; color: white; text-decoration: none; font-size: 13px; font-weight: 700;">
                        <i class="fa-brands fa-tiktok" style="font-size: 18px; color: #FFE600;"></i> TikTok
                    </a>
                </div>
            </div>

        </div>

        <!-- FORM & MAP -->
        <div style="background: white; border-radius: 24px; padding: 40px; border: 1px solid var(--bl-border); box-shadow: 0 10px 30px rgba(0,0,0,0.06);">
            <div style="margin-bottom: 24px;">
                <span style="background: var(--bl-yellow); color: var(--bl-navy); font-weight: 800; font-size: 12px; padding: 4px 12px; border-radius: 20px; text-transform: uppercase;">
                    FORMULIR PESAN
                </span>
                <h3 style="font-size: 24px; font-weight: 900; color: var(--bl-navy); margin-top: 8px;">Kirim Pesan ke Redaksi</h3>
            </div>

            <form action="{{ route('contact.send') }}" method="POST">
                @csrf
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 16px; margin-bottom: 16px;">
                    <div>
                        <label style="display: block; font-size: 13px; font-weight: 700; color: var(--bl-navy); margin-bottom: 6px;">Nama Lengkap</label>
                        <input type="text" name="name" required placeholder="Nama Anda" style="width: 100%; padding: 12px 16px; border-radius: 10px; border: 1px solid #CBD5E1; outline: none; font-size: 14px;">
                    </div>
                    <div>
                        <label style="display: block; font-size: 13px; font-weight: 700; color: var(--bl-navy); margin-bottom: 6px;">Email</label>
                        <input type="email" name="email" required placeholder="nama@email.com" style="width: 100%; padding: 12px 16px; border-radius: 10px; border: 1px solid #CBD5E1; outline: none; font-size: 14px;">
                    </div>
                </div>

                <div style="margin-bottom: 16px;">
                    <label style="display: block; font-size: 13px; font-weight: 700; color: var(--bl-navy); margin-bottom: 6px;">Subjek / Topik Kerjasama</label>
                    <input type="text" name="subject" required placeholder="Permohonan Liputan / Kerjasama" style="width: 100%; padding: 12px 16px; border-radius: 10px; border: 1px solid #CBD5E1; outline: none; font-size: 14px;">
                </div>

                <div style="margin-bottom: 24px;">
                    <label style="display: block; font-size: 13px; font-weight: 700; color: var(--bl-navy); margin-bottom: 6px;">Isi Pesan</label>
                    <textarea name="message" rows="5" required placeholder="Tuliskan pesan Anda..." style="width: 100%; padding: 12px 16px; border-radius: 10px; border: 1px solid #CBD5E1; outline: none; font-size: 14px; font-family: inherit;"></textarea>
                </div>

                <button type="submit" style="width: 100%; background: var(--bl-navy); color: var(--bl-yellow); border: none; font-weight: 800; font-size: 16px; padding: 14px; border-radius: 12px; cursor: pointer; box-shadow: 0 4px 15px rgba(0, 37, 90, 0.2);">
                    Kirim Pesan <i class="fa-solid fa-paper-plane"></i>
                </button>
            </form>

            <div style="margin-top: 30px; padding-top: 24px; border-top: 1px solid #E2E8F0;">
                <h4 style="font-size: 14px; font-weight: 800; color: var(--bl-navy); margin-bottom: 12px; display: flex; align-items: center; gap: 8px;">
                    <i class="fa-solid fa-map-pin" style="color: #EF4444;"></i> Peta Lokasi Kampus Budi Luhur Jakarta
                </h4>
                <div style="width: 100%; height: 220px; border-radius: 16px; overflow: hidden; border: 1px solid #CBD5E1;">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.1956637372704!2d106.7524178!3d-6.2366223!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f0e2d3129841%3A0xbefeeaebe05f5647!2sUniversitas%20Budi%20Luhur!5e0!3m2!1sen!2sid!4v1700000000000!5m2!1sen!2sid"
                        width="100%"
                        height="100%"
                        style="border: 0;"
                        allowfullscreen
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"
                    ></iframe>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
