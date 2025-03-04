@if ($paginator->hasPages())
    @props(['darkMode' => false])

    <div class="ui grid">
        <div class="column">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <div class="ui disabled left floated basic @if ($darkMode) inverted @endif button"
                     aria-disabled="true">
                    {!! __('pagination.previous') !!}
                </div>
            @else
                <a class="ui left floated basic @if ($darkMode) inverted @endif button"
                   href="{{ $paginator->previousPageUrl() }}"
                   rel="prev">
                    {!! __('pagination.previous') !!}
                </a>
            @endif

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <a class="ui right floated basic @if ($darkMode) inverted @endif button"
                   href="{{ $paginator->nextPageUrl() }}"
                   rel="next">
                    {!! __('pagination.next') !!}
                </a>
            @else
                <div class="ui disabled right floated basic @if ($darkMode) inverted @endif button"
                     aria-disabled="true">
                    {!! __('pagination.next') !!}
                </div>
            @endif
        </div>
    </div>
@endif
