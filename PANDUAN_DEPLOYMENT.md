# 🚀 PANDUAN DEPLOY HOSTING & DOMAIN - LARAVEL

Untuk meng-onlinekan website Laravel ini di Shared Hosting (cPanel) atau VPS:

### 1. File Database SQL
File database siap import telah disiapkan di root folder proyek ini:
`budiluhur_tv_production.sql`

### 2. Langkah Upload ke cPanel
1. Buat Database MySQL dan User di cPanel > MySQL Databases.
2. Buka phpMyAdmin > Import file `budiluhur_tv_production.sql`.
3. Upload seluruh file proyek ke folder `public_html` atau root domain.
4. Sesuaikan file `.env`:
   ```env
   APP_NAME="Budi Luhur TV"
   APP_ENV=production
   APP_DEBUG=false
   APP_URL=https://domain-anda.tv

   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=nama_database_anda
   DB_USERNAME=user_database_anda
   DB_PASSWORD=password_database_anda
   ```
5. File `.htaccess` root sudah otomatis mengarahkan request ke `/public`.
