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
                @if($block_name == 'content-block-with-sub-header')
                    @include('partials.generic_content_block.content-block-with-subheader', ['content_block' => $content_block[0]])
                @endif
                @if($block_name == 'content-block-without-sub-header')
                    @include('partials.generic_content_block.content-block-without-subheader', ['content_block' => $content_block[0]])
                @endif
                @if($block_name == 'interstitial-link')
                    @include('partials.interstitial', [
                        'header_title' => $content_block[0]['header-title'] ?? '',
                        'paragraph'    => $content_block[0]['paragraph'] ?? '',
                        'linked_page'  => $content_block[0]['linked-page'] ?? '',
                        'title'        => $content_block[0]['title'] ?? '',
                        'color_image'  => $image->getImageUrl($content_block[0]['color-image'] ?? 0),
                        'grey_image'   => $image->getImageUrl($content_block[0]['grey-image'] ?? 0),
                    ])
                @endif
            @endforeach
        @endforeach
    </div>
</section>
@endsection
