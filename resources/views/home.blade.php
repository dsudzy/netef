@extends('layouts.master')

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
@foreach($content->html_content as $content_blocks)
    @foreach($content_blocks as $block_name => $content_block)
        @if($block_name == 'homepage-news-headline')
        <section class="grid-x">
            @include('partials.homepage-news-headline', [
                'headline' => $content_block[0]['headline'] ?? '',
                'link' => $content_block[0]['link'] ?? ''
            ])
        </section>
        @endif
    @endforeach
@endforeach
<section class="header-img-container grid-x">
    @if(!empty($meta_data['left_image']) && !empty($meta_data['right_image']))
        <div class="play-button">
            <i class="far fa-play-circle"></i>
        </div>
        <div class="small-12 small-order-2 medium-order-1 large-6 medium-6 cell header-image">
            <div class="header-image-overlay"></div>
            <img src="{{ $image->getImageUrl($meta_data['left_image']) }}">
        </div>
        <div class="small-12 small-order-1 medium-order-2 large-6 medium-6 cell header-text">
            <img src="{{ $image->getImageUrl($meta_data['right_image'])}}" alt="header image text">
        </div>
        @if(!empty($meta_data['vimeo_embed_link']))
        <div class="small-12 vimeo-wrapper">
            <div style="padding:56.25% 0 0 0;position:relative;" class="vimeo-teaser">
                <iframe id="vimeo-teaser-iframe" src="{{ $meta_data['vimeo_embed_link'] }}?title=0&byline=0&portrait=0" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen;" allowfullscreen></iframe>
            </div>
        </div>
        @endif
    @endif
</section>
<section class="grid-x">
    <div class="home-content-wrapper grid-x">
        @foreach($content->html_content as $content_blocks)
            @foreach($content_blocks as $block_name => $content_block)
                @include('partials.master-content-block', [
                    'template' => 'home',
                    'block_name' => $block_name,
                    'content_block' => $content_block[0]
                ])
            @endforeach
        @endforeach
    </div>
</section>
@endsection
