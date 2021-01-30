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
    <div class="bg-img-top" style="background-image:url( {{ $meta_data['header_image'] }} )"></div>
    <img class="header-img" src="{{ $meta_data['header_image'] }}" alt="header image">
</div>

<section>
    <div class="content-wrapper">
        @foreach($content->html_content as $block_name => $content_block)
            @if($block_name == 'generic-page')
                @include('partial.generic_page.generic-page', 'content_block' => $content_block)
            @endif
            @if($block_name == 'interstitial-link')
                @include('partial.interstitial', 'content_block' => $content->html_content[])
            @endif
        @endforeach
    </div>
</section>
@endsection
