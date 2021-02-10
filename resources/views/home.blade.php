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
<section class="header-img-container grid-x">
    @if(!empty($meta_data['left_image']) && !empty($meta_data['right_image']))
        <div class="small-6 cell">
            <img src="{{ $image->getImageUrl($meta_data['left_image']) }}">
        </div>
        <div class="small-6 cell header-text">
            <img src="{{ $image->getImageUrl($meta_data['right_image'])}}" alt="header image text">
        </div>
    @elseif(!empty($meta_data['vimeo_embed_link']))
    @endif
</section>
<section class="grid-x">
    <div class="callout-page-wrapper grid-x">
        @foreach($content->html_content as $content_blocks)
            @foreach($content_blocks as $block_name => $content_block)
                @if($block_name == 'header-quote')
                    @include('partials.header-quote', [
                        'quote' => $content_block[0]["quote"] ?? '',
                        'icon' => $image->getImageUrl($content_block[0]["icon"] ?? 0),
                    ])
                @endif
                @if($block_name == 'callout-blocks')
                    @include('partials.callout-page', [
                        'page' => $content_block[0]["page"],
                        'image' => $image->getImageUrl($content_block[0]["image"]),
                        'title' => $content_block[0]["title"],
                        'paragraph' => $content_block[0]["paragraph"],
                        'count' => count($content_block[0])
                    ])
                @endif
            @endforeach
        @endforeach
    </div>
</section>
@endsection
