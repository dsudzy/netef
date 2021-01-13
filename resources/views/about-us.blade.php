@extends('layouts.master-test')

@section('social-meta')
    @parent
    <meta property="og:image" content="" />
    <meta name="twitter:image:src" content="" />

    <!--  end social meta -->
@endsection

@section('title', 'About Us')

@section('nav')
    @include('layouts.primary-nav')
@endsection

@section('content')
{{-- <div class="header-img-container">
    <div class="bg-img-top" style="background-image:url( {{ $content->header->header_image }} )"></div>
    <img class="header-img" src="{{ $content->header->header_image }}" alt="">
</div> --}}

<section>
    <div class="content-wrapper">
        <div>
            <div class="grid-x callout-wrapper">
                <div class="cell large-6">
                    <img class="header-img" src="https://via.placeholder.com/330x200" alt="">
                </div>
                <div class="cell large-6">
                    <a href="{{ $content->board_application_link }}"><img class="header-img" src="https://via.placeholder.com/330x200" alt=""></a>
                </div>
            </div>
            <div class="grid-x button-wrapper">
                <div class="cell large-6">
                    <button class="button" href="{{ $content->donate_button->button_link }}">{{ $content->donate_button->button_text }}</button>
                </div>
            </div>
        </div>
    </div>
    <div class="bylaws-wrapper">
        <div class="inner-wrapper">
            <div class="grid-x">
                <div class="cell">
                    <p>{!! $content->board_of_directors_text !!}</p>
                </div>
            </div>
            <div class="grid-x button-wrapper">
                <div class="cell large-6">
                    <button class="button" href="{{ $content->button_1_link }}">{{ $content->button_1_text }}</button>
                </div>
                <div class="cell large-6">
                    <button class="button" href="{{ $content->button_2_link }}">{{ $content->button_2_text }}</button>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
