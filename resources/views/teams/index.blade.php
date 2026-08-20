@extends('layouts.app')

@section('title', 'Teams - Budi Luhur TV - Media Kampus dan Komunitas Kreatif')

@section('styles')
<style>
    .teams-hero {
        background: linear-gradient(135deg, rgba(0, 24, 60, 0.92) 0%, rgba(0, 37, 90, 0.9) 100%), 
                    url('https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=1600&auto=format&fit=crop') center/cover;
        color: white;
        padding: 90px 40px;
    }

    .team-card {
        background: white;
        border-radius: 24px;
        overflow: hidden;
        box-shadow: 0 6px 20px rgba(0,0,0,0.05);
        border: 1px solid var(--bl-border);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        text-align: center;
    }

    .team-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 15px 35px rgba(0, 37, 90, 0.12);
    }

    .team-avatar-wrapper {
        position: relative;
        height: 280px;
        overflow: hidden;
        background: #F1F5F9;
    }

    .team-avatar {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }

    .team-card:hover .team-avatar {
        transform: scale(1.05);
    }

    .team-role-badge {
        position: absolute;
        bottom: 12px;
        left: 50%;
        transform: translateX(-50%);
        background: var(--bl-yellow);
        color: var(--bl-navy);
        font-weight: 900;
        font-size: 12px;
        padding: 4px 16px;
        border-radius: 20px;
        white-space: nowrap;
        box-shadow: 0 4px 12px rgba(0,0,0,0.15);
    }

    .team-table {
        width: 100%;
        border-collapse: collapse;
        text-align: left;
        font-size: 14px;
    }

    .team-table th {
        padding: 14px;
        border-bottom: 2px solid #E2E8F0;
        color: var(--bl-navy);
        font-weight: 800;
        text-transform: uppercase;
        font-size: 12px;
    }

    .team-table td {
        padding: 14px;
        border-bottom: 1px solid #F1F5F9;
    }

    .team-table tr:hover {
        background: #F8FAFC;
    }

    .avatar-sm {
        width: 48px;
        height: 48px;
        border-radius: 50%;
        object-fit: cover;
        border: 2px solid #E2E8F0;
    }
</style>
@endsection

@section('content')

<!-- HERO SECTION -->
<div class="teams-hero">
    <div style="max-width: 1280px; margin: 0 auto;">
        <span style="color: var(--bl-yellow); font-weight: 800; font-size: 13px; letter-spacing: 1.5px; text-transform: uppercase;">
            Budi Luhur TV
        </span>
        <h1 style="font-size: 56px; font-weight: 900; margin: 8px 0 12px; letter-spacing: -1px;">OUR TEAM</h1>
        <p style="font-size: 17px; color: #CBD5E1; max-width: 650px; line-height: 1.7;">
            Tim Budi Luhur TV berperan dalam produksi berita, hiburan, dokumentasi, publikasi, serta pengembangan konten audiovisual kampus.
        </p>
    </div>
</div>

