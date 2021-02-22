@extends('layouts.master-test')

@section('social-meta')
    @parent
    <meta property="og:image" content="" />
    <meta name="twitter:image:src" content="" />

    <!--  end social meta -->
@endsection

@section('title', ucfirst($content->post_title))

@section('nav')
    @include('layouts.primary-nav')
@endsection

@section('content')

<div class="header-img-container">
    @if(!empty($meta_data['vimeo_embed_link']))
        <div style="padding:56.25% 0 0 0;position:relative;">
            <iframe src="{{ $meta_data['vimeo_embed_link'] }}?title=0&byline=0&portrait=0" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
        </div>
        <script src="https://player.vimeo.com/api/player.js"></script>
    @elseif(!empty($meta_data['header_image']))
        <div class="bg-img-top" style="background-image:url( {{ $image->getImageUrl($meta_data['header_image'] ?? 0) }} )"></div>
        <img class="header-img" src="{{ $image->getImageUrl($meta_data['header_image'] ?? 0) }}" alt="header image">
    @endif
</div>

<section>
    <div class="content-wrapper">
        @include('partials.master-content-block-wrapper', [
            'html_content' => $content->html_content
        ])
    </div>
</section>
@endsection
