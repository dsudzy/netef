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
    <div class="content-wrapper">
        <div>
            <div class="grid-x">
                <div class="cell">
                    <h2>national junior tennis & learning (NJTL)</h2>
                </div>
            </div>
            <div class="grid-x">
                <div class="cell">
                    <p>
                        The concept of NJTL started back in 1969 when Arthur Ashe, Charlie Pasarell and Sheridan Snyder co-founded the National Junior Tennis League. The three friends envisioned the NJTL as way to reach young, inner-city youth and use tennis as a platform to teach them the importance of character, getting an education and becoming productive citizens.<br><br>
                        Today, NJTL stands for National Junior Tennis and Learning. The goals remain the same and are upheld by 300 nonprofit youth organizations (called NJTL Chapters) around the country.<br><br>
                        Impacting about 180,000 under-resourced youth each year, these chapters offer free or low-cost after-school tutoring that focuses on academic enrichment, a life-skills curriculum, and tennis. The USTA Foundation supports the NJTL Network.<br><br>
                        In New England, the New England Tennis and Education Foundation further supports the 16 New England Chapters that impact around 13,000 youth every year.
                    </p>
                </div>
            </div>
            <div class="grid-x">
                <div class="cell">
                    <button class="hollow button" href="#">discover jdev</button>
                </div>
            </div>
        </div>
    </div>
    <div class="content-wrapper second-wrapper">
        <div>
            <div class="grid-x">
                <div class="cell">
                    <h2>national junior tennis & learning (NJTL)</h2>
                </div>
            </div>
            <div class="grid-x">
                <div class="cell">
                    <p>
                        The concept of NJTL started back in 1969 when Arthur Ashe, Charlie Pasarell and Sheridan Snyder co-founded the National Junior Tennis League. The three friends envisioned the NJTL as way to reach young, inner-city youth and use tennis as a platform to teach them the importance of character, getting an education and becoming productive citizens.<br><br>
                        Today, NJTL stands for National Junior Tennis and Learning. The goals remain the same and are upheld by 300 nonprofit youth organizations (called NJTL Chapters) around the country.<br><br>
                        Impacting about 180,000 under-resourced youth each year, these chapters offer free or low-cost after-school tutoring that focuses on academic enrichment, a life-skills curriculum, and tennis. The USTA Foundation supports the NJTL Network.<br><br>
                        In New England, the New England Tennis and Education Foundation further supports the 16 New England Chapters that impact around 13,000 youth every year.
                    </p>
                </div>
            </div>
            <div class="grid-x">
                <div class="cell">
                    <button class="hollow button" href="#">discover jdev</button>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
