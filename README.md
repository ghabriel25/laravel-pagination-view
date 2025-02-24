# Simple, customizable pagination view for Laravel
This package provide extended pagination view for laravel framework
## Feature
Pagination view template using:
1. [Fomantic UI](https://fomantic-ui.com) (Semantic UI)
2. [Bootstrap](https://getbootstrap.com/)
3. [Bulma](https://bulma.io/)
## Table of contents
1. [Requirement](#requirement)
2. [Installation](#installation)
3. [Usage](#usage)
4. [Initialization](#initialization)
5. [Screenshots](#screenshots)
## Requirement
Laravel version 10 or 11
## Installation
```
composer require ghabriel/laravel-pagination-view
```
## Usage
After installation, publish the resource that suits your need
### [Fomantic UI](https://fomantic-ui.com) (Semantic UI)
```
php artisan vendor:publish --provider=Ghabriel\PaginationView\PaginationViewServiceProvider --tag=pagination-view-fomantic-ui
```
or
```
php artisan vendor:publish --tag=pagination-view-fomantic-ui
```
This will create 2 files in `resources/views/vendor/pagination`; `fomantic-ui.blade.php` and `simple-fomantic-ui.blade.php`. 

After that edit your `App\Providers\AppServiceProvider`
```php
<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
  public function boot(): void
  {
    Paginator::defaultView('vendor.pagination.fomantic-ui');
    Paginator::defaultSimpleView('vendor.pagination.simple-fomantic-ui');
  }
}
```
### [Bootstrap](https://getbootstrap.com/)
```
php artisan vendor:publish --provider=Ghabriel\PaginationView\PaginationViewServiceProvider --tag=pagination-view-bootstrap
```
or
```
php artisan vendor:publish --tag=pagination-view-bootstrap
```
This will create 2 files in `resources/views/pagination`: `bootstrap.blade.php` and `simple-bootstrap.blade.php`.

After that edit your `App\Providers\AppServiceProvider`
```php
<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
  public function boot(): void
  {
    Paginator::defaultView('vendor.pagination.bootstrap');
    Paginator::defaultSimpleView('vendor.pagination.simple-bootstrap');
  }
}
```
### [Bulma](https://bulma.io/)
```
php artisan vendor:publish --provider=Ghabriel\PaginationView\PaginationViewServiceProvider --tag=pagination-view-bulma
```
or
```
php artisan vendor:publish --tag=pagination-view-bulma
```
This will create 2 files in `resources/views/pagination`: `bulma.blade.php` and `simple-bulma.blade.php`.

After that edit your `App\Providers\AppServiceProvider`
```php
<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
  public function boot(): void
  {
    Paginator::defaultView('vendor.pagination.bulma');
    Paginator::defaultSimpleView('vendor.pagination.simple-bulma');
  }
}
```

If you want to publish all views in one go
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