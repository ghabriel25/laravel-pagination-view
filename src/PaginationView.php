<?php

namespace Ghabriel\PaginationView;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;

class PaginationView extends Paginator
{
    /**
     * Enable dark mode.
     *
     * @return void
     */
    private static function enableDarkMode(): void
    {
        View::composer('pagination::*', fn ($view) => $view->with('dark', true));
    }

    /**
     * Indicates that Fomantic UI (Semantic UI) styling should be used for generated links.
     *
     * @param  bool  $darkMode
     * @return void
     */
    public static function fomanticuiView($darkMode = false): void
    {
        if ($darkMode) {
            static::enableDarkMode();
        }

        static::defaultView('pagination::fomantic-ui');
        static::defaultSimpleView('pagination::simple-fomantic-ui');
    }

    /**
     * Indicates that Bootstrap styling should be used for generated links.
     *
     * @return void
     */
    public static function bootstrapView($darkMode = false): void
    {
        if ($darkMode) {
            static::enableDarkMode();
        }

        static::defaultView('pagination::bootstrap');
        static::defaultSimpleView('pagination::simple-bootstrap');
    }

    /**
     * Indicates that Bulma styling should be used for generated links.
     *
     * @return void
     */
    public static function bulmaView($darkMode = false): void
    {
        if ($darkMode) {
            static::enableDarkMode();
        }

        static::defaultView('pagination::bulma');
        static::defaultSimpleView('pagination::simple-bulma');
    }

    /**
     * Indicates that Cirrus styling should be used for generated links.
     *
     * @return void
     */
    public static function cirrusView($darkMode = false): void
    {
        if ($darkMode) {
            static::enableDarkMode();
        }

        static::defaultView('pagination::cirrus');
        static::defaultSimpleView('pagination::simple-cirrus');
    }
}
