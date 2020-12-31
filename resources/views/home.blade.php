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
        <img src="https://via.placeholder.com/800x700">
        @if(!empty($meta_data['top_image']))
            <div class="bg-img-top" style="background-image:url( {{ $meta_data['top_image'] }} )" title="{{ $meta_data['top_image_alt_text'] or 'top image for the page'}}"></div>
            <img class="header-img" src="{{ $meta_data['top_image'] }}" alt="">
        @endif
    </div>
    <div class="small-6 cell header-text">
        <h1>new <br> england <br> tennis &amp; <br> education <br> foundation</h1>
    </div>
</section>
<section class="grid-x">
    <div class="callout-page-wrapper grid-x">
        @for($i = 1; $i <= 3; $i++)
        @include('partials.callout-page')
        @endfor
        
    </div>
</section>
@endsection
