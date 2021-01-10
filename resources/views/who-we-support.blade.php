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
    <div class="bg-img-top" style="background-image:url( {{ $content->getHeader()->getHeaderImage() }} )"></div>
    <img class="header-img" src="{{ $content->getHeader()->getHeaderImage() }}" alt="">
</div>

<section>
    @foreach($content->getTextBlocks() as $key => $text_block)
        <div class="content-wrapper {{ $key == 1 ? 'second-wrapper' : ''  }}">
            <div>
                <div class="grid-x">
                    <div class="cell">
                        <h2>{{ $text_block->getHeader() }}</h2>
                    </div>
                </div>
                <div class="grid-x">
                    <div class="cell">
                        <p> {!! $text_block->getBody() !!} </p>
                    </div>
                </div>
                <div class="grid-x">
                    <div class="cell">
                        <button class="hollow button" href="{{ $text_block->getButtonLink() }}">{{ $text_block->getButtonText() }}</button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</section>
@endsection
