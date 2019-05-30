# Laravel Builder

## Installation

#### Downloading

```
composer require art-es/laravel-builder
```

#### Registering the service provider

add service provider to `providers` into `config/app.php`

`\Artes\LaravelBuilder\Base\LaravelBuilderServiceProvider::class,` 

## Usage

Command for create builder

```
php artisan make:builder <builder-name>
```

Example:

You have `Post.php` model. And you need create builder for this model.

```
php artisan make:builder UserBuilder
```

The builder is in `app\Builders` directory

## Info 

Updated command `php artisan make:model`, model extended `\Artes\LaravelBuilder\Base\EloquentModel`