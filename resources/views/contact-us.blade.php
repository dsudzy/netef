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
            <div class="cell large-8 contact-info-wrapper">
                <div class="contact-info">
                    <img src="{{ $image->getImageUrl($meta_data['logo']) ?? 0 }}" alt="NETEF Logo">
                    <h2>contact</h2>
                    <h3>{!! $meta_data['address'] ?? '' !!}</h3>
                    <p>{!! $meta_data['additional-text'] ?? '' !!}</p>
                </div>
            </div>
            <div class="cell large-4 contact-form-wrapper">
                <form method="POST" action="/contact-us">
                    @csrf
                    <input id="name" name="name" type="text" placeholder="name" required>
                    <input id="email_address" name="email_address" type="email" placeholder="email" required>
                    <textarea id="message" name="message" rows="7" cols="100" placeholder="type your message here" required></textarea>
                    <button class="button submit-button" type="submit">send</button>
                </form>
                @if(session('status'))
                    <div class="callout success">
                        {{ session('status') }}
                    </div>
                @endif
            </div>
        </div>
    </div>
</section>
@endsection
