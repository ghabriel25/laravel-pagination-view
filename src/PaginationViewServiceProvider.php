<?php

namespace Ghabriel\PaginationView;

use Illuminate\Support\Facades\File;
use Illuminate\Support\ServiceProvider;

class PaginationViewServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            // Set the target path
            $target = resource_path('views/vendor/pagination');

            // Get views path
            $directory = __DIR__.'/../resources/views';

            // Get all folders inside views
            $folders = File::directories($directory);

            $views = [];

            // Create associative array for all vendors, vendor_name => folder_path
            foreach ($folders as $folder) {
                $folderName = basename($folder);
                $views[$folderName] = "$directory/$folderName";
            }

            // Create an array where the original view paths are keys and the target path is the value
            $publishPaths = array_fill_keys(
                array_values($views),
                $target
            );

            // Publish all views under a single tag
            $this->publishes($publishPaths, 'pagination-view-all');

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
