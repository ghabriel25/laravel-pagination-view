@if ($paginator->hasPages())
    @props(['dark' => false])

    <nav aria-label="Pagination">
        <ul class="pagination text-center">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="page-item disabled flex-fill" aria-disabled="true">
                    <span class="page-link text-nowrap @if ($dark) text-bg-dark @endif"
                          aria-hidden="true">
                        {!! __('pagination.previous') !!}
                    </span>
                </li>
            @else
                <li class="page-item flex-fill">
                    <a class="page-link text-nowrap @if ($dark) text-bg-dark @endif"
                       href="{{ $paginator->previousPageUrl() }}"
                       rel="prev">
                        {!! __('pagination.previous') !!}
                    </a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="page-item flex-fill disabled" aria-disabled="true">
                        <span class="page-link @if ($dark) text-bg-dark @endif"
                              aria-hidden="true">{{ $element }}</span>
                    </li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="page-item flex-fill active" aria-current="page">
                                <span
                                      class="page-link @if ($dark) text-bg-dark bg-primary @endif">
                                    {{ $page }}
                                </span>
                            </li>
                        @else
                            <li class="page-item flex-fill">
                                <a class="page-link @if ($dark) text-bg-dark @endif"
                                   href="{{ $url }}">{{ $page }}</a>
                            </li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="page-item flex-fill">
                    <a class="page-link text-nowrap @if ($dark) text-bg-dark @endif"
                       href="{{ $paginator->nextPageUrl() }}"
                       rel="next">
                        {!! __('pagination.next') !!}
                    </a>
                </li>
            @else
                <li class="page-item flex-fill disabled" aria-disabled="true">
                    <span class="page-link text-nowrap @if ($dark) text-bg-dark @endif"
                          aria-hidden="true">
                        {!! __('pagination.next') !!}
                    </span>
                </li>
            @endif
        </ul>
    </nav>
@endif