<div style="max-width: 1280px; margin: 60px auto; padding: 0 40px;">

    @if(session('success'))
    <div style="background: #DEF7EC; border: 1px solid #31C48D; color: #03543F; padding: 18px 24px; border-radius: 12px; margin-bottom: 40px; font-weight: 600; display: flex; align-items: center; gap: 12px;">
        <i class="fa-solid fa-circle-check" style="font-size: 22px;"></i>
        <span>{{ session('success') }}</span>
    </div>
    @endif

    <!-- 1. MANAGEMENT & DIRECTION -->
    <section style="margin-bottom: 70px;">
        <div style="text-align: center; margin-bottom: 40px;">
            <span style="color: #D97706; font-weight: 800; font-size: 12px; letter-spacing: 1.5px; uppercase">STRUCTURE</span>
            <h2 style="font-size: 32px; font-weight: 900; color: var(--bl-navy); margin-top: 4px;">Management & Direction</h2>
        </div>

        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 30px;">
            <div class="team-card">
                <div class="team-avatar-wrapper">
                    <img src="https://budiluhur.tv/images/0/26342409/ZakariaSatrioDarmawanM.I.Kom.-4Px9NgQvkhTFxvHNkJ9Qkw.png" alt="Zakaria Satrio Darmawan" class="team-avatar">
                    <span class="team-role-badge">Manager BLTV</span>
                </div>
                <div style="padding: 24px;">
                    <h3 style="font-size: 18px; font-weight: 900; color: var(--bl-navy); margin-bottom: 6px;">Zakaria Satrio Darmawan, M.I.Kom.</h3>
                    <span style="background: var(--bl-ice-blue); color: var(--bl-navy); font-weight: 800; font-size: 12px; padding: 3px 10px; border-radius: 6px;">NIP 120084 • FKDK</span>
                </div>
            </div>

            <div class="team-card">
                <div class="team-avatar-wrapper">
                    <img src="https://budiluhur.tv/images/0/26332864/JulaihaProboAnggrainiM.Kom.-uv6FVLeRK6n6OUwU1irs3Q.png" alt="Julaiha Probo Anggraini" class="team-avatar">
                    <span class="team-role-badge">Co-Manager BLTV</span>
                </div>
                <div style="padding: 24px;">
                    <h3 style="font-size: 18px; font-weight: 900; color: var(--bl-navy); margin-bottom: 6px;">Julaiha Probo Anggraini, M.Kom.</h3>
                    <span style="background: var(--bl-ice-blue); color: var(--bl-navy); font-weight: 800; font-size: 12px; padding: 3px 10px; border-radius: 6px;">NIP 190061 • FKDK</span>
                </div>
            </div>

            <div class="team-card">
                <div class="team-avatar-wrapper">
                    <img src="https://budiluhur.tv/images/0/26342413/HaronasKutantoM.I.Kom.-EWYDhaSF5p3aZ_3C542QzQ.png" alt="Haronas Kutanto" class="team-avatar">
                    <span class="team-role-badge">Pengarah BLTV</span>
                </div>
                <div style="padding: 24px;">
                    <h3 style="font-size: 18px; font-weight: 900; color: var(--bl-navy); margin-bottom: 6px;">Haronas Kutanto, S.P.T., M.I.Kom.</h3>
                    <span style="background: var(--bl-ice-blue); color: var(--bl-navy); font-weight: 800; font-size: 12px; padding: 3px 10px; border-radius: 6px;">NIP 130062 • FKDK</span>
                </div>
            </div>
        </div>
    </section>

    <!-- 2. PRODUCER -->
    <section style="margin-bottom: 70px;">
        <div style="text-align: center; margin-bottom: 40px;">
            <span style="color: #D97706; font-weight: 800; font-size: 12px; letter-spacing: 1.5px; uppercase">PRODUCTION LEAD</span>
            <h2 style="font-size: 32px; font-weight: 900; color: var(--bl-navy); margin-top: 4px;">Producer</h2>
        </div>

        <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 30px; max-width: 900px; margin: 0 auto;">
            <div class="team-card">
                <div class="team-avatar-wrapper" style="height: 300px;">
                    <img src="https://budiluhur.tv/images/0/26332861/AirinNurAzizah-2eCNVojbManyaTUSQt2HUg.jpg" alt="Airin Nur Azizah" class="team-avatar">
                    <span class="team-role-badge">News Producer</span>
                </div>
                <div style="padding: 24px;">
                    <h3 style="font-size: 20px; font-weight: 900; color: var(--bl-navy); margin-bottom: 6px;">Airin Nur Azizah</h3>
                    <span style="background: var(--bl-ice-blue); color: var(--bl-navy); font-weight: 800; font-size: 12px; padding: 3px 10px; border-radius: 6px;">NIM 2571502521 • FKDK</span>
                </div>
            </div>

            <div class="team-card">
                <div class="team-avatar-wrapper" style="height: 300px;">
                    <img src="https://budiluhur.tv/images/0/26332814/AmaliaCintaAzmyPramodana-TARuSN-aBKgrrP6mH8-rJw.jpg" alt="Amalia Cinta Azmy Pramodana" class="team-avatar">
                    <span class="team-role-badge">Entertainment Producer</span>
                </div>
                <div style="padding: 24px;">
                    <h3 style="font-size: 20px; font-weight: 900; color: var(--bl-navy); margin-bottom: 6px;">Amalia Cinta Azmy Pramodana</h3>
                    <span style="background: var(--bl-ice-blue); color: var(--bl-navy); font-weight: 800; font-size: 12px; padding: 3px 10px; border-radius: 6px;">NIM 2571502539 • FKDK</span>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. NEWS TEAM TABLE -->
    <section style="background: white; border-radius: 24px; padding: 40px; border: 1px solid var(--bl-border); margin-bottom: 50px;">
        <h2 style="font-size: 24px; font-weight: 900; color: var(--bl-navy); margin-bottom: 20px;">News Team</h2>
        
        <table class="team-table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Photo</th>
                    <th>Name</th>
                    <th>NIM</th>
                    <th>Division</th>
                    <th>Faculty</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td><img src="https://budiluhur.tv/images/0/26332858/MesykaVanessa--e6EJ9Z8mhchER4cnSY2NA.jpg" alt="Mesyka Vanessa" class="avatar-sm"></td>
                    <td><strong>Mesyka Vanessa</strong></td>
                    <td>2571501309</td>
                    <td><span style="background: var(--bl-ice-blue); color: var(--bl-navy); font-weight: 700; padding: 4px 10px; border-radius: 12px; font-size: 12px;">News Team AP Politics</span></td>
                    <td><span style="background: #FEF3C7; color: #92400E; font-weight: 800; padding: 2px 8px; border-radius: 4px; font-size: 11px;">FKDK</span></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td><img src="https://budiluhur.tv/images/0/26332855/SabrinaWijiHapsariArdhanareswari-ffPjwhpB8BqSr8hzNcvhiA.jpg" alt="Sabrina Wiji Hapsari" class="avatar-sm"></td>
                    <td><strong>Sabrina Wiji Hapsari Ardhanareswari</strong></td>
                    <td>2571500806</td>
                    <td><span style="background: var(--bl-ice-blue); color: var(--bl-navy); font-weight: 700; padding: 4px 10px; border-radius: 12px; font-size: 12px;">News Team AP Mobility</span></td>
                    <td><span style="background: #FEF3C7; color: #92400E; font-weight: 800; padding: 2px 8px; border-radius: 4px; font-size: 11px;">FKDK</span></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td><img src="https://budiluhur.tv/images/0/26332853/RikhadatulAisysukmaAsSyifa-PW_LCIq87ukhPEif1E2mew.jpg" alt="Rikhadatul Aisysukma" class="avatar-sm"></td>
                    <td><strong>Rikhadatul Aisysukma As Syifa</strong></td>
                    <td>2571501309</td>
                    <td><span style="background: var(--bl-ice-blue); color: var(--bl-navy); font-weight: 700; padding: 4px 10px; border-radius: 12px; font-size: 12px;">News Team AP Sport</span></td>
                    <td><span style="background: #FEF3C7; color: #92400E; font-weight: 800; padding: 2px 8px; border-radius: 4px; font-size: 11px;">FKDK</span></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td><img src="https://budiluhur.tv/images/0/26332850/SyafinaAuliaZahra-gbssApyMcxTx1yiw5UEDsQ.jpg" alt="Syafina Aulia Zahra" class="avatar-sm"></td>
                    <td><strong>Syafina Aulia Zahra</strong></td>
                    <td>2471501391</td>
                    <td><span style="background: var(--bl-ice-blue); color: var(--bl-navy); font-weight: 700; padding: 4px 10px; border-radius: 12px; font-size: 12px;">News Team AP Humanity</span></td>
                    <td><span style="background: #FEF3C7; color: #92400E; font-weight: 800; padding: 2px 8px; border-radius: 4px; font-size: 11px;">FKDK</span></td>
                </tr>
                <tr>
                    <td>5</td>
                    <td><img src="https://budiluhur.tv/images/0/26332839/AnggiRahmawatiNasution-Xrtb20lTYhVg7QJW-B5Efg.jpg" alt="Anggi Rahmawati" class="avatar-sm"></td>
                    <td><strong>Anggi Rahmawati Nasution</strong></td>
                    <td>2571502117</td>
                    <td><span style="background: var(--bl-ice-blue); color: var(--bl-navy); font-weight: 700; padding: 4px 10px; border-radius: 12px; font-size: 12px;">News Team</span></td>
                    <td><span style="background: #FEF3C7; color: #92400E; font-weight: 800; padding: 2px 8px; border-radius: 4px; font-size: 11px;">FKDK</span></td>
                </tr>
                <tr>
                    <td>6</td>
                    <td><img src="https://budiluhur.tv/images/0/26332838/MuhammadKhadafiAkbar-ZgV9sVr-rCWB7HoIiiGX-Q.jpg" alt="Muhammad Khadafi" class="avatar-sm"></td>
                    <td><strong>Muhammad Khadafi Akbar</strong></td>
                    <td>2571501630</td>
                    <td><span style="background: var(--bl-ice-blue); color: var(--bl-navy); font-weight: 700; padding: 4px 10px; border-radius: 12px; font-size: 12px;">News Team</span></td>
                    <td><span style="background: #FEF3C7; color: #92400E; font-weight: 800; padding: 2px 8px; border-radius: 4px; font-size: 11px;">FKDK</span></td>
                </tr>
            </tbody>
        </table>
    </section>

    <!-- 4. ENTERTAINMENT TEAM TABLE -->
    <section style="background: white; border-radius: 24px; padding: 40px; border: 1px solid var(--bl-border); margin-bottom: 60px;">
        <h2 style="font-size: 24px; font-weight: 900; color: var(--bl-navy); margin-bottom: 20px;">Entertainment Team</h2>
        
        <table class="team-table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Photo</th>
                    <th>Name</th>
                    <th>NIM</th>
                    <th>Division</th>
                    <th>Faculty</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td><img src="https://budiluhur.tv/images/0/25647654/RagilNatalia-uXbtUei10EkeQo7zadocEQ.png" alt="Ragil Natalia" class="avatar-sm"></td>
                    <td><strong>Ragil Natalia</strong></td>
                    <td>2571502612</td>
                    <td><span style="background: #D1FAE5; color: #065F46; font-weight: 700; padding: 4px 10px; border-radius: 12px; font-size: 12px;">Entertainment Team AP Blu Fun</span></td>
                    <td><span style="background: #FEF3C7; color: #92400E; font-weight: 800; padding: 2px 8px; border-radius: 4px; font-size: 11px;">FKDK</span></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td><img src="https://budiluhur.tv/images/0/25647561/NailahElzahra-NCtVsNw1iAZw-QkWI47ZIA.png" alt="Nailah Elzahra" class="avatar-sm"></td>
                    <td><strong>Nailah Elzahra</strong></td>
                    <td>2571501309</td>
                    <td><span style="background: #D1FAE5; color: #065F46; font-weight: 700; padding: 4px 10px; border-radius: 12px; font-size: 12px;">Entertainment Team AP 1 Blu Explore</span></td>
                    <td><span style="background: #FEF3C7; color: #92400E; font-weight: 800; padding: 2px 8px; border-radius: 4px; font-size: 11px;">FKDK</span></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td><img src="https://budiluhur.tv/images/0/26332805/HilaFikaMawadah-xEClhZxZjBx8n3Pbj1AGXQ.jpg" alt="Hila Fika Mawadah" class="avatar-sm"></td>
                    <td><strong>Hila Fika Mawadah</strong></td>
                    <td>2571502570</td>
                    <td><span style="background: #D1FAE5; color: #065F46; font-weight: 700; padding: 4px 10px; border-radius: 12px; font-size: 12px;">Entertainment Team AP 2 Blu Explorey</span></td>
                    <td><span style="background: #FEF3C7; color: #92400E; font-weight: 800; padding: 2px 8px; border-radius: 4px; font-size: 11px;">FKDK</span></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td><img src="https://budiluhur.tv/images/0/25647577/SeanIkhsanKusnedi-OIoGv_-nORI89XHqoND2Sw.png" alt="Sean Ikhsan Kusnedi" class="avatar-sm"></td>
                    <td><strong>Sean Ikhsan Kusnedi</strong></td>
                    <td>2511502334</td>
                    <td><span style="background: #D1FAE5; color: #065F46; font-weight: 700; padding: 4px 10px; border-radius: 12px; font-size: 12px;">Entertainment Team AP Blu Song</span></td>
                    <td><span style="background: #DBEAFE; color: #1E40AF; font-weight: 800; padding: 2px 8px; border-radius: 4px; font-size: 11px;">FTI</span></td>
                </tr>
            </tbody>
        </table>
    </section>

</div>
@endsection
