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
    <div class="content-wrapper">
        <h2>about us</h2>
        <p>The New England Tennis & Education Foundation is the 501c3 philanthropic arm of the United States Tennis Association of New England. Established in 2019, our mission is to create life-changing opportunities through tennis, education, and wellness, with a focus on, but not limited to, youth. 
            <br><br>

            Our priority is to make tennis accessible for everyone in New England. We achieve this goal with the help of our gracious donors and many different tennis and education organizations, including National Junior Tennis and Learning Chapters (NJTLs).
            </p>
        <div class="intersitial-link-wrapper">
            {{-- <a href="mission-and-vision"> --}}
                <div class="intersitial-item">
                    <div class="grey-scale"></div>
                    <h3>mission and vision</h3>
                    <img src="/img/previews/mission_vision_preview.png" alt="">
                </div>
            {{-- </a> --}}
            {{-- <a href="board-of-directors"> --}}
                <div class="intersitial-item">
                    <div class="grey-scale"></div>
                    <h3>board of directors</h3>
                    <img src="" alt="">
                </div>
            {{-- </a> --}}
            {{-- <a href="volunteer-with-us"> --}}
                <div class="intersitial-item">
                    <div class="grey-scale"></div>
                    <h3>volunteer with us</h3>
                    <img src="/img/previews/volunteer_preview.png" alt="">
                </div>
            {{-- </a> --}}
        </div>
    </div>
</section>
@endsection
