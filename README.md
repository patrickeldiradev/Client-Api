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

