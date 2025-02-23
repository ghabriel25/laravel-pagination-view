<?php

namespace Ghabriel\PaginationView;

use Illuminate\Support\ServiceProvider;

class PaginationViewServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../resources/views/fomanticui' => resource_path('views/vendor/pagination'),
                __DIR__.'/../resources/views/bulma' => resource_path('views/vendor/pagination'),
            ], 'pagination-view-all');

            $this->publishes([
                __DIR__.'/../resources/views/fomanticui' => resource_path('views/vendor/pagination'),
            ], 'pagination-view-fomantic-ui');

            $this->publishes([
                __DIR__.'/../resources/views/bulma' => resource_path('views/vendor/pagination'),
            ], 'pagination-view-bulma');
        }
    }
}
