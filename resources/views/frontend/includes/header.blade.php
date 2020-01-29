<!-- Header -->
<header class="header">
    <div class="header-top bg-theme-colored sm-text-center p-0">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="widget no-border m-0 mt-10">
                        <ul class="list-inline sm-text-center">
                            <li>
                                <div class="dropdown">
                                    <div class="dropdown-toggle d-flex align-items-center" id="dropdownMenuButton1"
                                        role="menu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                                        <a class="dropdown-item" data-lang="en"
                                            href="{{ '/lang/'.app()->getLocale() }}"><img
                                                src="{{asset('frontend/img/en.jpg')}}" alt=""><i
                                                class="flag-icon flag-icon-us"></i>@lang('menus.language-picker.langs.'.app()->getLocale())</a>

                                    </div>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        @foreach(array_keys(config('locale.languages')) as $lang)
                                        @if($lang != app()->getLocale())
                                        <ul>
                                            <li>
                                                <a class="dropdown-item" data-lang="en" href="{{ '/lang/'.$lang }}">
                                                    <img style="padding-left:4px;"
                                                        src="{{asset('frontend/img/en.jpg')}}" alt="">   <i
                                                        class="flag-icon flag-icon-us"></i>@lang('menus.language-picker.langs.'.$lang)</a>
                                            </li>
                                        </ul>

                                        @endif
                                        @endforeach



                                    </div>
                                </div>
                            </li>


                            <li class="text-white">|</li>
                            <li>
                                @auth
                            <li class="nav-item"><a href="{{route('frontend.user.dashboard')}}"
                                    class="nav-link {{ active_class(Route::is('frontend.user.dashboard')) }}">@lang('navs.frontend.dashboard')</a>
                            </li>
                            @endauth

                            @guest
                            <li class="nav-item"><a href="{{route('frontend.auth.login')}}"
                                    class="nav-link {{ active_class(Route::is('frontend.auth.login')) }}">@lang('navs.frontend.login')</a>
                            </li>

                            @if(config('access.registration'))
                            <li class="nav-item"><a href="{{route('frontend.auth.register')}}"
                                    class="nav-link {{ active_class(Route::is('frontend.auth.register')) }}">@lang('navs.frontend.register')</a>
                            </li>
                            @endif
                            @else
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" id="navbarDropdownMenuUser"
                                    data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">{{ $logged_in_user->name }}</a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuUser">
                                    @can('view backend')
                                    <a href="{{ route('admin.dashboard') }}"
                                        class="dropdown-item">@lang('navs.frontend.user.administration')</a>
                                    @endcan

                                    <a href="{{ route('frontend.user.account') }}"
                                        class="dropdown-item {{ active_class(Route::is('frontend.user.account')) }}">@lang('navs.frontend.user.account')</a>
                                    <a href="{{ route('frontend.auth.logout') }}"
                                        class="dropdown-item">@lang('navs.general.logout')</a>
                                </div>
                            </li>
                            @endguest
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="widget no-border m-0">
                        <ul
                            class="styled-icons icon-theme-colored icon-dark icon-circled icon-sm pull-right sm-pull-none sm-text-center mt-5 mt-sm-15">
                            <li><a href="{{ GeneralSiteSettings('site_facebook_url')}}"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="{{ GeneralSiteSettings('site_twitter_url')}}"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="{{ GeneralSiteSettings('site_whatsapp_url')}}"><i class="fa fa-whatsapp"></i></a></li>
                            <li><a href="{{ GeneralSiteSettings('site_youtube_url')}}"><i class="fa fa-youtube"></i></a></li>
                            <li><a href="{{ GeneralSiteSettings('site_instagram_url')}}"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="{{ GeneralSiteSettings('site_linkedin_url')}}"><i class="fa fa-linkedin"></i></a></li></ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-middle p-0 bg-lightest xs-text-center">
        <div class="container pt-0 pb-0">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-8">
                    <div class="widget no-border m-0">
                    <a class="menuzord-brand pull-left flip xs-pull-center mb-15" href="{{route('frontend.index')}}"><img
                                src="{{asset('uploads/settings/')}}/{{GeneralSiteSettings('site_logo') }}" alt="{{ GeneralSiteSettings('site_title') }}"></a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-2">
                    <div class="widget no-border m-0">
                        <div class="mt-10 mb-10 text-right flip sm-text-center">
                            <div class="font-15 text-black-333 mb-5 font-weight-600"><i
                                    class="fa fa-phone-square text-theme-colored font-18"></i><a href="tel:{{ GeneralSiteSettings('site_mobile')}}">{{ GeneralSiteSettings('site_mobile')}}</a></div>
                            <a class="font-12 text-gray" href="tel:{{ GeneralSiteSettings('site_mobile')}}">Call us for more details!</a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-2">
                    <div class="widget no-border m-0">
                        <div class="mt-10 mb-10 text-right flip sm-text-center">
                            <div class="font-15 text-black-333 mb-5 font-weight-600"><i
                                    class="fa fa-building-o text-theme-colored font-18"></i> IBDA Location</div>
                            <a class="font-12 text-gray" href="#"> {{ GeneralSiteSettings('site_address')}}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-nav">
        <div class="header-nav-wrapper navbar-scrolltofixed bg-light">
            <div class="container">
                <nav id="menuzord" class="menuzord default bg-light">
                    <ul class="menuzord-menu">
                        <li class="active"><a href="#home">Home</a>
                        </li>
                    </ul>
                    <div class="pull-right flip hidden-sm hidden-xs mt-20 pt-5">
                        <a class="btn btn-colored btn-flat btn-theme-colored ajaxload-popup"
                            href="ajax-load/IBDA-form.html">Donate Now</a>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
