<!DOCTYPE html>
    <html class="no-js">
    <head>
        <meta charset="UTF-8">
        <!--  social meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
        <meta property="og:title" content="New England Tennis and Education Foundation" />
        <meta name="twitter:title" content="New England Tennis and Education Foundation" />
        <meta property="og:description" content="The New England Tennis & Education Foundation is the 501c3 philanthropic arm of the United States Tennis Association of New England">
        <meta name="twitter:description" content="The New England Tennis & Education Foundation is the 501c3 philanthropic arm of the United States Tennis Association of New England" />
        <meta property="og:image" content="/img" />
        <meta name="twitter:image:src" content="/img/NETEF_meta_1200x630.png" />
        <meta property="og:url" content="{{ secure_url(Request::path()) }}" />
        <meta name="twitter:site" content="" />
        <meta name="twitter:creator" content="" />
        <meta name="twitter:card" content="summary" />
        <meta property="og:type" content="website" />

        <!--  favicon stuff -->
        <link rel="icon" type="image/png" href="/img/favicon/favicon_96x96.png" sizes="96x96" />
        <link rel="icon" type="image/png" href="/img/favicon/favicon_32x32.png" sizes="32x32" />
        <link rel="icon" type="image/png" href="/img/favicon/favicon_16x16.png" sizes="16x16" />
        <link rel="icon" type="image/png" href="/img/favicon/favicon_128x128.png" sizes="128x128" />
        <link rel="icon" type="image/png" href="/img/favicon/favicon_196x196.png" sizes="196x196" />
        <meta name="application-name" content="&nbsp;"/>

        <script>
            window.page = "{{ $content->post_name ?? ''}}";
        </script>
        <script src='https://usta.kindful.com/embeds/33c00469-cd91-41e6-93a8-4fd21c111d1c/init.js' data-embed-id='33c00469-cd91-41e6-93a8-4fd21c111d1c' data-lookup-type='jquery-selector' data-lookup-value='#kindful-donate-btn-33c00469-cd91-41e6-93a8-4fd21c111d1c'></script>

        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cabin">
        <link rel="stylesheet" href="/css/app.css">
        <title>New England Tennis &amp; Education Foundation - @yield('title')</title>
    </head>
    <body class="@if (isset($body_classes)){{ $body_classes }}@endif">
        <div class="layout-wrapper">
            @include('layouts.primary-nav')

            <section class="content">
                @yield('content')
            </section>

            <a href="javascript:;" data-open="exampleModal1">
                <div class="draggable">
                    <img src="/img/donate-button.png" class="floating-donate-button" alt="Floating Donate Button">
                    <p>donate</p>
                </div>
            </a>
            <div class="reveal donate-modal" id="exampleModal1" data-reveal>
                <iframe class="donate-iframe" src="https://usta.kindful.com/embeds/33c00469-cd91-41e6-93a8-4fd21c111d1c" frameborder="0"></iframe>
                <button class="close-button" data-close aria-label="Close Accessible Modal" type="button">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>

        @section('footer')
            @include('layouts.footer')
        @show
        <script src="/js/app.js"></script>
    </body>
</html>
