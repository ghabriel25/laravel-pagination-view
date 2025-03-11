@if ($paginator->hasPages())
    @props(['darkMode' => false])

    <div class="row justify-content-between clearfix row-gap-2">
        {{-- Previous Page Link --}}
        <div class="d-grid col-lg-2 col-sm-3 col-6">
            @if ($paginator->onFirstPage())
                <button class="btn @if ($darkMode) btn-outline-light @else btn-outline-primary @endif"
                        aria-disabled="true"
                        disabled>
                    {!! __('pagination.previous') !!}
                </button>
            @else
                <a class="btn @if ($darkMode) btn-outline-light @else btn-outline-primary @endif"
                   href="{{ $paginator->previousPageUrl() }}"
                   role="button">
                    {!! __('pagination.previous') !!}
                </a>
            @endif
        </div>

        {{-- Next Page Link --}}
        <div class="d-grid col-lg-2 col-sm-3 col-6 ms-auto">
            @if ($paginator->hasMorePages())
                <a class="btn @if ($darkMode) btn-outline-light @else btn-outline-primary @endif"
                   href="{{ $paginator->nextPageUrl() }}">
                    {!! __('pagination.next') !!}
                </a>
            @else
                <button class="btn @if ($darkMode) btn-outline-light @else btn-outline-primary @endif"
                        aria-disabled="true"
                        disabled>
                    {!! __('pagination.next') !!}
                </button>
            @endif
        </div>
    </div>
@endif
