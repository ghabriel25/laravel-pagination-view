@if ($paginator->hasPages())
    @props(['darkMode' => false])

    <div class="uk-flex uk-flex-between @if ($darkMode) uk-light @endif">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <button class="uk-button uk-button-small uk-button-default uk-margin-small-top uk-margin-small-right"
                    disabled>
                {!! __('pagination.previous') !!}
            </button>
        @else
            <a class="uk-button uk-button-small uk-button-default uk-margin-small-top uk-margin-small-right"
               href="{{ $paginator->previousPageUrl() }}">
                {!! __('pagination.previous') !!}
            </a>
        @endif

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a class="uk-button uk-button-small uk-button-default uk-margin-small-top uk-margin-small-right"
               href="{{ $paginator->nextPageUrl() }}">
                {!! __('pagination.next') !!}
            </a>
        @else
            <button class="uk-button uk-button-small uk-button-default uk-margin-small-top uk-margin-small-right"
                    disabled>
                {!! __('pagination.next') !!}
            </button>
        @endif
    </div>
@endif
