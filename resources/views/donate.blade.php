@extends('layouts.master')

@section('social-meta')
    @parent
    <meta property="og:image" content="" />
    <meta name="twitter:image:src" content="" />

    <!--  end social meta -->
@endsection

@section('title', 'Donate')

@section('nav')
    @include('layouts.primary-nav')
@endsection

@section('content')

<section>
    <div class="grid-x">
        <div class="cell donate-wrapper">
            <div class="donate-item">
                <iframe class="donate-iframe" src="https://usta.kindful.com/embeds/33c00469-cd91-41e6-93a8-4fd21c111d1c" frameborder="0"></iframe>
            </div>
        </div>
    </div>
</section>
@endsection
