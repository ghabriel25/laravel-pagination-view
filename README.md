![laravel](https://github.com/user-attachments/assets/c359c75a-1372-475d-8390-6867ce8b98dd)
# Simple, customizable pagination view for Laravel
[![Latest version](https://img.shields.io/packagist/v/ghabriel25/laravel-pagination-view)](https://packagist.org/packages/ghabriel25/laravel-pagination-view)
[![License](https://img.shields.io/badge/license-MIT-brightgreen)](LICENSE.md)
![Github last commit](https://img.shields.io/github/last-commit/ghabriel25/laravel-pagination-view)
[![Packagist downloads](https://img.shields.io/packagist/dt/ghabriel25/laravel-pagination-view?color=66ff00)](https://packagist.org/packages/ghabriel25/laravel-pagination-view/stats)

This package enhances Laravel's default pagination by providing additional features and customizable views. Designed to be lightweight and SEO-friendly, it integrates seamlessly with [Fomantic UI](https://fomantic-ui.com), [Bootstrap](https://getbootstrap.com), [Bulma](https://bulma.io) and other CSS frameworks. Perfect for developers looking to improve their Laravel application's pagination experience with minimal effort.

## Features
Pagination view template using:
1. [Fomantic UI](https://fomantic-ui.com) (Semantic UI)
2. [Bootstrap](https://getbootstrap.com/)
3. [Bulma](https://bulma.io/)
## Table of contents
1. [Requirement](#requirement)
2. [Installation](#installation)
3. [Usage](#usage)
   - [Fomantic UI (Semantic UI)](#fomantic-ui-semantic-ui)
   - [Bootstrap](#bootstrap)
   - [Bulma](#bulma)
5. [Initialization](#initialization)
6. [Screenshots](#screenshots)
   - [Fomantic UI (Semantic UI)](#fomantic-ui-semantic-ui-1)
   - [Bootstrap](#bootstrap-1)
   - [Bulma](#bulma-1)
## Requirement
Laravel version 10+
## Installation
```
composer require ghabriel25/laravel-pagination-view
```
## Usage
> **Note:** Don't forget to include the necessary CSS files or link to the relevant CDN in your project to ensure proper styling!
> 

> All published views are located in `resources/views/vendor/pagination`

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
<li>
  @foreach($users as $user)
    <li>{{ $user->name }}</li>
  @endforeach
</li>
{{ $users->links() }}
{{-- or {{ $users->onEachSide(1)->links() }} --}}
```
## Screenshots
Here are the screenshot for `paginate()` and `simplePaginate()`
### [Fomantic UI](https://fomantic-ui.com) (Semantic UI)
![between pages](https://github.com/user-attachments/assets/37cb8b88-b40c-4b4b-88a2-d80cd2dcbcf0)
![simple between pages](https://github.com/user-attachments/assets/667c2a8d-707e-4179-a8bf-af7c05f239ef)
### [Bootstrap](https://getbootstrap.com/)
![between pages](https://github.com/user-attachments/assets/8d66bad8-3499-4606-93ef-de68b1be5a73)
![simple](https://github.com/user-attachments/assets/0263a49e-0993-4f11-9fc7-9b5ae2a6ac71)
### [Bulma](https://bulma.io/)
![between pages](https://github.com/user-attachments/assets/35dedae3-ee1a-4de0-afbc-c2bff99379d9)
![simple between pages](https://github.com/user-attachments/assets/e2493917-3b81-4065-8dc5-c94b6735d8ad)
## Contributing
Feel free to suggest changes, ask for new features or fix bugs yourself. We're sure there are still a lot of improvements that could be made, and we would be very happy to merge useful pull requests. Thanks!
