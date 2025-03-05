<?php

namespace Ghabriel\PaginationView;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;

final class PaginationView
{
    /**
     * Enable dark mode.
     *
     * @return void
     */
    private static function enableDarkMode(): void
    {
        View::composer('pagination::*', fn ($view) => $view->with('darkMode', true));
    }

    /**
     * Indicates that Fomantic UI (Semantic UI) styling should be used for generated links.
     *
     * @param  bool  $darkMode  Whether to enable dark mode
     * @return void
     */
    public static function fomanticuiView($darkMode = false): void
    {
        if ($darkMode) {
            self::enableDarkMode();
        }

        Paginator::defaultView('pagination::fomantic-ui');
        Paginator::defaultSimpleView('pagination::simple-fomantic-ui');
    }

    /**
     * Indicates that Bootstrap styling should be used for generated links.
     *
     * @param  bool  $darkMode  Whether to enable dark mode
     * @return void
     */
    public static function bootstrapView($darkMode = false): void
    {
        if ($darkMode) {
            self::enableDarkMode();
        }

        Paginator::defaultView('pagination::bootstrap');
        Paginator::defaultSimpleView('pagination::simple-bootstrap');
    }

    /**
     * Indicates that Bulma styling should be used for generated links.
     *
     * @param  bool  $darkMode  Whether to enable dark mode
     * @return void
     */
    public static function bulmaView($darkMode = false): void
    {
        if ($darkMode) {
            self::enableDarkMode();
        }

        Paginator::defaultView('pagination::bulma');
        Paginator::defaultSimpleView('pagination::simple-bulma');
    }

    /**
     * Indicates that Cirrus styling should be used for generated links.
     *
     * @param  bool  $darkMode  Whether to enable dark mode
     * @return void
     */
    public static function cirrusView($darkMode = false): void
    {
        if ($darkMode) {
            self::enableDarkMode();
        }

        Paginator::defaultView('pagination::cirrus');
        Paginator::defaultSimpleView('pagination::simple-cirrus');
    }
}
