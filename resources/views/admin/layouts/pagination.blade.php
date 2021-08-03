<div class="card-footer px-3 border-0 d-flex flex-column flex-lg-row align-items-center justify-content-between">
    <nav aria-label="Page navigation example">
        @if ($paginator->lastPage() > 1)
        <ul class="pagination mb-0">
            <li class="page-item {{$paginator->currentPage()==1 ? 'disabled' : ''}}">
                <a class="page-link" href="{{$paginator->url(1)}}">Previous</a>
            </li>
            @for ($i = 1; $i <= $paginator->lastPage(); $i++)
            <li class="page-item {{$paginator->currentPage()==$i ? 'active' : ''}}">
                <a class="page-link" href="{{$paginator->url($i)}}">{{$i}}</a>
            </li>                
            @endfor

            <li class="page-item {{$paginator->currentPage() == $paginator->lastPage() ? 'disabled' : ''}}">
                <a class="page-link" href="{{$paginator->url($paginator->currentPage()+1)}}">Next</a>
            </li>
        </ul>
        @endif 
        
    </nav>
    <div class="fw-normal small mt-4 mt-lg-0">Showing <b>{{$paginator->firstItem()}}</b> to <b>{{$paginator->lastItem()}}</b> of {{$paginator->total()}} entries</div>
</div>