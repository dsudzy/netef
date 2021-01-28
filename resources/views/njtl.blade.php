@extends('layouts.master-test')

@section('social-meta')
    @parent
    <meta property="og:image" content="" />
    <meta name="twitter:image:src" content="" />

    <!--  end social meta -->
@endsection

@section('title', 'njtl')

@section('nav')
    @include('layouts.primary-nav')
@endsection

@section('content')
<div class="header-img-container">
    <div class="bg-img-top" style="background-image:url( https://via.placeholder.com/1440x600 )"></div>
    <img class="header-img" src="https://via.placeholder.com/1440x600" alt="">
</div>

<section>
        <div class="content-wrapper">
            <div>
                <div class="grid-x">
                    <div class="cell">
                        <h2>national junior tennis & learning <span class="color-black">(NJTL)</span></h2>
                    </div>
                </div>

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
                <div class="grid-x">
                    <div class="cell">
                        <p>The concept for National Junior Tennis and Learning (NJTL) started back in 1969 when Arthur Ashe, Charlie Pasarell and Sheridan Snyder co-founded the National Junior Tennis League. The three friends envisioned the NJTL as a way to reach young, inner-city youth and use tennis as a platform to teach them the importance of character, getting an education and becoming productive citizens.<br><br>
 
                            Today, NJTL stands for National Junior Tennis and Learning but the goals remain the same. There are 300 NJTL chapters around the country, impacting around 180,000 under-resourced youth each year. These chapters offer free or low-cost after-school tutoring that focuses on academic enrichment, a life-skills curriculum, and tennis. The national USTA Foundation supports the NJTL Network.<br><br>
                             
                            The New England Tennis and Education Foundation further supports the 16 New England Chapters that impact around 13,000 youth every year spanning six states. We provide grants and other assistance to these organizations to further support their missions in their local communities.<br><br>
                             </p>
                    </div>
                </div>
            </div>
        </div>
</section>
@endsection
