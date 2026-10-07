\# Mini-Perpus

**English** | [Bahasa Indonesia](README.id.md)

A library inventory management web app built with Laravel, Eloquent ORM, Blade, and Tailwind CSS (CDN). It manages book categories and books (full CRUD) with a one-to-many relationship.

## Features

- Category CRUD, with delete protection when the category still has books
- Book CRUD with a category dropdown loaded from the database
- Server-side validation with error messages in the UI
- Responsive layout using Blade template inheritance

## Requirements

- PHP 8.2+ with the `pdo_mysql` extension
- Composer
- Docker and Docker Compose

## Setup

1. Clone the repository and install dependencies:

```bash
   git clone <repository-url>
   cd <project-folder>
   composer install
   cp .env.example .env
   php artisan key:generate
```

2. Start MySQL and phpMyAdmin:

```bash
   docker compose up -d
```

3. Set the database in `.env`:

```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3309
   DB_DATABASE=laravel_app
   DB_USERNAME=laravel
   DB_PASSWORD=secret
```

4. Prepare the database using **one** of these options:

   - Import the provided dump (includes sample data):

```bash
     docker exec -i laravel-db-4-fw-uts mysql -uroot -prootsecret laravel_app < laravel_app.sql
```

   - Or run the migrations for empty tables:

```bash
     php artisan migrate
```

5. Run the app:

```bash
   php artisan serve
```

   Open `http://127.0.0.1:8000`.

phpMyAdmin is available at `http://localhost:8090`.

## Database

- `categories`: id, name, description, timestamps
- `books`: id, category_id (FK), title, author, published_year, stock, timestamps

Relationship: `Category` hasMany `Book`, `Book` belongsTo `Category`.