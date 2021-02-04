@extends('layouts.master-test')

@section('social-meta')
    @parent
    <meta property="og:image" content="" />
    <meta name="twitter:image:src" content="" />

    <!--  end social meta -->
@endsection

@section('title', 'our stories')

@section('nav')
    @include('layouts.primary-nav')
@endsection

@section('content')
<div class="header-img-container">
    <div class="bg-img-top" style="background-image:url( '/img/headers/our_stories.png' )"></div>
    <img class="header-img" src="/img/headers/our_stories.png" alt="">
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
                @if ($block_name == 'inspirational-quote')
                    <h3 class="inspirational-quote">{{ $content_block[0]["quote"] ?? "" }}</h3>
                @endif
            @endforeach
        @endforeach
    </div>
</section>
@endsection
