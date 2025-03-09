![laravel](https://github.com/user-attachments/assets/c359c75a-1372-475d-8390-6867ce8b98dd)
# Simple, customizable pagination view for Laravel
[![Latest version](https://img.shields.io/packagist/v/ghabriel25/laravel-pagination-view)](https://packagist.org/packages/ghabriel25/laravel-pagination-view)
[![License](https://img.shields.io/badge/license-MIT-brightgreen)](LICENSE.md)
![Github last commit](https://img.shields.io/github/last-commit/ghabriel25/laravel-pagination-view)
[![Packagist downloads](https://img.shields.io/packagist/dt/ghabriel25/laravel-pagination-view?color=66ff00)](https://packagist.org/packages/ghabriel25/laravel-pagination-view/stats)

> [!NOTE]
> By default, the views rendered to display the pagination links are compatible with the Tailwind CSS framework.
> 
> reference: https://laravel.com/docs/12.x/pagination#customizing-the-pagination-view

This package enhances Laravel's default pagination by providing additional features and customizable views. Designed to be lightweight and SEO-friendly, it integrates seamlessly with [Fomantic UI](https://fomantic-ui.com/), [Bootstrap](https://getbootstrap.com/), [Bulma CSS](https://bulma.io/), [Cirrus UI](https://cirrus-ui.com/) and [UIkit](https://getuikit.com/). Perfect for developers looking to improve their Laravel application's pagination experience with minimal effort.

https://packagist.org/packages/ghabriel25/laravel-pagination-view

## Features
1. Laravel pagination view template using:
   - **Fomantic UI (Semantic UI)** https://fomantic-ui.com/
   - **Bootstrap** https://getbootstrap.com/
   - **Bulma CSS** https://bulma.io/
   - **Cirrus UI** https://cirrus-ui.com/
   - **UIkit** https://getuikit.com/
2. [Dark Mode](#dark-mode) (New feature!) 🚀
## Table of contents
1. [Requirement](#requirement)
2. [Installation](#installation)
3. [Usage](#usage)
   - [Fomantic UI (Semantic UI)](#fomantic-ui-semantic-ui)
   - [Bootstrap](#bootstrap)
   - [Bulma CSS](#bulma-css)
   - [Cirrus UI](#cirrus-ui)
   - [UIkit](#uikit)
5. [Initialization](#initialization)
6. [Screenshots](#screenshots)
   - [Fomantic UI (Semantic UI)](#fomantic-ui-semantic-ui-1)
   - [Bootstrap](#bootstrap-1)
   - [Bulma CSS](#bulma-css-1)
   - [Cirrus UI](#cirrus-ui-1)
   - [UIkit](#uikit-1)
## Requirement
Laravel version 10+
## Installation
```
composer require ghabriel25/laravel-pagination-view
```
## Usage
> [!IMPORTANT]
> Don't forget to include the necessary CSS files or link to the relevant CDN in your project to ensure proper styling!

> [!TIP]
> All published views are located in `resources/views/vendor/pagination`

### [Fomantic UI](https://fomantic-ui.com) (Semantic UI)
Edit your `App\Providers\AppServiceProvider`
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
### [Bulma CSS](https://bulma.io/)
Edit your `App\Providers\AppServiceProvider`
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
### [Cirrus UI](https://cirrus-ui.com/)
Edit your `App\Providers\AppServiceProvider`
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
### [UIkit](https://getuikit.com/)
Edit your `App\Providers\AppServiceProvider`
```php
<?php

namespace App\Providers;

use Ghabriel\PaginationView\PaginationView;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        PaginationView::uikitView();
    }
}
```
If you want to customize the view,
```
php artisan vendor:publish --provider=Ghabriel\PaginationView\PaginationViewServiceProvider --tag=pagination-view-uikit
```
or
```
php artisan vendor:publish --tag=pagination-view-uikit
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
        // PaginationView::uikitView(true);
    }
}
```
## Screenshots
Here are the screenshot for `paginate()` and `simplePaginate()`
### [Fomantic UI](https://fomantic-ui.com) (Semantic UI)
![between pages](https://github.com/user-attachments/assets/77fcef62-f529-40b4-83cf-e1ec17f4ad24)
![simple between pages](https://github.com/user-attachments/assets/90f57286-0ffe-4d91-a0c7-48ee4ec5c955)
![fomanticui](https://github.com/user-attachments/assets/1fabac5d-a8cc-4268-a533-ea1f65a04f88)
### [Bootstrap](https://getbootstrap.com/)
![between pages](https://github.com/user-attachments/assets/a1149734-c7a0-44d1-bf54-f0d8be358547)
![simple](https://github.com/user-attachments/assets/d4499349-c698-4a29-9e3a-df7edbe77fe1)
![bootstrap](https://github.com/user-attachments/assets/59c8f0e3-cb6f-450f-ab50-3814a06941d5)
### [Bulma CSS](https://bulma.io/)
![between pages](https://github.com/user-attachments/assets/3f976cf7-694b-4509-9734-cbeee1f5dce4)
![simple between pages](https://github.com/user-attachments/assets/6baa2fb8-4262-4bec-9053-44c946354cc6)
![bulma](https://github.com/user-attachments/assets/3362db5f-466b-4e52-aa3e-5f9c19aa2f77)
### [Cirrus UI](https://cirrus-ui.com/)
![between](https://github.com/user-attachments/assets/05a63368-01f5-4495-bfa8-5fb200f0d9e2)
![simple](https://github.com/user-attachments/assets/ed9b5870-49cb-46d8-b229-c949a0f6538a)
![cirrus](https://github.com/user-attachments/assets/855fbdbb-2421-4559-9cd2-2986b62576b5)
### [UIkit](https://getuikit.com/)
![between](https://github.com/user-attachments/assets/1a972c2e-41f3-4913-8c21-2951d95b879f)
![simple](https://github.com/user-attachments/assets/dee6cbb5-87e5-4ad6-a6a1-0d0481ac85f3)
![uikit](https://github.com/user-attachments/assets/9d7e1f47-c331-4950-8553-bf4f14327e4c)
## Contributing
Feel free to suggest changes, ask for new features or fix bugs yourself. We're sure there are still a lot of improvements that could be made, and we would be very happy to merge useful pull requests. Thanks!
