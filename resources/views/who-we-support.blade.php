@extends('layouts.master-test')

@section('social-meta')
    @parent
    <meta property="og:image" content="" />
    <meta name="twitter:image:src" content="" />

    <!--  end social meta -->
@endsection

@section('title', 'Who We Support')

@section('nav')
    @include('layouts.primary-nav')
@endsection

@section('content')
<div class="header-img-container">
    <div class="bg-img-top" style="background-image:url( '/img/headers/who_we_support.png' )"></div>
    <img class="header-img" src="/img/headers/who_we_support.png" alt="">
</div>

<section>
    <div class="content-wrapper">
        <h2>who we support</h2>
        <div class="intersitial-link-wrapper">
            <a href="njtl">
                <div class="intersitial-item">
                    {{-- <div class="grey-scale"></div> --}}
                    <h3>national junior tennis &amp; learning</h3>
                    <img class="blue-image" src="/img/previews_blue/NJTL_preview_blue.png" alt="">
                    <img class="color-image" src="/img/previews/NJTL_preview.png" alt="">
                </div>
            </a>
            <a href="player-support">
                <div class="intersitial-item">
                    {{-- <div class="grey-scale"></div> --}}
                    <h3>player support</h3>
                    <img class="color-image" src="/img/previews/player_support_preview.png" alt="">
                    <img class="blue-image" src="/img/previews_blue/player_support_preview_blue.png" alt="">
                </div>
            </a>
            <a href="wheelchair-and-adaptive">
                <div class="intersitial-item">
                    {{-- <div class="grey-scale"></div> --}}
                    <h3>wheelchair &amp; adaptive</h3>
                    <img src="https://via.placeholder.com/750x197" alt="">
                    
                    {{-- <img class="color-image" src="/img/previews/NJTL_preview" alt=""> --}}
                    {{-- <img class="blue-image" src="/img/previews_blue/NJTL_preview_blue" alt=""> --}}
                </div>
            </a>
        </div>
    </div>
</section>
@endsection
