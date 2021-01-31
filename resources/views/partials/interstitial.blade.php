@if(!empty($header_title))
    <h2 class="interstitial-header">{{ $header_title }}</h2>
@endif

@if(!empty($paragraph))
    <p class="interstitial-body"> {{ $paragraph }} </p>
@endif
<a href="{{ $linked_page }}">
    <div class="interstitial-item">
        <h3>{{ $title }}</h3>
        <img class="blue-image" src="{{ $color_image }}" alt="{{ $title }} image">
        <img class="color-image" src="{{ $grey_image }}" alt="{{ $title }} image">
    </div>
</a>