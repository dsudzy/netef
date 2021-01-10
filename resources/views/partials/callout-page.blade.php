<div class="callout-page small-12 large-{{12 / $count}} cell" data-page-redirect="{{ $callout->getPageName() }}">
    <div>
        <img src="{{ $callout->getCalloutImage() }}" alt="callout block image">
    </div>
    <h2>{{ $callout->getCalloutTitle() }}</h2>
    <div>
        <p>{{ $callout->getCalloutText() }}</p>
    </div>
</div>