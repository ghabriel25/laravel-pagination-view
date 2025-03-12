@if ($paginator->hasPages())
    @props(['darkMode' => false])

    <div class="ui grid">
        <div class="row">
            {{-- Previous Page Link --}}
            <div class="three wide computer three wide tablet eight wide mobile left floated column">
                @if ($paginator->onFirstPage())
                    <div class="fluid ui disabled @if ($darkMode) inverted basic @endif compact button"
                         aria-disabled="true">
                        {!! __('pagination.previous') !!}
                    </div>
                @else
                    <a class="fluid ui @if ($darkMode) inverted @else basic @endif compact button"
                       href="{{ $paginator->previousPageUrl() }}"
                       rel="prev">
                        {!! __('pagination.previous') !!}
                    </a>
                @endif
            </div>

            {{-- Pagination Elements --}}
            <div class="ten wide tablet computer only column">
                <div class="ui compact wrapping spaced buttons">
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
                </div>
            </div>

            {{-- Next Page Link --}}
            <div class="three wide computer three wide tablet eight wide mobile right floated column">
                @if ($paginator->hasMorePages())
                    <a class="fluid ui @if ($darkMode) inverted @else basic @endif compact button"
                       href="{{ $paginator->nextPageUrl() }}"
                       rel="next">
                        {!! __('pagination.next') !!}
                    </a>
                @else
                    <div class="fluid ui disabled @if ($darkMode) inverted basic @endif compact button"
                         aria-disabled="true">
                        {!! __('pagination.next') !!}
                    </div>
                @endif
            </div>
        </div>
    </div>
    <div class="ui one column grid">
        <div class="sixteen wide mobile only column">
            <div class="ui compact wrapping spaced buttons">
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
            </div>
        </div>
    </div>
@endif
