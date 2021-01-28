@extends('layouts.master-test')

@section('social-meta')
    @parent
    <meta property="og:image" content="" />
    <meta name="twitter:image:src" content="" />

    <!--  end social meta -->
@endsection

@section('title', 'grants')

@section('nav')
    @include('layouts.primary-nav')
@endsection

@section('content')
<div class="header-img-container">
    <div class="bg-img-top" style="background-image:url( '/img/headers/grants.png' )"></div>
    <img class="header-img" src="/img/headers/grants.png" alt="">
</div>

<section>
    <div class="content-wrapper">
        <h2>grants</h2>
        <div class="intersitial-link-wrapper">
            {{-- <a href="player-support"> --}}
                <div class="intersitial-item">
                    {{-- <div class="grey-scale"></div> --}}
                    <h3>player grants</h3>
                    <img class="color-image" src="/img/previews/player_grants.png" alt="">
                    <img class="blue-image" src="/img/previews_blue/player_grants_preview_blue.png" alt="">
                </div>
            {{-- </a> --}}
            {{-- <a href="wheelchair-and-adaptive"> --}}
                <div class="intersitial-item">
                    {{-- <div class="grey-scale"></div> --}}
                    <h3>NJTL grants</h3>
                    <img class="color-image" src="/img/previews/NJTL_grants_preview.png" alt="">
                    <img class="blue-image" src="/img/previews_blue/NJTL_grants_preview_blue.png" alt="">
                </div>
            {{-- </a> --}}
        </div>
    </div>
</section>
@endsection
