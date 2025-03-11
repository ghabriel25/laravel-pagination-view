@if ($paginator->hasPages())
    @props(['darkMode' => false])

    <div class="ui two column compact center aligned grid">
        <div class="row">
            <div class="two wide computer four wide tablet eight wide mobile left floated column">
                {{-- Previous Page Link --}}
                @if ($paginator->onFirstPage())
                    <div class="ui disabled @if ($darkMode) inverted basic @endif compact fluid button"
                         aria-disabled="true">
                        {!! __('pagination.previous') !!}
                    </div>
                @else
                    <a class="ui @if ($darkMode) inverted @else basic @endif compact fluid button"
                       href="{{ $paginator->previousPageUrl() }}"
                       rel="prev">
                        {!! __('pagination.previous') !!}
                    </a>
                @endif
            </div>
            <div class="two wide computer four wide tablet eight wide mobile right floated column">
                {{-- Next Page Link --}}
                @if ($paginator->hasMorePages())
                    <a class="ui @if ($darkMode) inverted @else basic @endif compact fluid button"
                       href="{{ $paginator->nextPageUrl() }}"
                       rel="next">
                        {!! __('pagination.next') !!}
                    </a>
                @else
                    <div class="ui disabled @if ($darkMode) inverted basic @endif compact fluid button"
                         aria-disabled="true">
                        {!! __('pagination.next') !!}
                    </div>
                @endif
            </div>
        </div>
    </div>
@endif
