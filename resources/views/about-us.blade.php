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
<div class="header-img-container">
    <div class="bg-img-top" style="background-image:url( {{ $content->header->header_image }} )"></div>
    <img class="header-img" src="{{ $content->header->header_image }}" alt="">
</div>

<section>
    {{-- <div class="content-wrapper">
        <div>
            <div class="grid-x">
                <div class="cell">
                    <p>{{ $content->text_block }}</p>
                </div>
            </div>
            <div class="grid-x">
                <div class="cell">
                    <img class="header-img" src="https://via.placeholder.com/700x400" alt="">
                </div>
            </div>
        </div>
    </div> --}}
</section>
@endsection
