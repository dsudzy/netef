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
    <div class="bg-img-top" style="background-image:url( 'https://via.placeholder.com/1440x600' )"></div>
    <img class="header-img" src="https://via.placeholder.com/1440x600" alt="">
</div>

<section>
    <div class="content-wrapper">
        <h2>grants</h2>
        <div class="intersitial-link-wrapper">
            {{-- <a href="player-support"> --}}
                <div class="intersitial-item">
                    <div class="grey-scale"></div>
                    <h3>player grants</h3>
                    <img src="/img/previews/player_grants.png" alt="">
                </div>
            {{-- </a> --}}
            {{-- <a href="wheelchair-and-adaptive"> --}}
                <div class="intersitial-item">
                    <div class="grey-scale"></div>
                    <h3>NJTL grants</h3>
                    <img src="/img/previews/NJTL_grants_preview.png" alt="">
                </div>
            {{-- </a> --}}
        </div>
    </div>
</section>
@endsection
