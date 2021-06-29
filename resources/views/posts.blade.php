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
    @if(!empty($meta_data['header_image']))
        <div class="bg-img-top" style="background-image:url( {{ $image->getImageUrl($meta_data['header_image'] ?? 0) }} )"></div>
        <img class="header-img" src="{{ $image->getImageUrl($meta_data['header_image'] ?? 0) }}" alt="header image">
    @elseif(!empty($meta_data['vimeo_embed_link']))
        <iframe src="{{ $meta_data['vimeo_embed_link'] }}" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
    @endif
</div>

<section>
    <div class="content-wrapper">
        @include('partials.master-content-block-wrapper', [
            'html_content' => $content->html_content
        ])
        @if($posts->isEmpty())
            <div class="grid-x empty-stories-wrapper">
                <div class="cell">
                    <h2>{!! $meta_data["empty_content_text"] ?? '' !!}</h2>
                </div>
            </div>
            
        @endif
        @foreach($posts as $key => $post)
            @php
                $metas = $post->meta->filter(function($meta) {
                    return in_array($meta->meta_key, ['post_title', 'post_description', 'post_image', 'post_date', 'post_type']);
                });
                // turn meta data into key=>value
                $post_meta = [];
                foreach ($metas as $meta) {
                    $post_meta[$meta->meta_key] = $meta->value;
                }
            @endphp
            @if(!empty($post_meta['post_title']) || !empty($post_meta['post_description']) || !empty($post_meta['post_image']))
                @if($post_meta['post_type'] == "our-stories")<a href="/our-stories/{{ $post->post_name }}">@endif
                    <div class="posts-wrapper">
                        <div class="grid-x">
                            <div class="cell large-6 {{($key % 2 == 0) ? 'large-order-1' : 'large-order-2'}} image-wrapper">
                                <img src="{{ $image->getImageUrl($post_meta['post_image'] ?? 0) }}" alt="">
                            </div>
                            <div class="cell large-6 {{($key % 2 == 0) ? 'large-order-2' : 'large-order-1'}} text-wrapper">
                                <div>
                                    <h2>{{ $post_meta['post_title'] }}</h2>
                                    <p>{{ $post_meta['post_description'] }}</p>
                                    @if(!empty($post_meta['post_date']))
                                        <p class="event-date">{{ date('l m/d/Y g:ia' , strtotime($post_meta['post_date'])) ?? '' }}</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                @if($post_meta['post_type'] == "our-stories")</a>@endif
            @endif
        @endforeach
    </div>
</section>
@endsection
