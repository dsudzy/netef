<!DOCTYPE html>
    <head>
        @section('meta')
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
            {{-- @if (isset($meta_data['meta_description'])) --}}
                {{-- <meta name="description" content="{{ $meta_data['meta_description'] }}"> --}}
            {{-- @endif --}}
        @show

        <!--  social meta -->
        {{-- <meta property="og:title" content="{{{ $content->post_title or 'Netef' }}}" />
        <meta name="twitter:title" content="{{{ $content->post_title or 'Netef' }}}" />
        <meta property="og:description" content="{{{ $meta_data["meta_description"] or '' }}}">
        <meta name="twitter:description" content="{{{ $meta_data["meta_description"] or '' }}}" />
        <meta property="og:image" content="{{ $meta_data["meta_image"] or '' }}" />
        <meta name="twitter:image:src" content="{{ $meta_data["meta_image"] or '' }}" />
        <meta property="og:url" content="{{ secure_url(Request::path()) }}" />
        <meta name="twitter:site" content="" />
        <meta name="twitter:creator" content="" />
        <meta name="twitter:card" content="summary" />
        <meta property="og:type" content="website" /> --}}

        <link rel="stylesheet" href="/css/app.css">
        <title>New England Tennis &amp; Education Foundation - @yield('title')</title>
    </head>
    <body>
        @include('layouts.primary-nav')
        <section class="content">
            @yield('content')
        </section>

        @section('footer')
            @include('layouts.footer')
        @show
        <script src="/js/app.js"></script>
    </body>
</html>
