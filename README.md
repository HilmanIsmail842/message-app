<p align="center">
  <a href="https://laravel.com" target="_blank">
    <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo">
  </a>
</p>

<p align="center">
  <a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
  <a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
  <a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
  <a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

---

# 📦 Laravel Message App

Aplikasi Laravel sederhana untuk berkirim pesan antar pengguna.

---

### ✨ Fitur:
- 🔐 Registrasi dan login
- ✉️ Kirim dan baca pesan
- 📥 Lihat daftar pesan masuk
- 🗑️ Hapus pesan

---

## 🚀 Cara Menjalankan Aplikasi

### 1. 📥 Clone Project

```bash
git clone https://github.com/HilmanIsmail842/message-app.git
cd message-app
```

### 2. ⚙️ Install Dependency

```bash
composer install
npm install
```

### 3. 📄 Setup File `.env`

```bash
cp .env.example .env
```

Lalu edit:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=message_app
DB_USERNAME=root
DB_PASSWORD=
```

### 4. 🗃️ Buat Database

Buka [http://localhost/phpmyadmin](http://localhost/phpmyadmin), buat database `message_app`.

### 5. 🔑 Generate Key & Migrasi

```bash
php artisan key:generate
php artisan migrate
```

### 6. 🎨 Build Asset

```bash
npm run build
```

### 7. ▶️ Jalankan Server

```bash
php artisan serve
```

Akses via browser:  
[http://127.0.0.1:8000](http://127.0.0.1:8000)

---

## 🧪 Penggunaan Singkat

1. Daftar 2 akun
2. Login sebagai salah satu user
3. Kirim pesan ke user lain
4. Lihat, baca, atau hapus pesan

---

## 👤 Author

**Hilman Ismail**  
Tugas Project Laravel – 2025  
[GitHub](https://github.com/HilmanIsmail842)
