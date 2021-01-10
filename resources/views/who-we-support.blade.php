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
    <div class="bg-img-top" style="background-image:url( {{ $header_image }} )"></div>
    <img class="header-img" src="{{ $header_image }}" alt="">
</div>
<section>
    @if(isset($content["header_1"]))
        <div class="content-wrapper">
            <div>
                <div class="grid-x">
                    <div class="cell">
                        <h2>{{ $content["header_1"] }}</h2>
                    </div>
                </div>
                <div class="grid-x">
                    <div class="cell">
                        <p> {!! $content["body_1"] !!} </p>
                    </div>
                </div>
                <div class="grid-x">
                    <div class="cell">
                        <button class="hollow button" href="{{ $content["button_link_1"] }}">{{ $content["button_text_1"] }}</button>
                    </div>
                </div>
            </div>
        </div>
    @endif
        
    @if(isset($content["header_2"]))
        <div class="content-wrapper second-wrapper">
            <div>
                <div>
                    <div class="grid-x">
                        <div class="cell">
                            <h2>{{ $content["header_2"] }}</h2>
                        </div>
                    </div>
                    <div class="grid-x">
                        <div class="cell">
                            <p> {!! $content["body_2"] !!} </p>
                        </div>
                    </div>
                    <div class="grid-x">
                        <div class="cell">
                            <button class="hollow button" href="{{ $content["button_link_2"] }}">{{ $content["button_text_2"] }}</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
</section>
@endsection
