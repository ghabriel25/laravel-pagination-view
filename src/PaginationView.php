<?php

namespace Ghabriel\PaginationView;

use Illuminate\Pagination\Paginator;

class PaginationView extends Paginator
{
    /**
     * Indicates that Fomantic UI (Semantic UI) should be used as the default view.
     *
     * @return void
     */
    public static function fomanticuiView(): void
    {
        static::defaultView('pagination::fomantic-ui');
        static::defaultSimpleView('pagination::simple-fomantic-ui');
    }

    /**
     * Indicates that Bootstrap should be used as the default view.
     *
     * @return void
     */
    public static function bootstrapView(): void
    {
        static::defaultView('pagination::bootstrap');
        static::defaultSimpleView('pagination::simple-bootstrap');
    }

    /**
     * Indicates that Bulma should be used as the default view.
     *
     * @return void
     */
    public static function bulmaView(): void
    {
        static::defaultView('pagination::bulma');
        static::defaultSimpleView('pagination::simple-bulma');
    }
}
