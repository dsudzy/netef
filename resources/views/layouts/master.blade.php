<!DOCTYPE html>
    <head>
        @section('meta')
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
            @if (isset($meta_data['meta_description']))
                <meta name="description" content="{{ $meta_data['meta_description'] }}">
            @endif
        @show

        <!--  social meta -->
        <meta property="og:title" content="{{{ $content->post_title or 'Netef' }}}" />
        <meta name="twitter:title" content="{{{ $content->post_title or 'Netef' }}}" />
        <meta property="og:description" content="{{{ $meta_data["meta_description"] or '' }}}">
        <meta name="twitter:description" content="{{{ $meta_data["meta_description"] or '' }}}" />
        <meta property="og:image" content="{{ $meta_data["meta_image"] or '' }}" />
        <meta name="twitter:image:src" content="{{ $meta_data["meta_image"] or '' }}" />
        <meta property="og:url" content="{{ secure_url(Request::path()) }}" />
        <meta name="twitter:site" content="" />
        <meta name="twitter:creator" content="" />
        <meta name="twitter:card" content="summary" />
        <meta property="og:type" content="website" />

        <link rel="stylesheet" href="/css/app.css">

        @if (!empty(Config::get('app.googleTagManager.id')))
            <!-- Google Tag Manager -->
            <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
            })(window,document,'script','dataLayer','{{ Config::get('app.googleTagManager.id') }}');</script>
            <!-- End Google Tag Manager -->
        @endif
        <title>New England Tennis &amp; Education Foundation - @yield('title')</title>
    </head>
    <body class="@if (isset($body_classes)){{ $body_classes }}@endif" data-nav-box="{{ $meta_data['navigation'] or '' }}">
        @if (!empty(Config::get('app.googleTagManager.id')))
            <!-- Google Tag Manager (noscript) -->
            <noscript><iframe src="https://www.googletagmanager.com/ns.html?id={{ Config::get('app.googleTagManager.id') }}"
            height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
            <!-- End Google Tag Manager (noscript) -->   
        @endif
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
