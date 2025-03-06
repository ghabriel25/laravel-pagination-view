![laravel](https://github.com/user-attachments/assets/c359c75a-1372-475d-8390-6867ce8b98dd)
# Simple, customizable pagination view for Laravel
[![Latest version](https://img.shields.io/packagist/v/ghabriel25/laravel-pagination-view)](https://packagist.org/packages/ghabriel25/laravel-pagination-view)
[![License](https://img.shields.io/badge/license-MIT-brightgreen)](LICENSE.md)
![Github last commit](https://img.shields.io/github/last-commit/ghabriel25/laravel-pagination-view)
[![Packagist downloads](https://img.shields.io/packagist/dt/ghabriel25/laravel-pagination-view?color=66ff00)](https://packagist.org/packages/ghabriel25/laravel-pagination-view/stats)

> **Laravel**
>
> By default, the views rendered to display the pagination links are compatible with the Tailwind CSS framework.

This package enhances Laravel's default pagination by providing additional features and customizable views. Designed to be lightweight and SEO-friendly, it integrates seamlessly with [Fomantic UI](https://fomantic-ui.com/), [Bootstrap](https://getbootstrap.com/), [Bulma](https://bulma.io/) and [Cirrus](https://cirrus-ui.com/). Perfect for developers looking to improve their Laravel application's pagination experience with minimal effort.

https://packagist.org/packages/ghabriel25/laravel-pagination-view

## Features
1. Laravel pagination view template using:
   - **Fomantic UI (Semantic UI)** https://fomantic-ui.com/
   - **Bootstrap** https://getbootstrap.com/
   - **Bulma CSS** https://bulma.io/
   - **Cirrus UI** https://cirrus-ui.com/
2. [Dark Mode](#dark-mode) (New feature!) 🚀
## Table of contents
1. [Requirement](#requirement)
2. [Installation](#installation)
3. [Usage](#usage)
   - [Fomantic UI (Semantic UI)](#fomantic-ui-semantic-ui)
   - [Bootstrap](#bootstrap)
   - [Bulma](#bulma)
   - [Cirrus](#cirrus)
5. [Initialization](#initialization)
6. [Screenshots](#screenshots)
   - [Fomantic UI (Semantic UI)](#fomantic-ui-semantic-ui-1)
   - [Bootstrap](#bootstrap-1)
   - [Bulma](#bulma-1)
   - [Cirrus](#cirrus-1)
## Requirement
Laravel version 10+
## Installation
```
composer require ghabriel25/laravel-pagination-view
```
## Usage
> **Note:** Don't forget to include the necessary CSS files or link to the relevant CDN in your project to ensure proper styling!
> 

> **Info:** All published views are located in `resources/views/vendor/pagination`

### [Fomantic UI](https://fomantic-ui.com) (Semantic UI)
Edit your `App\Providers\AppServiceProvider`
```php
<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
  public function boot(): void
  {
    Paginator::defaultView('pagination::fomantic-ui');
    Paginator::defaultSimpleView('pagination::simple-fomantic-ui');
  }
}
```
You could also directly use `Ghabriel\PaginationView\PaginationView` class
```php
<?php

namespace App\Providers;

use Ghabriel\PaginationView\PaginationView;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        PaginationView::fomanticuiView();
    }
}
```
If you want to customize the view,
```
php artisan vendor:publish --provider=Ghabriel\PaginationView\PaginationViewServiceProvider --tag=pagination-view-fomanticui
```
or
```
php artisan vendor:publish --tag=pagination-view-fomanticui
```
### [Bootstrap](https://getbootstrap.com/)
Edit your `App\Providers\AppServiceProvider`
```php
<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
  public function boot(): void
  {
    Paginator::defaultView('pagination::bootstrap');
    Paginator::defaultSimpleView('pagination::simple-bootstrap');
  }
}
```
You could also directly use `Ghabriel\PaginationView\PaginationView` class
```php
<?php

namespace App\Providers;

use Ghabriel\PaginationView\PaginationView;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        PaginationView::bootstrapView();
    }
}
```
If you want to customize the view,
```
php artisan vendor:publish --provider=Ghabriel\PaginationView\PaginationViewServiceProvider --tag=pagination-view-bootstrap
```
or
```
php artisan vendor:publish --tag=pagination-view-bootstrap
```
### [Bulma](https://bulma.io/)
Edit your `App\Providers\AppServiceProvider`
```php
<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
  public function boot(): void
  {
    Paginator::defaultView('pagination::bulma');
    Paginator::defaultSimpleView('pagination::simple-bulma');
  }
}
```
You could also directly use `Ghabriel\PaginationView\PaginationView` class
```php
<?php

namespace App\Providers;

use Ghabriel\PaginationView\PaginationView;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        PaginationView::bulmaView();
    }
}
```
If you want to customize the view,
```
php artisan vendor:publish --provider=Ghabriel\PaginationView\PaginationViewServiceProvider --tag=pagination-view-bulma
```
or
```
php artisan vendor:publish --tag=pagination-view-bulma
```
### [Cirrus](https://fomantic-ui.com](https://cirrus-ui.com/))
Edit your `App\Providers\AppServiceProvider`
```php
<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
  public function boot(): void
  {
    Paginator::defaultView('pagination::cirrus');
    Paginator::defaultSimpleView('pagination::simple-cirrus');
  }
}
```
You could also directly use `Ghabriel\PaginationView\PaginationView` class
```php
<?php

namespace App\Providers;

use Ghabriel\PaginationView\PaginationView;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        PaginationView::cirrusView();
    }
}
```
If you want to customize the view,
```
php artisan vendor:publish --provider=Ghabriel\PaginationView\PaginationViewServiceProvider --tag=pagination-view-cirrus
```
or
```
php artisan vendor:publish --tag=pagination-view-cirrus
```

---

#### Publish All Views
```
php artisan vendor:publish --provider=Ghabriel\PaginationView\PaginationViewServiceProvider --tag=pagination-view-all
```
or
```
php artisan vendor:publish --tag=pagination-view-all
```
## Initialization
Example:
```php
<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
  return view('welcome', [
    'users' => User::paginate(10)
    // or 'users' => User::simplePaginate(10)
  ]);
});
```
In `welcome.blade.php`
```blade
<ul>
  @foreach($users as $user)
    <li>{{ $user->name }}</li>
  @endforeach
</ul>
{{ $users->links() }}
{{-- or {{ $users->onEachSide(1)->links() }} --}}
```
## Dark Mode
To enable dark mode, simply pass boolean `true` as parameter
```php
<?php

namespace App\Providers;

use Ghabriel\PaginationView\PaginationView;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        PaginationView::fomanticuiView(true);
        // PaginationView::bootstrapView(true);
        // PaginationView::bulmaView(true);
        // PaginationView::cirrusView(true);
    }
}
```
## Screenshots
Here are the screenshot for `paginate()` and `simplePaginate()`
### [Fomantic UI](https://fomantic-ui.com) (Semantic UI)
![between pages](https://github.com/user-attachments/assets/26347f92-8f56-48b9-8f65-4a79c32419c2)
![simple between pages](https://github.com/user-attachments/assets/03fb6478-7928-4220-a1d2-b693fcc167d1)
![fomanticui](https://github.com/user-attachments/assets/c316cf94-0e34-43ef-b774-1d061bf84d2f)
### [Bootstrap](https://getbootstrap.com/)
![between pages](https://github.com/user-attachments/assets/a1149734-c7a0-44d1-bf54-f0d8be358547)
![simple](https://github.com/user-attachments/assets/d4499349-c698-4a29-9e3a-df7edbe77fe1)
![bootstrap](https://github.com/user-attachments/assets/59c8f0e3-cb6f-450f-ab50-3814a06941d5)
### [Bulma](https://bulma.io/)
![between pages](https://github.com/user-attachments/assets/3f976cf7-694b-4509-9734-cbeee1f5dce4)
![simple between pages](https://github.com/user-attachments/assets/6baa2fb8-4262-4bec-9053-44c946354cc6)
### [Cirrus](https://cirrus-ui.com/)
![between](https://github.com/user-attachments/assets/05a63368-01f5-4495-bfa8-5fb200f0d9e2)
![simple](https://github.com/user-attachments/assets/4d2cb0f7-b17b-4d0a-9154-7a8ebc971336)
## Contributing
Feel free to suggest changes, ask for new features or fix bugs yourself. We're sure there are still a lot of improvements that could be made, and we would be very happy to merge useful pull requests. Thanks!
