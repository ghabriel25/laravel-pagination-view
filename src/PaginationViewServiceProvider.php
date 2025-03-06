<?php

namespace Ghabriel\PaginationView;

use Illuminate\Support\Facades\File;
use Illuminate\Support\ServiceProvider;

class PaginationViewServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        // Register any application services.
    }

    public function boot(): void
    {
        $views = $this->getViewFolders(__DIR__ . '/../resources/views');
        $this->loadViewsFrom(array_values($views), 'pagination');

        if ($this->app->runningInConsole()) {
            $this->publishViews($views);
        }
    }

    /**
     * Get all view folders.
     *
     * @param string $directory
     * @return array
     */
    private function getViewFolders(string $directory): array
    {
        $folders = File::directories($directory);
        $views = [];

        foreach ($folders as $folder) {
            if (is_dir($folder)) {
                $views[basename($folder)] = $folder;
            }
        }

        return $views;
    }

    /**
     * Publish views for console.
     *
     * @param array $views
     * @return void
     */
    private function publishViews(array $views): void
    {
        $target = $this->app->resourcePath('views/vendor/pagination');
        $publishPaths = array_fill_keys(array_values($views), $target);

        // Publish all views under a single tag
        $this->publishes($publishPaths, 'pagination-view-all');

        // Publish individual views under specific tags
        foreach ($views as $vendor => $path) {
            $this->publishes([$path => $target], "pagination-view-$vendor");
        }
    }
}