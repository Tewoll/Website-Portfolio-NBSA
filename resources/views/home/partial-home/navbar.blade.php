<header class="navbar navbar-expand-lg navbar-light bg-light fixed-top" data-scroll-header>
    <div class="container">
        <a class="navbar-brand me-3 me-xl-5" href="/">
            <img class="d-block" src={{ url('home/img/logo/nbsa-1.png') }} width="250" alt="NBSA Logo">
        </a>
        <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- <a class="btn btn-sm text-primary d-none d-lg-block order-lg-3" href="#signin-modal" data-bs-toggle="modal"><i class="fi-user me-2"></i>Sign in</a> -->
        <li class="nav-item dropdown d-none d-lg-block order-lg-3">
            <a href="#" class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                <img class="flag-icon" src="{{ url('home/img/flags/' . app()->getLocale() . '.png') }}" width="30">
                @if (App::isLocale('id')) 
                ID
                @elseif (App::isLocale('en'))
                EN
                @endif
            </a>
            <ul class="dropdown-menu">
                @if (App::isLocale('id'))
                <li>
                    <a href="{{ route('locale', 'en') }}" class="dropdown-item"><img class="flag-icon me-2" src="{{ url('home/img/flags/en.png') }}" width="20">EN</a>
                </li>
                @else
                    <a href="{{ route('locale', 'id') }}" class="dropdown-item"><img class="flag-icon me-2" src="{{ url('home/img/flags/id.png') }}" width="20">ID</a>
                @endif
            </ul>
        </li>

        <div class="collapse navbar-collapse order-lg-2" id="navbarNav">
            <ul class="navbar-nav navbar-nav-scroll" style="max-height: 35rem;">
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="/"><i
                            class="fi-home me-2"></i>{{ __('navbar.home') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('about') ? 'active' : '' }}" href="/about">{{ __('navbar.about') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('project') ? 'active' : '' }}" href="/project">{{ __('navbar.proyek') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('news') ? 'active' : '' }}" href="/news">{{ __('navbar.news') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('contact') ? 'active' : '' }}" href="/contact">{{ __('navbar.contact') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('privacy-policy') ? 'active' : '' }}"
                        href="/privacy-policy">{{ __('navbar.privacy') }}</a>
                </li>
                <li class="nav-item dropdown d-lg-none order-lg-3">
                    <a href="#" class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <img class="flag-icon" src="{{ url('home/img/flags/' . app()->getLocale() . '.png') }}" width="35">
                        @if (App::isLocale('id')) 
                        &nbsp;ID
                        @elseif (App::isLocale('en'))
                        &nbsp;EN
                        @endif
                    </a>
                    <ul class="dropdown-menu">
                        @if (App::isLocale('id'))
                        <li>
                            <a href="{{ route('locale', 'en') }}" class="dropdown-item"><img class="flag-icon me-2" src="{{ url('home/img/flags/en.png') }}" width="20">EN</a>
                        </li>
                        @else
                            <a href="{{ route('locale', 'id') }}" class="dropdown-item"><img class="flag-icon me-2" src="{{ url('home/img/flags/id.png') }}" width="20">ID</a>
                        @endif
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</header>
