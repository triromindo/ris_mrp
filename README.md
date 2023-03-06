## Configurasi RIS MRP Laravel
- run composer install
```bash
composer install
```

- copy file `.env.example` to `.env`.
- setting database etc in `.env`.

- generate application key
```bash
php artisan key:generate
```

- migrate database
```bash
php artisan migrate
```

- seed database
```bash
php artisan db:seed sysRoleSeeder
php artisan db:seed sysUserSeeder
```

- run on local serve (just for development)
```bash
php artisan serve
```
