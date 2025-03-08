@if ($paginator->hasPages())
    @props(['darkMode' => false])

    <div class="uk-flex uk-flex-wrap @if ($darkMode) uk-light @endif">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <button class="uk-button uk-button-small uk-button-default uk-width-auto@s uk-width-1-1 uk-margin-xsmall-right@s uk-margin-small-top uk-margin-xsmall-right"
                    disabled>
                {!! __('pagination.previous') !!}
            </button>
        @else
            <a class="uk-button uk-button-small uk-button-default uk-width-auto@s uk-width-1-1 uk-margin-xsmall-right@s uk-margin-small-top uk-margin-xsmall-right"
               href="{{ $paginator->previousPageUrl() }}">
                {!! __('pagination.previous') !!}
            </a>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <button class="uk-button uk-button-small uk-button-default uk-margin-xsmall-right uk-margin-small-top"
                        disabled>
                    {{ $element }}
                </button>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <button
                                class="uk-button uk-button-small uk-button-primary uk-margin-xsmall-right uk-margin-small-top">
                            {{ $page }}
                        </button>
                    @else
                        <a class="uk-button uk-button-small uk-button-default uk-margin-xsmall-right uk-margin-small-top"
                           href="{{ $url }}">
                            {{ $page }}
                        </a>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a class="uk-button uk-button-small uk-button-default uk-width-auto@s uk-width-1-1 uk-margin-xsmall-right@s uk-margin-small-top"
               href="{{ $paginator->nextPageUrl() }}">
                {!! __('pagination.next') !!}
            </a>
        @else
            <button class="uk-button uk-button-small uk-button-default uk-width-auto@s uk-width-1-1 uk-margin-xsmall-right@s uk-margin-small-top"
                    disabled>
                {!! __('pagination.next') !!}
            </button>
        @endif
    </div>
@endif
