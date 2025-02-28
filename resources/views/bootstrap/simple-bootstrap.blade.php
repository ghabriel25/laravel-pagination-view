@if ($paginator->hasPages())
    <div class="d-grid gap-2 d-sm-block clearfix">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <button class="btn btn-outline-primary float-start"
                    aria-disabled="true"
                    disabled>
                {!! __('pagination.previous') !!}
            </button>
        @else
            <a class="btn btn-outline-primary float-start"
               href="{{ $paginator->previousPageUrl() }}"
               role="button">
                {!! __('pagination.previous') !!}
            </a>
        @endif

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a class="btn btn-outline-primary float-end" href="{{ $paginator->nextPageUrl() }}">
                {!! __('pagination.next') !!}
            </a>
        @else
            <button class="btn btn-outline-primary float-end"
                    aria-disabled="true"
                    disabled>
                {!! __('pagination.next') !!}
            </button>
        @endif
    </div>
@endif
