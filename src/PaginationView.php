<?php

namespace Ghabriel\PaginationView;

use Illuminate\Pagination\Paginator;

class PaginationView extends Paginator
{
    /**
     * Indicates that Fomantic UI (Semantic UI) styling should be used for generated links.
     *
     * @return void
     */
    public static function fomanticuiView(): void
    {
        static::defaultView('pagination::fomantic-ui');
        static::defaultSimpleView('pagination::simple-fomantic-ui');
    }

    /**
     * Indicates that Bootstrap styling should be used for generated links.
     *
     * @return void
     */
    public static function bootstrapView(): void
    {
        static::defaultView('pagination::bootstrap');
        static::defaultSimpleView('pagination::simple-bootstrap');
    }

    /**
     * Indicates that Bulma styling should be used for generated links.
     *
     * @return void
     */
    public static function bulmaView(): void
    {
        static::defaultView('pagination::bulma');
        static::defaultSimpleView('pagination::simple-bulma');
    }

    /**
     * Indicates that Cirrus styling should be used for generated links.
     *
     * @return void
     */
    public static function cirrusView()
    {
        static::defaultView('pagination::cirrus');
        static::defaultSimpleView('pagination::simple-cirrus');
    }
}
