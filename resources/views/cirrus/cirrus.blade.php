@if ($paginator->hasPages())
    @props(['darkMode' => false])

    <div class="u-flex u-justify-space-between u-flex-wrap">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <button class="u-block btn--sm btn--disabled md:w-auto w-16 @if ($darkMode) bg-dark text-white @endif"
                    aria-disabled="true">
                {!! __('pagination.previous') !!}
            </button>
        @else
            <a class="u-block btn btn--sm md:w-auto w-16 @if ($darkMode) bg-dark text-white @endif"
               href="{{ $paginator->previousPageUrl() }}">
                {!! __('pagination.previous') !!}
            </a>
        @endif

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a class="u-block md:u-none btn btn--sm w-16 @if ($darkMode) bg-dark text-white @endif"
               href="{{ $paginator->nextPageUrl() }}">
                {!! __('pagination.next') !!}
            </a>
        @else
            <button class="u-block md:u-none btn--sm btn--disabled w-16 @if ($darkMode) bg-dark text-white @endif"
                    aria-disabled="true">
                {!! __('pagination.next') !!}
            </button>
        @endif

        <div class="u-flex u-flex-wrap u-col-gap-1 md:u-col-gap-2">
            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <button class="btn--sm btn--disabled @if ($darkMode) bg-dark text-white @endif"
                            aria-disabled="true">
                        {{ $element }}
                    </button>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <button
                                    class="btn--sm btn-link @if ($darkMode) bg-link-dark text-white @endif">
                                {{ $page }}
                            </button>
                        @else
                            <a class="btn btn--sm @if ($darkMode) bg-dark text-white @endif"
                               href="{{ $url }}">
                                {{ $page }}
                            </a>
                        @endif
                    @endforeach
                @endif
            @endforeach
        </div>

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a class="u-none md:u-block btn btn--sm md:w-auto @if ($darkMode) bg-dark text-white @endif"
               href="{{ $paginator->nextPageUrl() }}">
                {!! __('pagination.next') !!}
            </a>
        @else
            <button class="u-none md:u-block btn--sm btn--disabled md:w-auto @if ($darkMode) bg-dark text-white @endif"
                    aria-disabled="true">
                {!! __('pagination.next') !!}
            </button>
        @endif
    </div>
@endif
