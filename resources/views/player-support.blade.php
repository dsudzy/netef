@extends('layouts.master-test')

@section('social-meta')
    @parent
    <meta property="og:image" content="" />
    <meta name="twitter:image:src" content="" />

    <!--  end social meta -->
@endsection

@section('title', 'player support')

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
            <div class="content-item">
                <div class="grid-x">
                    <div class="cell">
                        <h2>player support</h2>
                        <p>We believe that USTA Tournaments should be accessible to everyone. We are here to help those who want to play in tournaments and qualify for assistance. We have three different player grants detailed below.</p>
                    </div>
                </div>
            </div>
            
            <div class="content-item bordered">
                <div class="grid-x">
                    <div class="cell">
                        
                        <h2>reduced tournament fee program</h2>
                    
                        <p>Established in 2012, the goal of this program is to assist with tournament fees to ensure all players are able to play tennis competitively. 
                            Families of USTA juniors with a family taxable income (after adjustments and deductions) of $75,000 or less, and other families who may have extenuating circumstances, are encouraged to apply for the Reduced Tournament Fee Program. For families with two or more USTA juniors, the family taxable income threshold increases by $5,000 per additional junior, to a maximum of $90,000 taxable income.
                            
                            This program will run on a rolling basis and is sponsored by both the New England Tennis and Education Foundation and the participating host clubs. 
                            
                            Players accepted into the program will be able to enter designated tournaments at a 50% reduced rate. The other 50% is covered by the foundation and the host club.
                        </p>
                        <button class="hollow button" href="https://www.surveymonkey.com/r/MK62HHD">apply here</button>
                    </div>
                </div>
            </div>
            <div class="content-item">
                <div class="grid-x">
                    <div class="cell">
                        <h2>player grants</h2>
                    
                        <p>
                            We provide financial assistance for New England players who qualify, are in need and who are competing at the Level 1 National Championships and Level 2 National team events. Please fill out the Financial Assistance Grant Form if financial assistance is desired. All inquiries are kept strictly confidential.
                        </p>
                        <button class="hollow button" href="https://www.surveymonkey.com/r/7SQ9YDZ">financial assistance grant form</button>
                    </div>
                </div>
            </div>
            <div class="content-item bordered">
                <div class="grid-x">
                    <div class="cell">
                        <h2>USTA multicultural individual player grants</h2>
                    
                        <p>
                            Please contact Shawna Fors, Director of Player Development at the USTA New England section office for an application for these grants awarded to players for National Competition & Training. Shawna can be reached at shawna.fors@newengland.usta.com. 
                        </p>
                    </div>
                </div>
            </div>
        </div>
</section>
@endsection
