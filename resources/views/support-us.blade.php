@extends('layouts.master-test')

@section('social-meta')
    @parent
    <meta property="og:image" content="" />
    <meta name="twitter:image:src" content="" />

    <!--  end social meta -->
@endsection

@section('title', 'support us')

@section('nav')
    @include('layouts.primary-nav')
@endsection

@section('content')
<div class="header-img-container">
    <div class="bg-img-top" style="background-image:url( '/img/headers/mission_vision.png' )"></div>
    <img class="header-img" src="/img/headers/mission_vision.png" alt="">
</div>

<section>
    <div class="content-wrapper">
        <h2>support us</h2>
        <div class="intersitial-link-wrapper">
            {{-- <a href="player-support"> --}}
                <div class="intersitial-item">
                    {{-- <div class="grey-scale"></div> --}}
                    <h3>events</h3>
                    <img class="color-image" src="/img/previews/events_preview.png" alt="">
                    <img class="blue-image" src="/img/previews_blue/events_preview_blue.png" alt="">
                </div>
            {{-- </a> --}}
            {{-- <a href="wheelchair-and-adaptive"> --}}
                <div class="intersitial-item">
                    {{-- <div class="grey-scale"></div> --}}
                    <h3>donate</h3>
                    <img class="color-image" src="/img/previews/donate_preview.png" alt="">
                    <img class="blue-image" src="/img/previews_blue/donate_preview_blue.png" alt="">
                </div>
            {{-- </a> --}}
        </div>
    </div>
</section>
@endsection
