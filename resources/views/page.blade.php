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
    @if(!empty($meta_data['header_image']))
        <div class="bg-img-top" style="background-image:url( {{ $image->getImageUrl($meta_data['header_image'] ?? 0) }} )"></div>
        <img class="header-img" src="{{ $image->getImageUrl($meta_data['header_image'] ?? 0) }}" alt="header image">
    @elseif(!empty($meta_data['vimeo_embed_link']))
        <iframe src="{{ $meta_data['vimeo_embed_link'] }}" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
    @endif
</div>

<section>
    <div class="content-wrapper">
        @foreach($content->html_content as $content_blocks)
            @foreach($content_blocks as $block_name => $content_block)
                @include('partials.master-content-block', [
                    'template' => 'page',
                    'content_block' => $content_block[0]
                ])
            @endforeach
        @endforeach
    </div>
</section>
@endsection
