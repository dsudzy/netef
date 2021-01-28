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
    <div class="bg-img-top" style="background-image:url( {{ $content->header->header_image }} )"></div>
    <img class="header-img" src="{{ $content->header->header_image }}" alt="">
</div>

<section>
    <div class="content-wrapper">
        <h2>who we support</h2>
        <div class="intersitial-link-wrapper">
            <div class="intersitial-item">
                <a href="njtl"><img src="https://via.placeholder.com/700x150" alt=""></a>
            </div>
            <div class="intersitial-item">
                <a href="player-support"><img src="https://via.placeholder.com/700x150" alt=""></a>
            </div>
            <div class="intersitial-item">
                <a href="wheelchair-and-adaptive"><img src="https://via.placeholder.com/700x150" alt=""></a>
            </div>
        </div>
    </div>
</section>
@endsection
