@if ($paginator->hasPages())
    <div class="ui equal width grid">
        <div class="row">
            {{-- Previous Page Link --}}
            <div class="left floated column">
                @if ($paginator->onFirstPage())
                    <div class="ui disabled button" aria-disabled="true">
                        {!! __('pagination.previous') !!}
                    </div>
                @else
                    <a class="ui button"
                       href="{{ $paginator->previousPageUrl() }}"
                       rel="prev">
                        {!! __('pagination.previous') !!}
                    </a>
                @endif
            </div>

            {{-- Next Page Link --}}
            <div class="right floated right aligned column">
                @if ($paginator->hasMorePages())
                    <a class="ui button"
                       href="{{ $paginator->nextPageUrl() }}"
                       rel="next">
                        {!! __('pagination.next') !!}
                    </a>
                @else
                    <div class="ui disabled button" aria-disabled="true">
                        {!! __('pagination.next') !!}
                    </div>
                @endif
            </div>
        </div>
    </div>
@endif
