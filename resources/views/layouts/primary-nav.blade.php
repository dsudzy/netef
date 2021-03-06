<nav class="primary-nav">
    {{-- desktop nav --}}
    <div class="menu-bar">
        <div class="menu-bar-left">
            <ul class="menu-list">
                <li class="menu-item dropdown-item" data-page-name="who-we-support">
                    <a href="/who-we-support" class="top-nav-item">who we support</a>
                    <ul class="vertical menu dropdown-content">
                        @include('partials.primary-nav-items.who-we-support')
                    </ul>
                </li>
                <li class="menu-item dropdown-item single-nav-item" data-page-name="our-stories">
                    <a href="/our-stories">our stories</a>
                </li>
                <li class="menu-item dropdown-item" data-page-name="about-us">
                    <a href="/about-us" class="top-nav-item">about us</a>
                    <ul class="vertical menu dropdown-content">
                        @include('partials.primary-nav-items.about-us')
                    </ul>
                </li>
                <li class="menu-item dropdown-item" data-page-name="support-us">
                    <a href="/support-us" class="top-nav-item">support us</a>
                    <ul class="vertical menu dropdown-content">
                        @include('partials.primary-nav-items.support-us')
                    </ul>
                </li>
                <li class="menu-item dropdown-item" data-page-name="grants">
                    <a href="/grants" class="top-nav-item">grants</a>
                    <ul class="vertical menu dropdown-content">
                        @include('partials.primary-nav-items.grants')
                    </ul>
                </li>
            </ul>
        </div>
        <div class="menu-bar-right">
            <ul class="menu">
                <li></li>
                <li>
                    <a href="/" class="header-logo">
                        <img src="/img/NETEF_Informal.png" alt="Logo">
                    </a>
                </li>
            </ul>
        </div>
    </div>

    {{-- mobile nav --}}
    <div class="title-bar" data-responsive-toggle="example-menu" data-hide-for="medium">
        <div class="title-bar-title">
            <a href="/">
                <img src="/img/NETEF_Informal.png" class="mobile-black-logo" alt="Logo">
                <img src="/img/NETEF_Informal_Reverse.png" class="mobile-white-logo" alt="Logo">
            </a>
        </div>
        <button class="menu-icon" type="button" data-toggle="example-menu"></button>
    </div>
    <div class="top-bar" id="example-menu" style="display: none">
        <div class="top-bar-left">
            <ul class="vertical menu accordion-menu" data-accordion-menu>
                <li>
                    <a href="#">who we support</a>
                    <ul class="menu vertical nested">
                        @include('partials.primary-nav-items.who-we-support')
                    </ul>
                </li>
                <li>
                    <a href="/our-stories">our stories</a>
                </li>
                <li>
                    <a href="#">about us</a>
                    <ul class="menu vertical nested">
                        @include('partials.primary-nav-items.about-us')
                    </ul>
                </li>
                <li>
                    <a href="#">support us</a>
                    <ul class="menu vertical nested">
                        @include('partials.primary-nav-items.support-us')
                    </ul>
                </li>
                <li>
                    <a href="#">grants</a>
                    <ul class="menu vertical nested">
                        @include('partials.primary-nav-items.grants')
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>