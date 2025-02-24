<?php

namespace Ghabriel\PaginationView;

use Illuminate\Support\ServiceProvider;

class PaginationViewServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $target = resource_path('views/vendor/pagination');

            $views = [
                'fomanticui' => __DIR__.'/../resources/views/fomanticui',
                'bulma' => __DIR__.'/../resources/views/bulma',
                'bootstrap' => __DIR__.'/../resources/views/bootstrap',
            ];

            // Publish all views under a single tag
            $this->publishes(
                array_map(fn ($path) => [$path => $target], $views),
                'pagination-view-all'
            );

            // Publish individual views under specific tags
            foreach ($views as $key => $path) {
                $this->publishes(
                    [$path => $target],
                    "pagination-view-$key"
                );
            }
        }
    }
}
