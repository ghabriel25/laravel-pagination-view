@if ($paginator->hasPages())
    <div class="ui compact wrapping spaced buttons" role="navigation">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <div class="ui basic button disabled" aria-disabled="true">
                {!! __('pagination.previous') !!}
            </div>
        @else
            <a class="ui basic button"
               href="{{ $paginator->previousPageUrl() }}"
               rel="prev">
                {!! __('pagination.previous') !!}
            </a>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <div class="ui basic button disabled" aria-disabled="true">
                    {{ $element }}
                </div>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <div class="ui active button" aria-current="page">
                            {{ $page }}
                        </div>
                    @else
                        <a class="ui basic button" href="{{ $url }}">
                            {{ $page }}
                        </a>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a class="ui basic button"
               href="{{ $paginator->nextPageUrl() }}"
               rel="next">
                {!! __('pagination.next') !!}
            </a>
        @else
            <div class="ui basic button disabled" aria-disabled="true">
                {!! __('pagination.next') !!}
            </div>
        @endif
    </div>
@endif
