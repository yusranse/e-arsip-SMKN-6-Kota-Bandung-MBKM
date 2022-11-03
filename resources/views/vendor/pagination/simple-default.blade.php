@if ($paginator->hasPages())
    <nav>
        <ul class="pagination flex justify-end text-xs">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="disabled pr-2 cursor-not-allowed" aria-disabled="true"><span>@lang('pagination.previous')</span></li>
            @else
                <li class="pr-2"><a href="{{ $paginator->previousPageUrl() }}" rel="prev">@lang('pagination.previous')</a></li>
            @endif

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="pl-2"><a href="{{ $paginator->nextPageUrl() }}" rel="next">@lang('pagination.next')</a></li>
            @else
                <li class="disabled pl-2 cursor-not-allowed" aria-disabled="true"><span>@lang('pagination.next')</span></li>
            @endif
        </ul>
    </nav>
@endif
