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
