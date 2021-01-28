@extends('layouts.master-test')

@section('social-meta')
    @parent
    <meta property="og:image" content="" />
    <meta name="twitter:image:src" content="" />

    <!--  end social meta -->
@endsection

@section('title', 'Who We Support')

@section('nav')
    @include('layouts.primary-nav')
@endsection

@section('content')
<div class="header-img-container">
    <div class="bg-img-top" style="background-image:url( {{ $content->header->header_image }} )"></div>
    <img class="header-img" src="{{ $content->header->header_image }}" alt="">
</div>

<section>
    @foreach($content->text_blocks as $key => $text_block)
        <div class="content-wrapper">
            <div>
                <div class="grid-x">
                    <div class="cell">
                        <h2>{!! $text_block->header !!}</h2>
                    </div>
                </div>

                @if($key == 0)
                    <div class="grid-x sub-header-wrapper">
                        <div class="cell">
                            <ul>
                                <li class="no-top-padding"><div></div></li>
                                <li>Education</li>
                                <li>Life skills</li>
                                <li>Tennis</li>
                                <li><div></div></li>
                            </ul>
                        </div>
                    </div>
                @endif
                

                <div class="grid-x">
                    <div class="cell">
                        <p> {!! $text_block->body !!} </p>
                    </div>
                </div>
                <div class="grid-x video-wrapper">
                    <div class="cell">
                        <img class="header-img" src="{{ $text_block->video_link }}" alt="">
                    </div>
                </div>
                <div class="grid-x">
                    <div class="cell">
                        <button class="hollow button" href="{{ $text_block->button_link }}">{{ $text_block->button_text }}</button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</section>
@endsection