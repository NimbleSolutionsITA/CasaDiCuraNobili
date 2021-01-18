<nav class="th-pagination">
    @if ($paginator->hasPages())
        <ul>
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="th-nextpage disabled"><span>
                    <i class="fa fa-angle-double-left"></i>
                    <span>Prev</span>
                </span></li>
            @else
                <li class="th-nextpage">
                    <a href="{{ $paginator->previousPageUrl() }}">
                        <i class="fa fa-angle-double-left"></i>
                        <span>Prev</span>
                    </a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="disabled"><span>{{ $element }}</span></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="active"><span>{{ $page }}</span></li>
                        @else
                            <li><a href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="th-prevpage">
                    <a href="{{ $paginator->nextPageUrl() }}">
                        <span>next</span>
                        <i class="fa fa-angle-double-right"></i>
                    </a>
                </li>
            @else
                <li class="th-prevpage disabled"><span>
                    <span>next</span>
                    <i class="fa fa-angle-double-right"></i>
                </span></li>
            @endif
        </ul>
    @endif
</nav>