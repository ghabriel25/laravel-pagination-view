@if ($paginator->hasPages())
    @props(['dark' => false])

    <div class="d-grid gap-2 d-sm-block clearfix">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <button class="btn @if ($dark) btn-outline-light @else btn-outline-primary @endif float-start"
                    aria-disabled="true"
                    disabled>
                {!! __('pagination.previous') !!}
            </button>
        @else
            <a class="btn @if ($dark) btn-outline-light @else btn-outline-primary @endif float-start"
               href="{{ $paginator->previousPageUrl() }}"
               role="button">
                {!! __('pagination.previous') !!}
            </a>
        @endif

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a class="btn @if ($dark) btn-outline-light @else btn-outline-primary @endif float-end"
               href="{{ $paginator->nextPageUrl() }}">
                {!! __('pagination.next') !!}
            </a>
        @else
            <button class="btn @if ($dark) btn-outline-light @else btn-outline-primary @endif float-end"
                    aria-disabled="true"
                    disabled>
                {!! __('pagination.next') !!}
            </button>
        @endif
    </div>
@endif
