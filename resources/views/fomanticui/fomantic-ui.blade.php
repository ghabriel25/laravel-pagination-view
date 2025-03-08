@if ($paginator->hasPages())
    @props(['darkMode' => false])

    <div class="ui compact wrapping spaced buttons">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <div class="ui disabled left floated @if ($darkMode) inverted basic @endif button"
                 aria-disabled="true">
                {!! __('pagination.previous') !!}
            </div>
        @else
            <a class="ui left floated @if ($darkMode) inverted @else basic @endif button"
               href="{{ $paginator->previousPageUrl() }}"
               rel="prev">
                {!! __('pagination.previous') !!}
            </a>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <div class="ui disabled basic @if ($darkMode) inverted @endif button"
                     aria-disabled="true">
                    {{ $element }}
                </div>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <div class="ui active @if ($darkMode) inverted @endif button">
                            {{ $page }}
                        </div>
                    @else
                        <a class="ui @if ($darkMode) inverted @else basic @endif button"
                           href="{{ $url }}">
                            {{ $page }}
                        </a>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a class="ui right floated @if ($darkMode) inverted @else basic @endif button"
               href="{{ $paginator->nextPageUrl() }}"
               rel="next">
                {!! __('pagination.next') !!}
            </a>
        @else
            <div class="ui disabled right floated @if ($darkMode) inverted basic @endif button"
                 aria-disabled="true">
                {!! __('pagination.next') !!}
            </div>
        @endif
    </div>
@endif
