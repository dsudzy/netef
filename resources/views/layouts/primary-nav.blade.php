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
            <ul class="vertical medium-horizontal menu">
                <li class="nav-home"><a href="/">home</a></li>
                <li><a href="/who-we-support">who we support</a></li>
                <li><a href="/grants">grants</a></li>
                <li><a href="/our-stories">our stories</a></li>
                <li><a href="/about-us">about us</a></li>
            </ul>
        </div>
        <div class="top-bar-right">
            <ul class="menu">
                <li>@include("partials.donate")</li>
                <li><img src="/img/NETEF_Informal.png" alt="Logo"></li>
            </ul>
        </div>
    </div>
</nav>