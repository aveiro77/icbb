<!-- resources/views/vendor/pagination/custom.blade.php -->

@if ($paginator->hasPages())
    <div class="custom-pagination">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <span class="prev">Pre</span>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" class="prev">Pre</a>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <span>{{ $element }}</span>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <a href="#" class="active">{{ $page }}</a>
                    @else
                        <a href="{{ $url }}">{{ $page }}</a>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" class="next">Next</a>
        @else
            <span class="next">Next</span>
        @endif
    </div>
@endif
