@if ($paginator->hasPages())
    <div class="ui grid">
        {{-- Previous Page Link --}}
        <div class="column">
            @if ($paginator->onFirstPage())
                <div class="ui disabled left floated button" aria-disabled="true">
                    {!! __('pagination.previous') !!}
                </div>
            @else
                <a class="ui left floated button"
                   href="{{ $paginator->previousPageUrl() }}"
                   rel="prev">
                    {!! __('pagination.previous') !!}
                </a>
            @endif
            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <a class="ui right floated button"
                   href="{{ $paginator->nextPageUrl() }}"
                   rel="next">
                    {!! __('pagination.next') !!}
                </a>
            @else
                <div class="ui disabled right floated button" aria-disabled="true">
                    {!! __('pagination.next') !!}
                </div>
            @endif
        </div>
    </div>
@endif
