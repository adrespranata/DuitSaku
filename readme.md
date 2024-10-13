# DuitSaku

A demo application to illustrate how [Inertia.js](https://inertiajs.com/) works with [Laravel](https://laravel.com/) and [React](https://react.dev/).

> This is a port of the original [DuitSaku](https://github.com/adrespranata/DuitSaku) written in Laravel and React.

![](https://raw.githubusercontent.com/adrespranata/DuitSaku/main/public/Images/DuitSaku.png)

## Installation

Clone the repo locally:

```sh
git clone https://github.com/adrespranata/DuitSaku.git
cd DuitSaku
```

Install PHP dependencies:

```sh
composer install
```

Install NPM dependencies:

```sh
npm install
```

Build assets:

```sh
npm run dev
```

Setup configuration:

```sh
cp .env.example .env
```

Generate application key:

```sh
php artisan key:generate
```

Run database migrations:

```sh
php artisan migrate
```

Run database seeder:

```sh
php artisan db:seed
```

Run artisan server:

```sh
php artisan serve
```

You're ready to go! [Visit Duit Saku](http://127.0.0.1:8000/) in your browser, and login with:

-   **Username:** johndoe@example.com
-   **Password:** secret

## Running tests

To run the Duit Saku tests, run:

```
php artisan test
```

## Credits

-   Original work by Adres Pranata (@arsprtaa) and contributors
