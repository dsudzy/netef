@extends('layouts.master-test')

@section('social-meta')
    @parent
    <meta property="og:image" content="" />
    <meta name="twitter:image:src" content="" />

    <!--  end social meta -->
@endsection

@section('title', 'wheelchair and adaptive')

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
                        <h2>wheelchair and adaptive</h2>
                        <p>One of the greatest things about tennis is that it can be adapted so everyone can participate in the sport. People of any age, environment, condition or ability are invited to enjoy the game. As part of our mission to support inclusive tennis opportunities, we award grants to a number of  programs and organizations in New England who run Wheelchair Tennis and/or Adaptive Tennis for all ages and backgrounds.
<br>
<br>
                            Wheelchair Tennis is specially designed for players who have physical limitations while Adaptive Tennis is custom designed for players with cognitive limitations. 
                            </p>
                    </div>
                </div>
                <div class="grid-x">
                    <div class="cell">
                        <a href="https://www.usta.com/en/home/play/adult-tennis/programs/newengland/wheelchair-tennis.html" target="_blank"><button class="hollow button">learn more about the programs in New England</button></a>
                    </div>
                </div>
            </div>
        </div>
</section>
@endsection
