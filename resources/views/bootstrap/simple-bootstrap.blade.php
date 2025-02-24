@if ($paginator->hasPages())
    <div class="row">
        @if ($paginator->onFirstPage())
            <div class="col">
                <button class="btn btn-outline-primary"
                        aria-disabled="true"
                        disabled>
                    {!! __('pagination.previous') !!}
                </button>
            </div>
        @else
            <div class="col">
                <a class="btn btn-outline-primary"
                   href="{{ $paginator->previousPageUrl() }}"
                   role="button">
                    {!! __('pagination.previous') !!}
                </a>
            </div>
        @endif

        @if ($paginator->hasMorePages())
            <div class="col">
                <a class="float-end btn btn-outline-primary" href="{{ $paginator->nextPageUrl() }}">
                    {!! __('pagination.next') !!}
                </a>
            </div>
        @else
            <div class="col">
                <button class="float-end btn btn-outline-primary"
                        aria-disabled="true"
                        disabled>
                    {!! __('pagination.next') !!}
                </button>
            </div>
        @endif
    </div>
@endif
