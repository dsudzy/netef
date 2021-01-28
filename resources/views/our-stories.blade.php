@extends('layouts.master-test')

@section('social-meta')
    @parent
    <meta property="og:image" content="" />
    <meta name="twitter:image:src" content="" />

    <!--  end social meta -->
@endsection

@section('title', 'our stories')

@section('nav')
    @include('layouts.primary-nav')
@endsection

@section('content')
<div class="header-img-container">
    <div class="bg-img-top" style="background-image:url( '/img/headers/player_support.png' )"></div>
    <img class="header-img" src="/img/headers/player_support.png" alt="">
</div>

<section>
    <div class="content-wrapper">
        <div class="grid-x">
            <div class="cell">
                <div>
                    <h2>story 1</h2>
                    <p>Pudam quamus ut aliquos atestempos quis et arunt hiliqui quatetur sum vel mos earcitis sum eum rehenda eptissi re officium remodit, nulpa natures deniet lignatu riosti odi verovit, quae lab ilis maximod igendit voluptate nossit autenim olenihicab idionse quissition repudis.</p>
                </div>
            </div>
        </div>

        <div class="stories-wrapper">
            <div class="grid-x">
                <div class="cell large-6 image-wrapper">
                    <img src="https://via.placeholder.com/400x400" alt="">
                </div>
                <div class="cell large-6 text-wrapper">
                    <div>
                        <h2>story 2</h2>
                        <p>Pudam quamus ut aliquos atestempos quis et arunt hiliqui quatetur sum vel mos earcitis sum eum rehenda eptissi re officium remodit, nulpa natures deniet lignatu riosti odi verovit, quae lab ilis maximod igendit voluptate nossit autenim olenihicab idionse quissition repudis.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="stories-wrapper">
            <div class="grid-x">
                <div class="cell large-6 text-wrapper">
                    <div>
                        <h2>story 3</h2>
                        <p>Pudam quamus ut aliquos atestempos quis et arunt hiliqui quatetur sum vel mos earcitis sum eum rehenda eptissi re officium remodit, nulpa natures deniet lignatu riosti odi verovit, quae lab ilis maximod igendit voluptate nossit autenim olenihicab idionse quissition repudis.</p>
                    </div>
                </div>
                <div class="cell large-6 image-wrapper">
                    <img src="https://via.placeholder.com/400x400" alt="">
                </div>
            </div>
        </div>

        <div class="stories-wrapper">
            <div class="grid-x">
                <div class="cell large-6 image-wrapper">
                    <img src="https://via.placeholder.com/400x400" alt="">
                </div>
                <div class="cell large-6 text-wrapper">
                    <div>
                        <h2>story 4</h2>
                        <p>Pudam quamus ut aliquos atestempos quis et arunt hiliqui quatetur sum vel mos earcitis sum eum rehenda eptissi re officium remodit, nulpa natures deniet lignatu riosti odi verovit, quae lab ilis maximod igendit voluptate nossit autenim olenihicab idionse quissition repudis.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="stories-wrapper">
            <div class="grid-x">
                <div class="cell large-6 text-wrapper">
                    <div>
                        <h2>story 5</h2>
                        <p>Pudam quamus ut aliquos atestempos quis et arunt hiliqui quatetur sum vel mos earcitis sum eum rehenda eptissi re officium remodit, nulpa natures deniet lignatu riosti odi verovit, quae lab ilis maximod igendit voluptate nossit autenim olenihicab idionse quissition repudis.</p>
                    </div>
                </div>
                <div class="cell large-6 image-wrapper">
                    <img src="https://via.placeholder.com/400x400" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
