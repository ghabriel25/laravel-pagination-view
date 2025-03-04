@if ($paginator->hasPages())
    @props(['darkMode' => false])

    <nav class="pagination is-centered"
         role="navigation"
         aria-label="pagination"
         @if ($darkMode) data-theme="dark" @endif>

        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <a class="pagination-previous is-disabled" aria-disabled="true">
                {!! __('pagination.previous') !!}
            </a>
        @else
            <a class="pagination-previous" href="{{ $paginator->previousPageUrl() }}">
                {!! __('pagination.previous') !!}
            </a>
        @endif

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a class="pagination-next" href="{{ $paginator->nextPageUrl() }}">
                {!! __('pagination.next') !!}
            </a>
        @else
            <a class="pagination-next is-disabled" aria-disabled="true">
                {!! __('pagination.next') !!}
            </a>
        @endif

    </nav>
@endif
