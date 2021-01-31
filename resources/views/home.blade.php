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
    <div class="small-6 cell">
        @if(!empty($meta_data['header_image_left']))
            <img src="{{ $meta_data['header_image_left'] }}">
            <div class="bg-img-top" style="background-image:url({{ $meta_data['header_image_left'] ?? '' }})" title="{{ $meta_data['top_image_alt_text'] ?? 'top image for the page'}}"></div>
            <img class="header-img" src="{{ $meta_data['header_image_left'] ?? '' }}" alt="header image">
        @endif
    </div>
    <div class="small-6 cell header-text">
        <img src="{{ $meta_data['header_image_right'] ?? ''}}" alt="header image text">
    </div>
</section>
<section class="grid-x">
    <div class="callout-page-wrapper grid-x">
        @foreach($content->html_content as $content_blocks)
            @foreach($content_blocks as $block_name => $content_block)
                @if($block_name == 'callout-blocks')
                    @include('partials.callout-page', [
                        'page' => $content_block[0]["page"],
                        'image' => $content_block[0]["image"],
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
