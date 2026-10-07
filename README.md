# Mini-Perpus

A library inventory web app built with Laravel to complete the midterm assignment for the Framework Programming course

## Requirements

- PHP 8.2+
- Composer
- MySQL (via Docker, or XAMPP/Laragon/etc.)
- Laravel

## Setup

### 1. Install the project

```bash
git clone <https://github.com/JustMarvell/FP_UTS.git>
cd FP_UTS
composer install
cp .env.example .env
php artisan key:generate
```

### 2. Set up the database

<details>
<summary><b>Option A: Docker</b></summary>

Start MySQL and phpMyAdmin:

```bash
docker compose up -d
```

Set `.env`:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3309
DB_DATABASE=laravel_app
DB_USERNAME=laravel
DB_PASSWORD=secret
```

Import the db:

```bash
docker exec -i laravel-db-4-fw-uts mysql -uroot -prootsecret laravel_app < laravel_app.sql
```

phpMyAdmin: `http://localhost:8090`

</details>

<details>
<summary><b>Option B: Regular MySQL (XAMPP, Laragon, etc.)</b></summary>

Example : use phpMyAdmin
- open phpMyAdmin & create `laravel_app` database
- select `laravel_app`, click **import** and choose `laravel_app.sql` file located in the root folder.

</details>
<br>

**OR**

skip importing the db, run `php artisan migrate` to create empty tables instead.

### 3. Run the app

```bash
php artisan serve
```

Open `http://127.0.0.1:8000`.

## Database

- `categories`: id, name, description, timestamps
- `books`: id, category_id (FK), title, author, published_year, stock, timestamps

Relationship: `Category` hasMany `Book`, `Book` belongsTo `Category`.

Try here : <a href="https://mini-perpus.freedev.app/">LINK<a>