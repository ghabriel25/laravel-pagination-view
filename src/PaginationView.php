<?php

namespace Ghabriel\PaginationView;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;

final class PaginationView
{
    /**
     * Enable dark mode.
     *
     * @param  string  $viewName  The name of the view
     * @return void
     */
    private static function enableDarkMode(string $viewName): void
    {
        View::composer(
            ["pagination::$viewName", "pagination::simple-$viewName"],
            fn ($view) => $view->with('darkMode', true)
        );
    }

    /**
     * Configure the pagination view.
     *
     * @param  string  $viewName  The name of the view to use for pagination
     * @param  bool  $darkMode  Whether to enable dark mode
     * @return void
     */
    private static function configureView(string $viewName, bool $darkMode = false): void
    {
        if ($darkMode) {
            self::enableDarkMode($viewName);
        }

        Paginator::defaultView("pagination::$viewName");
        Paginator::defaultSimpleView("pagination::simple-$viewName");
    }

    /**
     * Indicates that Fomantic UI (Semantic UI) styling should be used for generated links.
     *
     * @param  bool  $darkMode  Whether to enable dark mode
     * @return void
     */
    public static function fomanticuiView(bool $darkMode = false): void
    {
        self::configureView('fomantic-ui', $darkMode);
    }

    /**
     * Indicates that Bootstrap styling should be used for generated links.
     *
     * @param  bool  $darkMode  Whether to enable dark mode
     * @return void
     */
    public static function bootstrapView(bool $darkMode = false): void
    {
        self::configureView('bootstrap', $darkMode);
    }

    /**
     * Indicates that Bulma styling should be used for generated links.
     *
     * @param  bool  $darkMode  Whether to enable dark mode
     * @return void
     */
    public static function bulmaView(bool $darkMode = false): void
    {
        self::configureView('bulma', $darkMode);
    }

    /**
     * Indicates that Cirrus styling should be used for generated links.
     *
     * @param  bool  $darkMode  Whether to enable dark mode
     * @return void
     */
    public static function cirrusView(bool $darkMode = false): void
    {
        self::configureView('cirrus', $darkMode);
    }
}
