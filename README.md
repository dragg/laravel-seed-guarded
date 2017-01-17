# Laravel Seed Guarded

If you prefer run seeds by default with enabling the mass assignment restrictions in Laravel 5.2+ then you should use it.

## Installation

Require this package with composer using the following command:

```bash
composer require dragg/laravel-seed-guarded
```

After updating composer, add the service provider to the `providers` array in `config/app.php`

```php
Dragg\LaravelSeedGuarded\SeedServiceProvider::class,
```
