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

<section>
    <div class="content-wrapper">
        <div class="grid-x mission-and-vision-wrapper">
            <div class="cell large-4">
                <a href="javascript:;" data-open="education-modal">
                    <div class="mv-item">
                        <img src="{{ $image->getImageUrl($meta_data['education_icon'] ?? 0) }}" alt="">
                        <h3>EDUCATION</h3>
                    </div>
                </a>
            </div>
            <div class="cell large-4">
                <a href="javascript:;" data-open="fitness-modal">
                    <div class="mv-item">
                        <img src="{{$image->getImageUrl($meta_data['fitness_icon'] ?? 0) }}" alt="">
                        <h3>FITNESS</h3>
                    </div>
                </a>
            </div>
            <div class="cell large-4">
                <a href="javascript:;" data-open="community-modal">
                    <div class="mv-item">
                        <img src="{{ $image->getImageUrl($meta_data['community_icon'] ?? 0) }}" alt="">
                        <h3>COMMUNITY</h3>
                    </div>
                </a>
            </div>
            <div class="grid-x support-wrapper">
                <div class="cell large-4">
                    <img src="{{ $image->getImageUrl($meta_data['support_of_our_donors_icon'] ?? 0) }}" alt="">
                </div>
                <div class="cell large-8 support-text">
                    <h3>With the support of our donors</h3>
                    <p>{!! $meta_data['support_of_our_donors_text'] !!}</p>
                </div>
            </div>
        <div>

        
        <div class="reveal mv-open-modal" id="education-modal" data-reveal>
            <div class="grid-x">
                <div class="cell large-4">
                    <img src="{{ $image->getImageUrl($meta_data['education_icon'] ?? 0) }}" alt="">
                    <h3>EDUCATION</h3>
                </div>
                <div class="cell large-8">
                    <p>{!! $meta_data['education_text'] !!}</p>
                </div>
                <button class="close-button" data-close aria-label="Close modal" type="button">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
        
        <div class="reveal mv-open-modal" id="fitness-modal" data-reveal>
            <div class="grid-x">
                <div class="cell large-4">
                    <img src="{{ $image->getImageUrl($meta_data['fitness_icon'] ?? 0) }}" alt="">
                    <h3>FITNESS</h3>
                </div>
                <div class="cell large-8">
                    <p>{!! $meta_data['fitness_text'] !!}</p>
                </div>
            </div>
            <button class="close-button" data-close aria-label="Close modal" type="button">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        
        <div class="reveal mv-open-modal" id="community-modal" data-reveal>
            <div class="grid-x">
                <div class="cell large-4">
                    <img src="{{ $image->getImageUrl($meta_data['community_icon'] ?? 0) }}" alt="">
                    <h3>COMMUNITY</h3>
                </div>
                <div class="cell large-8">
                    <p>{!! $meta_data['community_text'] !!}</p>
                </div>
            </div>
            <button class="close-button" data-close aria-label="Close modal" type="button">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @include('partials.master-content-block-wrapper', [
            'html_content' => $content->html_content
        ])
    </div>
</section>
@endsection
