@extends('layouts.master-test')

@section('social-meta')
    @parent
    <meta property="og:image" content="" />
    <meta name="twitter:image:src" content="" />

    <!--  end social meta -->
@endsection

@section('title', 'Home')

@section('nav')
    @include('layouts.primary-nav')
@endsection

@section('content')
<section class="header-img-container grid-x">
    <div class="small-6 cell">
        {{-- <img src="{{ $content->header->header_image }}"> --}}
        <img src="/img/header_TEMP.png">
        @if(!empty($meta_data['top_image']))
            {{-- <div class="bg-img-top" style="background-image:url( {{ $meta_data['top_image'] }} )" title="{{ $meta_data['top_image_alt_text'] or 'top image for the page'}}"></div>
            <img class="header-img" src="{{ $meta_data['top_image'] }}" alt=""> --}}
            <div class="bg-img-top" style="background-image:url('/img/header_TEMP.png')" title="{{ $meta_data['top_image_alt_text'] or 'top image for the page'}}"></div>
            <img class="header-img" src="/img/header_TEMP.png" alt="">
        @endif
    </div>
    <div class="small-6 cell header-text">
        <img src="/img/NETEF_Typeset.png" alt="">
    </div>
</section>
<section class="grid-x">
    <div class="callout-page-wrapper grid-x">
        {{-- @if(!empty($content->callout_blocks))
            @foreach($content->callout_blocks as $key => $callout)
                @include('partials.callout-page', ['callout' => $callout, 'count' => count($content->callout_blocks)])
            @endforeach
        @endif --}}
        <a href="/who-we-support">
            <div class="callout-page small-12 large-4 cell" data-page-redirect="/">
                <div>
                    <img src="/img/who_we_support_320x310.png" alt="callout block image">
                </div>
                <h2>who we support</h2>
                <div>
                    <p>Tennis and education programs (NJTLs), player support grants, college scholarships and more</p>
                </div>
            </div>
        </a>
        <a href="/our-stories">
            <div class="callout-page small-12 large-4 cell" data-page-redirect="/">
                <div>
                    <img src="/img/our_stories_320x310.png" alt="callout block image">
                </div>
                <h2>our stories</h2>
                <div>
                    <p>Read about the impact our foundation and our donors are making to better our tennis community</p>
                </div>
            </div>
        </a>
        <a href="/events">
            <div class="callout-page small-12 large-4 cell" data-page-redirect="/">
                <div>
                    <img src="/img/events_320x310.png" alt="callout block image">
                </div>
                <h2>our events</h2>
                <div>
                    <p>Join us for an upcoming fundraiser or event</p>
                </div>
            </div>
        </a>
    </div>
</section>
@endsection
