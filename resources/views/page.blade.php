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
                @php
                $content_names = [];
                $quote_class = "";
                $sub_header_class = "";
                foreach($content_block[0] as $name => $content) {
                    if ($name == "quote" && !empty($content)) {
                        $content_names[] = 'quote';
                    }
                    if ($name == "sub-header-text-1" && !empty($content)) {
                        $content_names[] = 'sub-header-text-1';
                    }
                    if ($name == "sub-header-text-2" && !empty($content)) {
                        $content_names[] = 'sub-header-text-2';
                    }
                    if ($name == "sub-header-text-3" && !empty($content)) {
                        $content_names[] = 'sub-header-text-3';
                    }
                }
                if (in_array('quote', $content_names) && in_array('sub-header-text-1', $content_names) && in_array('sub-header-text-2', $content_names) && in_array('sub-header-text-3', $content_names)) {
                    $quote_class = "sub-header-and-quote";
                    $sub_header_class = "sub-header-and-quote";
                } else if (in_array('quote', $content_names)) {
                    $quote_class = "just-quote";
                    $sub_header_class = "";
                } else if (in_array('sub-header-text-1', $content_names) && in_array('sub-header-text-2', $content_names) && in_array('sub-header-text-3', $content_names)) {
                    $quote_class = "";
                    $sub_header_class = "just-sub-header";
                }
                @endphp
            @endforeach
            @foreach($content_blocks as $block_name => $content_block)
                @include('partials.master-content-block', [
                    'template' => 'page',
                    'block_name' => $block_name,
                    'content_block' => $content_block[0],
                    'quote_class' => $quote_class,
                    'sub_header_class' => $sub_header_class,
                ])
            @endforeach
        @endforeach
    </div>
</section>
@endsection
