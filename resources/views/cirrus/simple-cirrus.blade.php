@if ($paginator->hasPages())
    @props(['darkMode' => false])

    <div class="u-flex u-justify-space-between">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <button class="btn--sm btn--disabled @if ($darkMode) bg-dark text-white @endif"
                    aria-disabled="true">
                {!! __('pagination.previous') !!}
            </button>
        @else
            <a class="btn btn--sm @if ($darkMode) bg-dark text-white @endif"
               href="{{ $paginator->previousPageUrl() }}">
                {!! __('pagination.previous') !!}
            </a>
        @endif

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a class="btn btn--sm @if ($darkMode) bg-dark text-white @endif"
               href="{{ $paginator->nextPageUrl() }}">
                {!! __('pagination.next') !!}
            </a>
        @else
            <button class="btn--sm btn--disabled @if ($darkMode) bg-dark text-white @endif"
                    aria-disabled="true">
                {!! __('pagination.next') !!}
            </button>
        @endif
    </div>
@endif
