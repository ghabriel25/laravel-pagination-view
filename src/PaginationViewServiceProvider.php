<?php

namespace Ghabriel\PaginationView;

use Illuminate\Support\Facades\File;
use Illuminate\Support\ServiceProvider;

class PaginationViewServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        //  Get the directory
        $directory = __DIR__ . '/../resources/views';

        // Get all folders
        $folders = File::directories($directory);

        $views = [];

        // Create associative array for all vendors, vendor_name => folder_path
        foreach ($folders as $folder) {
            if (is_dir($folder)) {
                $views[basename($folder)] = $folder;
            }
        }

        // Load all views with namespace
        $this->loadViewsFrom(
            array_values($views),
            'pagination'
        );

        // Boot in console
        if ($this->app->runningInConsole()) {
            $this->bootInConsole($views);
        }
    }

    protected function bootInConsole($views): void
    {
        // Get the target path
        $target = $this->app->resourcePath('views/vendor/pagination');

        // Create an array where the original view paths are keys and the target path is the value
        $publishPaths = array_fill_keys(
            array_values($views),
            $target
        );

        // Publish all views under a single tag
        $this->publishes($publishPaths, 'pagination-view-all');

        // Publish individual views under specific tags
        foreach ($views as $vendor => $path) {
            $this->publishes(
                [$path => $target],
                "pagination-view-$vendor"
            );
        }
    }
}
