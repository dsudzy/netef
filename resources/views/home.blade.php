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
        <img src="{{ $content->header->header_image }}">
        @if(!empty($meta_data['top_image']))
            <div class="bg-img-top" style="background-image:url( {{ $meta_data['top_image'] }} )" title="{{ $meta_data['top_image_alt_text'] or 'top image for the page'}}"></div>
            <img class="header-img" src="{{ $meta_data['top_image'] }}" alt="">
        @endif
    </div>
    <div class="small-6 cell header-text">
        <img src="/img/NETEF_Typeset.png" alt="">
    </div>
</section>
<section class="grid-x">
    <div class="callout-page-wrapper grid-x">
        @if(!empty($content->callout_blocks))
            @foreach($content->callout_blocks as $key => $callout)
                @include('partials.callout-page', ['callout' => $callout, 'count' => count($content->callout_blocks)])
            @endforeach
        @endif
    </div>
</section>
@endsection
