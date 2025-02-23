<?php

namespace Ghabriel\PaginationView;

use Illuminate\Support\ServiceProvider;

class PaginationViewServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $target = resource_path('views/vendor/pagination');
            $fomanticui = __DIR__.'/../resources/views/fomanticui';
            $bulma = __DIR__.'/../resources/views/bulma';

            $this->publishes([
                $fomanticui => $target,
                $bulma => $target,
            ], 'pagination-view-all');

            $this->publishes([
                $fomanticui => $target,
            ], 'pagination-view-fomantic-ui');

            $this->publishes([
                $bulma => $target,
            ], 'pagination-view-bulma');
        }
    }
}
