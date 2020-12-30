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
<div class="header-img-container">
    @if(!empty($meta_data['top_image']))
        <div class="bg-img-top" style="background-image:url( {{ $meta_data['top_image'] }} )" title="{{ $meta_data['top_image_alt_text'] or 'top image for the page'}}"></div>
        <img class="header-img" src="{{ $meta_data['top_image'] }}" alt="">
    @endif
    <h1 class="center-xy">{{ $content->post_title }}</h1>
</div>
<main class="row">
    <div class="columns medium-8">
        <div class="post-content">
            {{-- {!! $content->html_content !!} --}}
        </div>
    </div>
</main>
@endsection
