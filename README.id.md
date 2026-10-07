# Mini-Perpus

[English](README.md) | **Bahasa Indonesia**

Aplikasi web manajemen inventaris perpustakaan yang dibangun dengan Laravel, Eloquent ORM, Blade, dan Tailwind CSS (CDN). Aplikasi ini mengelola kategori buku dan buku (CRUD lengkap) dengan relasi one-to-many.

## Fitur

- CRUD kategori, dengan proteksi hapus jika kategori masih memiliki buku
- CRUD buku dengan dropdown kategori yang diambil dari database
- Validasi sisi server dengan pesan error pada antarmuka
- Tampilan responsif menggunakan template inheritance Blade

## Kebutuhan

- PHP 8.2+ dengan ekstensi `pdo_mysql`
- Composer
- Docker dan Docker Compose

## Instalasi

1. Clone repository dan install dependensi:

```bash
   git clone <url-repository>
   cd <folder-project>
   composer install
   cp .env.example .env
   php artisan key:generate
```

2. Jalankan MySQL dan phpMyAdmin:

```bash
   docker compose up -d
```

3. Atur database di `.env`:

```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3309
   DB_DATABASE=laravel_app
   DB_USERNAME=laravel
   DB_PASSWORD=secret
```

4. Siapkan database dengan **salah satu** cara berikut:

   - Import dump yang disediakan (berisi data contoh):

```bash
     docker exec -i laravel-db-4-fw-uts mysql -uroot -prootsecret laravel_app < laravel_app.sql
```

   - Atau jalankan migration untuk tabel kosong:

```bash
     php artisan migrate
```

5. Jalankan aplikasi:

```bash
   php artisan serve
```

   Buka `http://127.0.0.1:8000`.

phpMyAdmin tersedia di `http://localhost:8090`.

## Database

- `categories`: id, name, description, timestamps
- `books`: id, category_id (FK), title, author, published_year, stock, timestamps

Relasi: `Category` hasMany `Book`, `Book` belongsTo `Category`.