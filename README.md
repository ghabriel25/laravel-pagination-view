# Simple, customizable pagination view for Laravel
This package provide extended pagination view for laravel framework
## Feature
Pagination view template using:
1. [Fomantic UI](https://fomantic-ui.com) (Semantic UI)
2. [Bulma](https://bulma.io/)
## Table of contents
1. [Requirement](#requirement)
2. [Installation](#installation)
3. [Usage](#usage)
   - [Fomantic UI](#fomanticui)
   - [Bulma](#bulma)
4. [Initialization](#initialization)
5. [Screenshots](#screenshots)
## Requirement
Laravel version 10 or 11
## Installation
```
composer require ghabriel/laravel-pagination-view
```
## Usage
After installation, you must publish the resource that suits your need
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
    Paginator::defaultView('vendor/pagination/fomantic-ui');
    Paginator::defaultSimpleView('vendor/pagination/simple-fomantic-ui');
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
    Paginator::defaultView('vendor/pagination/bulma');
    Paginator::defaultSimpleView('vendor/pagination/simple-bulma');
  }
}
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
![between pages](https://github.com/user-attachments/assets/d3d3562d-51e1-4d48-9116-cec057534377)
![simple between pages](https://github.com/user-attachments/assets/e8ba6942-986b-46ee-9b4f-e9327111fc1d)
### [Bulma](https://bulma.io/)
![between pages](https://github.com/user-attachments/assets/11e1fb07-48aa-4ed1-bbb9-49e17e54abe1)
![simple between pages](https://github.com/user-attachments/assets/5f0f4c65-942c-476b-9483-b670c691a4fe)
## Contributing
Feel free to suggest changes, ask for new features or fix bugs yourself. We're sure there are still a lot of improvements that could be made, and we would be very happy to merge useful pull requests. Thanks!





