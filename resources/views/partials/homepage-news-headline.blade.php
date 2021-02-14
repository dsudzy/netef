<div class="grid-x homepage-news-headline">
    <div class="cell"> 
        @if(!empty($link))
            <a href="{{ $link }}"><h2>{!! $headline !!}</h2></a>
        @else
            <h2>{!! $headline !!}</h2>
        @endif
    </div>
</div>