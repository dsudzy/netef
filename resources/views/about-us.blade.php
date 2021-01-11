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
                    <img class="header-img" src="https://via.placeholder.com/330x200" alt="">
                </div>
            </div>
            <div class="grid-x button-wrapper">
                <div class="cell large-6">
                    <button class="button" href="">click here to make a donation to New England Tennis & Education Foundation</button>
                </div>
            </div>
        </div>
    </div>
    <div class="bylaws-wrapper">
        <div class="inner-wrapper">
            <div class="grid-x">
                <div class="cell">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas metus nisi, scelerisque et vehicula sed, vehicula eget mi. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aliquam purus nunc, ultricies et diam in, dignissim facilisis nibh. Nam ac pretium lorem. Cras mi nulla, volutpat efficitur laoreet non, pulvinar vitae massa. Curabitur pretium tortor quis erat molestie, vitae consequat massa aliquet. Etiam sed justo ipsum. Praesent </p>
                </div>
            </div>
            <div class="grid-x button-wrapper">
                <div class="cell large-6">
                    <button class="button" href="">board of directors</button>
                </div>
                <div class="cell large-6">
                    <button class="button" href="">bylaws</button>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
