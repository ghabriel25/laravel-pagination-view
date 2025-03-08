@if ($paginator->hasPages())
    @props(['darkMode' => false])

    {{-- Previous Page Link --}}
    @if ($paginator->onFirstPage())
        <button class="btn--sm btn--disabled mr-1 @if ($darkMode) bg-dark text-white @endif"
                aria-disabled="true">
            {!! __('pagination.previous') !!}
        </button>
    @else
        <a class="btn btn--sm mr-1 @if ($darkMode) bg-dark text-white @endif"
           href="{{ $paginator->previousPageUrl() }}">
            {!! __('pagination.previous') !!}
        </a>
    @endif

    {{-- Pagination Elements --}}
    @foreach ($elements as $element)
        {{-- "Three Dots" Separator --}}
        @if (is_string($element))
            <button class="btn--sm btn--disabled mr-1 @if ($darkMode) bg-dark text-white @endif"
                    aria-disabled="true">
                {{ $element }}
            </button>
        @endif

        {{-- Array Of Links --}}
        @if (is_array($element))
            @foreach ($element as $page => $url)
                @if ($page == $paginator->currentPage())
                    <button
                            class="btn--sm btn-link mr-1 @if ($darkMode) bg-link-dark text-white @endif">
                        {{ $page }}
                    </button>
                @else
                    <a class="btn btn--sm mr-1 @if ($darkMode) bg-dark text-white @endif"
                       href="{{ $url }}">
                        {{ $page }}
                    </a>
                @endif
            @endforeach
        @endif
    @endforeach

    {{-- Next Page Link --}}
    @if ($paginator->hasMorePages())
        <a class="btn btn--sm mr-1 @if ($darkMode) bg-dark text-white @endif"
           href="{{ $paginator->nextPageUrl() }}">
            {!! __('pagination.next') !!}
        </a>
    @else
        <button class="btn--sm btn--disabled mr-1 @if ($darkMode) bg-dark text-white @endif"
                aria-disabled="true">
            {!! __('pagination.next') !!}
        </button>
    @endif
@endif
