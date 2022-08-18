

@if ($paginator->hasPages())

<ul class="nav pagination post-pagination justify-content-center test-pagination">

    @if ($paginator->onFirstPage())

    @else
    <li class="nav-item disabled"><a href="{{ $paginator->previousPageUrl() }}" class="prev-page" title="previous"><i class="ti-angle-left"></i></a></li>

    @endif

    @if($paginator->currentPage() > 3)
    <li class="nav-item">
        <a href="{{ $paginator->url(1) }}"> 1</a>
    </li>
    @endif

    @if($paginator->currentPage() > 4)
    <li class="nav-item disabled" aria-disabled="true"><span class="page-link seperate-pagination-link">...</span></li>
   
    @endif

    @foreach(range(1, $paginator->lastPage()) as $i)
        @if($i >= $paginator->currentPage() - 2 && $i <= $paginator->currentPage() + 2)
            @if ($i == $paginator->currentPage())
                <li class="nav-item active">
                    <span class="active">{{ $i }}</span>
                </li>
            @else
                <li class="nav-item"><a href="{{ $paginator->url($i) }}"> {{ $i }}</a></li>
                
                @endif
        @endif
    @endforeach

    @if($paginator->currentPage() < $paginator->lastPage() - 3)
                <li class="nav-item disabled" aria-disabled="true"><span class="page-link seperate-pagination-link">...</span></li>

    @endif
    @if($paginator->currentPage() < $paginator->lastPage() - 2)
        <li class="nav-item"><a href="{{ $paginator->url($paginator->lastPage()) }}">{{ $paginator->lastPage() }}</a></li>
    @endif

    @if ($paginator->hasMorePages())
   
        <li class="nav-item">
        <a
        href="{{ $paginator->nextPageUrl() }}"
        class="next-page"
        title="next"
        ><i class="ti-angle-right"></i
        ></a>
    </li>
    @else
    
    @endif


</ul>

@endif



