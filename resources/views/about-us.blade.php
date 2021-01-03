@extends('layouts.master')

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
<main class="row">
    <div class="columns medium-8">
        <div class="post-content">
            {{-- {!! $content->html_content !!} --}}
        </div>
    </div>
</main>
@endsection
