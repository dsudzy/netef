@extends('layouts.master')

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
                @if($block_name == 'generic-content-block')
                    @include('partials.generic_content_block.generic-content-block', ['content_block' => $content_block[0]])
                @endif
            @endforeach
        @endforeach
    </div>
</section>
@endsection
