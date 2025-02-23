@if ($paginator->hasPages())
    <div class="ui pagination menu" role="navigation">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <div class="item disabled" aria-disabled="true">
                {!! __('pagination.previous') !!}
            </div>
        @else
            <a class="item"
               href="{{ $paginator->previousPageUrl() }}"
               rel="prev">
                {!! __('pagination.previous') !!}
            </a>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <div class="item disabled" aria-disabled="true">
                    {{ $element }}
                </div>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <div class="active item" aria-current="page">
                            {{ $page }}
                        </div>
                    @else
                        <a class="item" href="{{ $url }}">
                            {{ $page }}
                        </a>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a class="item"
               href="{{ $paginator->nextPageUrl() }}"
               rel="next">
                {!! __('pagination.next') !!}
            </a>
        @else
            <div class="item disabled" aria-disabled="true">
                {!! __('pagination.next') !!}
            </div>
        @endif
    </div>
@endif
