@if ($paginator->hasPages())
<link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('style.css') }}">

<div class="center">
    <div class="product__pagination">

        @if ($paginator->onFirstPage())
        <a>&laquo;</a>
        @else
        <a href="{{ $paginator->previousPageUrl() }}" rel="prev">&laquo;</a>
        @endif



        @foreach ($elements as $element)

        @if (is_string($element))
        {{ $element }}
        @endif



        @if (is_array($element))
        @foreach ($element as $page => $url)
        @if ($page == $paginator->currentPage())
        <a class="active"><i class="fa fa-long-arrow-right"></i>{{ $page }}</a>
        @else
        <a href="{{ $url }}">{{ $page }}</a>
        @endif
        @endforeach
        @endif
        @endforeach



        @if ($paginator->hasMorePages())
        <a href="{{ $paginator->nextPageUrl() }}" rel="next">&raquo;</a>
        @else
        <a>&raquo;</a>
        @endif

    </div>
</div>

@endif