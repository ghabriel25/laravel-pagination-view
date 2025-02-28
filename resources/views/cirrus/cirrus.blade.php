@if ($paginator->hasPages())
    <div class="btn-group">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <button class="btn--disabled" aria-disabled="true">
                {!! __('pagination.previous') !!}
            </button>
        @else
            <a class="btn" href="{{ $paginator->previousPageUrl() }}">
                {!! __('pagination.previous') !!}
            </a>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <button class="btn--disabled" aria-disabled="true">{{ $element }}</button>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <button class="btn-link">{{ $page }}</button>
                    @else
                        <a class="btn" href="{{ $url }}">
                            {{ $page }}
                        </a>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a class="btn" href="{{ $paginator->nextPageUrl() }}">
                {!! __('pagination.next') !!}
            </a>
        @else
            <button class="btn--disabled" aria-disabled="true">
                {!! __('pagination.next') !!}
            </button>
        @endif
    </div>
@endif
