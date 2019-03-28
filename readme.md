# Laravel Janitor Passport Demo

This a the demo project related to [my article on Medium](https://medium.com/@codingcave/api-authentication-with-laravel-janitor-part-1-laravel-passport-proxy-d1d1e05d687e).

## Installation

Clone the project from github:

```bash
$ git clone git@github.com:pactode/laravel-janitor-passport-demo.git
```

Change directory to the project root.

```bash
$ cd laravel-janitor-passport-demo
```

Install dependencies with composer

```bash
$ composer install
```

Copy the .env.example file to .env and update the database information accordingly.

```bash
$ cp .env.example .env
```

Generate application key
```bash
$ php artisan key:generate
```

Run the database migrations

```bash
$ php artisan migrate
```

Install Passport

```bash
$ php artisan passport:install
```

Seed the database

```bash
$ php artisan db:seed
```

Update the `.env` file (if using Laravel Valet with .test as domain)

```
JANITOR_OAUTH_TOKEN_URL=http://laravel-janitor-passport-demo.test/oauth/token
```

Otherwise update the url accordingly.

