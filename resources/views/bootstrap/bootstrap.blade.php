@if ($paginator->hasPages())
    <nav class="btn-toolbar"
         role="toolbar"
         aria-label="Pagination">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <div class="btn-group me-2 mb-2" role="group">
                <button class="btn btn-outline-secondary"
                        type="button"
                        disabled>
                    {!! __('pagination.previous') !!}
                </button>
            </div>
        @else
            <div class="btn-group me-2 mb-2" role="group">
                <a class="btn btn-outline-primary"
                   href="{{ $paginator->previousPageUrl() }}"
                   role="button"
                   disabled>
                    {!! __('pagination.previous') !!}
                </a>
            </div>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <div class="btn-group me-2 mb-2" role="group">
                    <button class="btn btn-outline-secondary border border-0 px-1"
                            type="button"
                            disabled>
                        {{ $element }}
                    </button>
                </div>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <div class="btn-group me-2 mb-2" role="group">
                            <button class="btn btn-primary" type="button">
                                {{ $page }}
                            </button>
                        </div>
                    @else
                        <div class="btn-group me-2 mb-2" role="group">
                            <a class="btn btn-outline-primary"
                               href="{{ $url }}"
                               role="button">
                                {{ $page }}
                            </a>
                        </div>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <div class="btn-group mb-2" role="group">
                <a class="btn btn-outline-primary"
                   href="{{ $paginator->nextPageUrl() }}"
                   role="button">
                    {!! __('pagination.next') !!}
                </a>
            </div>
        @else
            <div class="btn-group mb-2" role="group">
                <button class="btn btn-outline-secondary"
                        type="button"
                        disabled>
                    {!! __('pagination.next') !!}
                </button>
            </div>
        @endif
    </nav>
@endif
