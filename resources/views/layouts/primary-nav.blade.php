<nav class="primary-nav">
    <div class="title-bar" data-responsive-toggle="example-menu" data-hide-for="medium">
        <div class="title-bar-title">
            <img src="/img/NETEF_Informal.svg" alt="Logo">
        </div>
        @include("partials.donate", ['title' => 'tap here to donate'])
        <button class="menu-icon" type="button" data-toggle="example-menu"></button>
    </div>
    <div class="top-bar" id="example-menu">
        <div class="top-bar-left">
            <ul class="vertical medium-horizontal menu" data-responsive-menu="drilldown medium-dropdown">
                {{-- <li class="nav-home"><a href="/">home</a></li> --}}
                <li>
                    <a href="/who-we-support">who we support</a>
                    {{-- <ul class="vertical menu">
                        <li><a href="/njtl">NJTL</a></li>
                        <li><a href="/player-support">player support</a></li>
                        <li><a href="wheelchair-and-adaptive">wheelchair &amp; <br>adaptive</a></li>
                    </ul> --}}
                </li>
                <li><a href="/our-stories">our stories</a></li>
                <li>
                    <a href="/about-us">about us</a>
                    {{-- <ul class="vertical menu">
                        <li><a href="/mission-and-vision">mission &amp; vision</a></li>
                        <li><a href="/board-of-directors">board of directors</a></li>
                        <li><a href="/voluneer-with-us">volunteer with us</a></li>
                    </ul> --}}
                </li>
                <li>
                    <a href="/support-us">support us</a>
                    {{-- <ul class="vertical menu">
                        <li><a href="/events">events</a></li>
                        <li><a href="/donate">donate</a></li>
                    </ul> --}}
                </li>
                <li>
                    <a href="/grants">grants</a>
                    {{-- <ul class="vertical menu">
                        <li><a href="/player-grants">player grants</a></li>
                        <li><a href="/njtl-grants">NJTL grants</a></li>
                    </ul> --}}
                </li>
            </ul>
        </div>
        <div class="top-bar-right">
            <ul class="menu">
                <li>@include("partials.donate")</li>
                <li><a href="/" class="header-logo"><img src="/img/NETEF_Informal.png" alt="Logo"></a></li>
            </ul>
        </div>
    </div>
</nav>