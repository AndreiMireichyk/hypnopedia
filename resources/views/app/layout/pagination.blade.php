@if ($paginator->hasPages())
    <div class="pagination">
        {{-- Previous Page Link --}}
{{--        @if ($paginator->onFirstPage())
            <span class="pagination__prev disabled"></span>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" class="pagination__prev"></a>
        @endif
 --}}

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <span class="pagination__page active">...</span>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <span class="pagination__page active">{{ $page }}</span>
                        @else
                            <a class="pagination__page" href="{{ $url }}">{{ $page }}</a>
                        @endif
                    @endforeach
                @endif
            @endforeach

{{--        --}}{{-- Next Page Link --}}{{--
        @if ($paginator->hasMorePages())
            <a class="pagination__next" href="{{ $paginator->nextPageUrl() }}"></a>
        @else
            <span class="pagination__next disabled"></span>
        @endif--}}
    </div>
@endif



