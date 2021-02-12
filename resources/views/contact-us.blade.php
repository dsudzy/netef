@extends('layouts.master-test')

@section('social-meta')
    @parent
    <meta property="og:image" content="" />
    <meta name="twitter:image:src" content="" />

    <!--  end social meta -->
@endsection

@section('title', 'Contact Us')

@section('nav')
    @include('layouts.primary-nav')
@endsection

@section('content')
<section>
    <div class="contact-wrapper">
        <div class="grid-x">
            <div class="cell large-8">
                <img src="" alt="">
                <h2>contact</h2>
                <h3>
                    New England Tennis & Aducation Foundation<br/>
                    1234 Congress St. Boston MA 02110
                </h3>
                <p></p>
            </div>
            <div class="cell large-4">
                <input type="text" placeholder="name">
                <input type="text" placeholder="email">
                <textarea rows="7" cols="100" placeholder="type your message here"></textarea>
                <a href=""><button class="button">send</button></a>
            </div>
        </div>
    </div>
</section>
@endsection
