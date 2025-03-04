@if ($paginator->hasPages())
    <div class="ui grid">
        <div class="column">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <div class="ui disabled left floated basic button" aria-disabled="true">
                    {!! __('pagination.previous') !!}
                </div>
            @else
                <a class="ui left floated basic button"
                   href="{{ $paginator->previousPageUrl() }}"
                   rel="prev">
                    {!! __('pagination.previous') !!}
                </a>
            @endif

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <a class="ui right floated basic button"
                   href="{{ $paginator->nextPageUrl() }}"
                   rel="next">
                    {!! __('pagination.next') !!}
                </a>
            @else
                <div class="ui disabled right floated basic button" aria-disabled="true">
                    {!! __('pagination.next') !!}
                </div>
            @endif
        </div>
    </div>
@endif
