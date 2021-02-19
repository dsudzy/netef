<a href="{{ $linked_page }}" target="{{ $open_in_new_tab ? '_blank' : '_self'}}">
    <div class="interstitial-item">
        <h3>{!! $title !!}</h3>
        <img class="color-image" src="{{ $color_image }}" alt="{{ $title }} image">
        <img class="blue-image" src="{{ $grey_image }}" alt="{{ $title }} image">
    </div>
</a>