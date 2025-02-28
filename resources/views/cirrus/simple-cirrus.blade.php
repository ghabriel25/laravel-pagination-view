@if ($paginator->hasPages())
    <div class="u-flex u-justify-space-between">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <button class="btn--disabled" aria-disabled="true">
                {!! __('pagination.previous') !!}
            </button>
        @else
            <a class="btn" href="{{ $paginator->previousPageUrl() }}">
                {!! __('pagination.previous') !!}
            </a>
        @endif

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a class="btn" href="{{ $paginator->nextPageUrl() }}">
                {!! __('pagination.next') !!}
            </a>
        @else
            <button class="btn--disabled" aria-disabled="true">
                {!! __('pagination.next') !!}
            </button>
        @endif
    </div>
@endif
