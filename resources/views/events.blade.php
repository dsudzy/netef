@extends('layouts.master-test')

@section('social-meta')
    @parent
    <meta property="og:image" content="" />
    <meta name="twitter:image:src" content="" />

    <!--  end social meta -->
@endsection

@section('title', 'events')

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
                @if($block_name == 'generic-content-block')
                    @include('partials.generic_content_block.generic-content-block', ['content_block' => $content_block])
                @endif
            @endforeach
        @endforeach
        @if($posts->isEmpty())
            <div class="grid-x empty-stories-wrapper">
                <div class="cell">
                    <h2>There are no scheduled events at this time</h2>
                </div>
            </div>
            
        @endif
        @foreach($posts as $key => $post)
            @php
                $metas = $post->meta->filter(function($meta) {
                    return in_array($meta->meta_key, ['callout_title', 'callout_body', 'callout_image', 'callout_date']);
                });
                // turn meta data into key=>value
                $our_stories = [];
                foreach ($metas as $meta) {
                    $our_stories[$meta->meta_key] = $meta->value;
                }
            @endphp
            @if(!empty($our_stories['callout_image']) || !empty($our_stories['callout_title']) || !empty($our_stories['callout_body']))
                @if($key % 2 == 0)
                    <div class="stories-wrapper">
                        <div class="grid-x">
                            <div class="cell large-6 image-wrapper">
                                <img src="{{ $image->getImageUrl($our_stories['callout_image'] ?? 0) }}" alt="">
                            </div>
                            <div class="cell large-6 text-wrapper">
                                <div>
                                    <h2>{{ $our_stories['callout_title'] }}</h2>
                                    <p>{{ $our_stories['callout_body'] }}</p>
                                    <p class="event-date">{{ date('l m/d/Y g:ia' , strtotime($our_stories['callout_date'])) ?? '' }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="stories-wrapper">
                        <div class="grid-x">
                            <div class="cell large-6 text-wrapper">
                                <div>
                                    <h2>{{ $our_stories['callout_title'] }}</h2>
                                    <p>{{ $our_stories['callout_body'] }}</p>
                                    <p class="event-date">{{ date('l m/d/Y g:ia' , strtotime($our_stories['callout_date'])) ?? '' }}</p>
                                </div>
                            </div>
                            <div class="cell large-6 image-wrapper">
                                <img src="{{ $image->getImageUrl($our_stories['callout_image'] ?? 0) }}" alt="">
                            </div>
                        </div>
                    </div>
                @endif
            @endif
        @endforeach
    </div>
</section>
@endsection
