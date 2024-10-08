<!-- Start Header Navbar Area -->
<header id="zr-theme-menu" class="zr-theme-menu-header-navber-area">

    {{-- view cart start modalka--}}
    <div class="nav-top-bar">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <a class="navbar-brand js-scroll d-web btn" href="/">
                        <img src="{{ asset('storage/' . str_replace('\\', '/', $site->logo)) }}" alt="logo">
                    </a>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="call-to-action">
                        <div class="top-info">
                            <i class="fa fa-map-pin"></i>
                            <p><span class="theme-color"><x-translation key="address" /></span><span><a class="text-dark"
                                        href="https://www.google.com/maps/place/Tayhu/@41.3889256,69.2801609,653m/data=!3m2!1e3!4b1!4m6!3m5!1s0x38ae8d4eb3c71ab7:0x29734a4e8feeaa44!8m2!3d41.3889256!4d69.2827358!16s%2Fg%2F11pc4ryj7p?entry=ttu&g_ep=EgoyMDI0MDkyNC4wIKXMDSoASAFQAw%3D%3D"
                                        target="_blank"><x-translation key="location_text" /></a></span></p>
                        </div>
                        <div class="top-info">
                            <i class="fa fa-phone"></i>
                            <p><span class="theme-color"><x-translation key="phone" /></span><a class="text-dark"
                                    href="{{$site->phone_1}}"><span> {{$site->phone_1}}</span></a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 info-menu">
                    <nav class="navbar navbar-expand-lg navbar-light top-menu-one">
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav flex-end">
                                <li class="nav-item dropdown border-right">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        @if(app()->getLocale() == 'en')
                                        EN
                                        @elseif(app()->getLocale() == 'uz')
                                        UZ
                                        @else
                                        RU
                                        @endif
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
                                        <form method="POST" action="{{ route('change.language') }}">
                                            @csrf
                                            <button type="submit" name="lang" value="en" class="dropdown-item">
                                                <span class="fi fi-gb" style="font-size: 16px;"></span> Английский
                                            </button>
                                            <button type="submit" name="lang" value="ru" class="dropdown-item">
                                                <span class="fi fi-ru" style="font-size: 16px;"></span> Русский
                                            </button>
                                            <button type="submit" name="lang" value="uz" class="dropdown-item">
                                                <span class="fi fi-ru" style="font-size: 16px;"></span> Узбекский
                                            </button>
                                        </form>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>

            </div>
        </div>
    </div>

    {{-- view cart end modalka--}}


    <nav class="navbar navbar-b navbar-trans navbar-expand-lg" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll d-mobile" href="/">
                <img src="{{ asset('storage/' . str_replace('\\', '/', $site->logo)) }}" alt="logo">
            </a>
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
                data-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false"
                aria-label="Toggle navigation"> <span></span> <span></span> <span></span>
            </button>
            <div class="top-social-icon">
                <a href="{{$site->facebook_link}}"><i class="fa-brands fa-facebook-f facebook-bg"></i></a>
                <a href="{{$site->telegram_link}}"><i class="fa-brands fa-telegram"></i></a>
                <a href="{{$site->youtube_link}}"><i class="fa-brands fa-youtube youtube-bg"></i></a>
                <a href="{{$site->instagram_link}}"><i class="fa-brands fa-instagram instagram-bg"></i></a>
            </div>
            <div class="navbar-collapse collapse" id="navbarDefault">
                <ul class="navbar-nav flex-between">
                    <li class="nav-item"><a class="nav-link js-scroll" href="{{route('home')}}"><x-translation key="home_link" />
                        </a></li>
                    <li class="nav-item"><a class="nav-link js-scroll" href="{{route('about')}}"><x-translation key="about_link" /></a></li>
                    <li class="nav-item"><a class="nav-link js-scroll" href="{{route('catalog')}}"><x-translation key="catalog_link" /></a></li>
                    <li class="nav-item"><a class="nav-link js-scroll" href="{{route('projects')}}"><x-translation key="project_link" /></a></li>
                    <li class="nav-item"><a class="nav-link js-scroll" href="{{route('team')}}"><x-translation key="team_link" /></a></li>
                    <li class="nav-item"><a class="nav-link js-scroll" href="{{route('blog')}}"><x-translation key="blog_link" /></a></li>
                    <li class="nav-item"><a class="nav-link js-scroll" href="{{route('showroom')}}"><x-translation key="showroom_link" /></a></li>

                    <li class="nav-item"><a class="nav-link js-scroll" href="{{route('contact')}}"><x-translation key="contact_link" /></a></li>
                    <li class="nav-item"><a class="theme-button-dark" href="{{route('contact')}}"><x-translation key="help_link" /><span></span></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<!-- End Header Navbar Area -->