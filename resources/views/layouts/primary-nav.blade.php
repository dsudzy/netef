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
            <ul class="menu">
                <li class="dropdown">
                    <a href="/who-we-support" class="top-nav-item">who we support</a>
                    <ul class="vertical menu dropdown-content">
                        <li><a href="/njtl">NJTL</a></li>
                        <li><a href="/player-support">player support</a></li>
                        <li><a href="wheelchair-and-adaptive">wheelchair &amp; <br>adaptive</a></li>
                    </ul>
                </li>
                <li class="single-nav-item"><a href="/our-stories">our stories</a></li>
                <li class="dropdown">
                    <a href="/about-us" class="top-nav-item">about us</a>
                    <ul class="vertical menu dropdown-content">
                        <li><a href="/mission-and-vision">mission &amp; vision</a></li>
                        <li><a href="/board-of-directors">board of directors</a></li>
                        <li><a href="/voluneer-with-us">volunteer with us</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="/support-us" class="top-nav-item">support us</a>
                    <ul class="vertical menu dropdown-content">
                        <li><a href="/events">events</a></li>
                        <li><a href="/donate">donate</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="/grants" class="top-nav-item">grants</a>
                    <ul class="vertical menu dropdown-content">
                        <li><a href="/player-grants">player grants</a></li>
                        <li><a href="/njtl-grants">NJTL grants</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="top-bar-right">
            <ul class="menu">
                <li></li>
                <li><a href="/" class="header-logo"><img src="/img/NETEF_Informal.png" alt="Logo"></a></li>
            </ul>
        </div>
    </div>
</nav>