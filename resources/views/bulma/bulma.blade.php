@if ($paginator->hasPages())
    @props(['dark' => false])

    <nav class="pagination is-centered"
         role="navigation"
         aria-label="pagination"
         @if ($dark) data-theme="dark" @endif>

        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <a class="pagination-previous is-disabled" aria-disabled="true">
                {!! __('pagination.previous') !!}
            </a>
        @else
            <a class="pagination-previous" href="{{ $paginator->previousPageUrl() }}">
                {!! __('pagination.previous') !!}
            </a>
        @endif

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a class="pagination-next" href="{{ $paginator->nextPageUrl() }}">
                {!! __('pagination.next') !!}
            </a>
        @else
            <a class="pagination-next is-disabled" aria-disabled="true">
                {!! __('pagination.next') !!}
            </a>
        @endif

        {{-- Pagination Elements --}}
        <ul class="pagination-list">
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li>
                        <span class="pagination-ellipsis">{{ $element }}</span>
                    </li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li>
                                <a class="pagination-link is-current"
                                   aria-label="Page {{ $page }}"
                                   aria-current="page">
                                    {{ $page }}
                                </a>
                            </li>
                        @else
                            <li>
                                <a class="pagination-link"
                                   href="{{ $url }}"
                                   aria-label="Goto page {{ $page }}">
                                    {{ $page }}
                                </a>
                            </li>
                        @endif
                    @endforeach
                @endif
            @endforeach
        </ul>
    </nav>
@endif
