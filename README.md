<div align="center">

# ðŸ“º Budi Luhur TV - Laravel 11 Campus Media & Broadcast Portal

### *Official Digital Broadcasting & Creative Student Community Platform of Universitas Budi Luhur*

![Laravel](https://img.shields.io/badge/Laravel-11.x-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-8.2%20%7C%208.3-777BB4?style=for-the-badge&logo=php&logoColor=white)
![Blade](https://img.shields.io/badge/Blade-Engine-F05340?style=for-the-badge)
![MySQL](https://img.shields.io/badge/MySQL-8.0-4479A1?style=for-the-badge&logo=mysql&logoColor=white)
![License](https://img.shields.io/badge/License-MIT-blue?style=for-the-badge)

---

</div>

## ðŸŒŸ Overview

**Budi Luhur TV (BLTV)** is the official campus digital television and media center portal for Universitas Budi Luhur. Built on **Laravel 11**, it incorporates an MVC architecture with full database migrations, custom Blade components styled in the signature navy blue (`#00255A`) and electric yellow (`#FFE600`) identity, video streaming management, news journalism portal, 22-member official crew roster, and an integrated cPanel deployment structure.

---

## ðŸš€ Key Features

### 1. ðŸ“¡ Live Broadcast & Video Showcase
- HD YouTube Live Stream integration with responsive 16:9 player.
- Playlist sidebar with program categories: *Jurnalistik & News*, *Creative Community*, *Talkshow & Podcast*, and *Live Report*.

### 2. ðŸ‘¥ 22 Official Crew & Management Directory
- Structured showcase of Station Manager, Program Director, Creative Director, Chief Redaksi, Public Relations, Camera Operators, and Audio Technicians with official NIP/NIM identification and photos matching the official live site.
- Integrated Open Recruitment registration form for new crew applicants.

### 3. ðŸ“¢ Real-Time Announcement Ticker
- Continuous marquee ticker displaying campus broadcast announcements and live event reminders.

### 4. ðŸ“° Campus Journalism News Portal
- Categorized articles with dynamic reading routes, author attribution, view counts, and search indexing.

### 5. ðŸ“ Interactive Studio Location & Social Media Sync
- Direct Google Maps routing to Universitas Budi Luhur Media Center Studio.
- Official synchronized links to YouTube, Instagram, Facebook, and TikTok.

---

## ðŸ’» Installation & Quick Start

```bash
# 1. Clone repository
git clone https://github.com/raphlv/budiluhur-tv.git
cd budiluhur-tv

# 2. Install PHP dependencies
composer install

# 3. Environment configuration
cp .env.example .env
php artisan key:generate

# 4. Database Setup & Seed
# Configure DB_DATABASE, DB_USERNAME, DB_PASSWORD in .env
php artisan migrate:fresh --seed

# 5. Run Local Server
php artisan serve
```

---

## ðŸ‘¤ Author & Maintainer

- **Developer**: Pangeran Ryan Pahlevi ([@raphlv](https://github.com/raphlv))
- **Email**: pangeranryan080504@gmail.com
- **Institution**: Universitas Budi Luhur

---

<div align="center">
  <sub>Â© 2026 Budi Luhur TV. Media Kampus dan Komunitas Kreatif. All Rights Reserved.</sub>
</div>


<!-- Last updated: 2026-08-24 16:15:39 -->

