<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Simple Clients Api :

Create simple clients Api used resources as requirement:
- Create clients route.
- Create clients controller.
- Create clients resource.
- Create Store clients request.
- Create Store clients service.
- Create google map address api service.

As a User i can create new clinet which get the address from google map api by lat and long  by this endpoint.
```bash
POST api/clients
```
As a User i can list all clients by.
```bash
GET api/clients
```

## Installation:
```bash
composer install
```

```bash
cp .env.example .env
```

- Add database name to .env
```bash
DB_DATABASE=confidential
DB_USERNAME=root
DB_PASSWORD=
```

- Add google map key to .env
```bash
GOOGLE_MAP_KEY=
```

```bash
php artisan key:generate
php artisan migrate
```

