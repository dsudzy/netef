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
                @if($block_name == 'header')
                    @include('partials.header', [
                        'title' => $content_block[0]['title'] ?? '',
                        'paragraph' => $content_block[0]['paragraph'] ?? '',
                    ])
                @endif
            @endforeach
        @endforeach
        @if($posts->isEmpty())
            <div class="grid-x empty-stories-wrapper">
                <div class="cell">
                    <h2>Come back later for some awesome stories</h2>
                </div>
            </div>
            
        @endif
        @foreach($posts as $key => $post)
            @php
                $metas = $post->meta->filter(function($meta) {
                    return in_array($meta->meta_key, ['callout_title', 'callout_body', 'callout_image']);
                });
                // turn meta data into key=>value
                $our_stories = [];
                foreach ($metas as $meta) {
                    $our_stories[$meta->meta_key] = $meta->value;
                }
            @endphp
            @if(!empty($our_stories['callout_image']) || !empty($our_stories['callout_title']) || !empty($our_stories['callout_body']))
                @if($key % 2 == 0)
                    <a href="/our-stories/{{ $post->post_name }}">
                        <div class="stories-wrapper">
                            <div class="grid-x">
                                <div class="cell large-6 image-wrapper">
                                    <img src="{{ $image->getImageUrl($our_stories['callout_image']) }}" alt="">
                                </div>
                                <div class="cell large-6 text-wrapper">
                                    <div>
                                        <h2>{{ $our_stories['callout_title'] }}</h2>
                                        <p>{{ $our_stories['callout_body'] }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                @else
                    <a href="/our-stories/{{ $post->post_name }}">
                        <div class="stories-wrapper">
                            <div class="grid-x">
                                <div class="cell large-6 text-wrapper">
                                    <div>
                                        <h2>{{ $our_stories['callout_title'] }}</h2>
                                        <p>{{ $our_stories['callout_body'] }}</p>
                                    </div>
                                </div>
                                <div class="cell large-6 image-wrapper">
                                    <img src="{{ $image->getImageUrl($our_stories['callout_image']) }}" alt="">
                                </div>
                            </div>
                        </div>
                    </a>
                @endif
            @endif
        @endforeach
    </div>
</section>
@endsection
