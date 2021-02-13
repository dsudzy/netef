<div class="grid-x homepage-news-headline">
    <div class="cell"> 
        @if(!empty($link))
            <a href="{{ $link }}">
        @endif
                <h2>{!! $headline !!}</h2>
        @if(!empty($link))
            </a>
        @endif
    </div>
</div>