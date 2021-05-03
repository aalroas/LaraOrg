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

                                        <a class="dropdown-item text-white" data-lang="en"
                                            href="{{ '/lang/'.app()->getLocale() }}"><img
                                               width="30" height="20 " src="{{asset('uploads/')}}/{{app()->getLocale()}}.svg" alt=""><i
                                                class="flag-icon flag-icon-us"></i>@lang('menus.language-picker.langs.'.app()->getLocale())</a>

                                    </div>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        @foreach(array_keys(config('locale.languages')) as $lang)
                                        @if($lang != app()->getLocale())
                                        <ul style="margin-right: 7px;margin-left: 0px;">
                                            <li>
                                                <a class="dropdown-item" data-lang="{{$lang}}" href="{{ '/lang/'.$lang }}">
                                                    <img style="padding-left:4px;" width="30" height="20 "
                                                        src="{{asset('uploads/')}}/{{$lang}}.svg" alt="">   <i
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
                                    class="nav-link  text-white {{ active_class(Route::is('frontend.user.dashboard')) }}">@lang('navs.frontend.dashboard')</a>
                            </li>
                       <li class="text-white">|</li>
                            <li class="nav-item"><a href="{{route('frontend.auth.logout')}}"
                                    class="nav-link  text-white {{ active_class(Route::is('frontend.auth.logout')) }}">@lang('frontend.logout')</a>
                            </li>
                            @endauth

                            @guest
                            <li class="nav-item"><a href="{{route('frontend.auth.login')}}"
                                    class="nav-link text-white {{ active_class(Route::is('frontend.auth.login')) }}">@lang('navs.frontend.login')</a>
                            </li>

                            @if(config('access.registration'))
                            <li class="nav-item"><a href="{{route('frontend.auth.register')}}"
                                    class="nav-link  text-white {{ active_class(Route::is('frontend.auth.register')) }}">@lang('navs.frontend.register')</a>
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
                            {{-- </li> --}}
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 ">
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
                    <a class="menuzord-brand pull-left flip xs-pull-center   mb-15" href="{{route('frontend.index')}}">
                        <img src="{{asset('uploads/settings/')}}/{{GeneralSiteSettings('site_logo') }}" alt="{{ GeneralSiteSettings('site_title') }}"></a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-2 none">
                    <div class="widget no-border m-0">
                        <div class="mt-10 mb-10 text-right flip sm-text-center">
                            <div class="font-15 text-black-333 mb-5  font-weight-600"><i
                                    class="fa fa-phone-square text-theme-colored font-18"></i><a style="direction:ltr;float: left;" href="tel:{{ GeneralSiteSettings('site_mobile')}}"> {{ GeneralSiteSettings('site_mobile')}}  </a></div>

                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-2 none">
                    <div class="widget no-border m-0">
                        <div class="mt-10 mb-10 text-right flip sm-text-center">
                            <div class="font-15 text-black-333 mb-5 font-weight-600"><i
                                    class="fa fa-building-o text-theme-colored font-18"></i><a target="_blank" class="font-12 text-gray" href="https://www.google.com/maps/place/Nish+%C4%B0stanbul/@40.996314,28.8247561,15z/data=!4m5!3m4!1s0x0:0x74affbfcc3b71087!8m2!3d40.996314!4d28.8247561"> {{ GeneralSiteSettings('site_address')}}</a></div>
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
                    <li class="@if(Request::segment(1) == '') active @endif"><a href="{{route('frontend.index')}}">{{ trans('frontend.home') }}</a>
                    </li>

                    <li><a href="#">{{ trans('frontend.about') }}<span class="indicator"></span></a>
                        <ul class="dropdown" style="right: auto; display: none;">

                           <li class="@if(Request::segment(1) =='about') active @endif"><a href="{{URL('/about')}}">{{ trans('frontend.about') }}</a></li>

                           <li class="@if(Request::segment(1) =='about') active @endif"><a href="{{URL('/about/members')}}">{{ trans('frontend.members') }}</a></li>

                           <li class="@if(Request::segment(1) =='about') active @endif"><a href="{{URL('/about/board-of-directors')}}">{{ trans('frontend.board_of_directors') }}</a></li>

                           <li class="@if(Request::segment(1) =='about') active @endif"><a href="{{URL('/about/executive-management')}}">{{ trans('frontend.executive_management') }}</a></li>

                           <li class="@if(Request::segment(1) =='about') active @endif"><a href="{{URL('/about/organizational-structure')}}">{{ trans('frontend.organizational_structure') }}</a></li>

                           <li class="@if(Request::segment(1) =='about') active @endif"><a href="{{URL('/about/bylaws')}}">{{ trans('frontend.bylaws') }}</a></li>
                        </ul>
                    </li>
                    <li><a class="@if(Request::segment(1) == 'activities') active @endif"
                            href="{{URL('/activities')}}">{{ trans('frontend.activities') }}
                        </a>
                        <ul class="dropdown" style="right: auto; display: none;">
                            @foreach ($headeractivity_types as $activity_type)
                            <li><a href="{{ route('frontend.activitytype',$activity_type->slug) }}">{{ $activity_type->name}}</a></li>
                            @endforeach
                        </ul>
                    </li>



                     <li class="@if(Request::segment(1) =='news') active @endif"><a href="{{URL('/news')}}">{{ trans('frontend.news') }}</a></li>

                     <li><a class="@if(Request::segment(1) == 'units') active @endif" href="#">{{ trans('frontend.units') }} </a>
                         <ul class="dropdown" style="right: auto; display: none;">
                             @foreach ($headerunit_types as $unit)
                             <li><a href="{{ route('frontend.unittype',$unit->slug) }}">{{ $unit->name}}</a></li>
                             @endforeach
                         </ul>
                     </li>

                     <li class="@if(Request::segment(1) =='events') active @endif"><a href="{{URL('/events')}}">{{ trans('frontend.events') }}</a>
                        </li>
                     <li><a href="#">{{ trans('frontend.membership') }}<span class="indicator"></span></a>
                        <ul class="dropdown" style="right: auto; display: none;">
                            <li ><a href="{{URL('/register')}}">{{ trans('frontend.register') }}</a></li>
                            <li ><a href="{{URL('/login')}}">{{ trans('frontend.login') }}</a></li>
                            <li><a href="{{URL('/about/members')}}">{{ trans('frontend.members') }}</a></li>
                            <li><a href="{{URL('/forums')}}">{{ trans('frontend.ibdas_corner') }}</a></li>
                         </ul>
                    </li>
                    <li class="@if(Request::segment(1) =='forums') active @endif"><a href="{{URL('/forums')}}">{{ trans('frontend.forums') }}</a></li>
                    <li class="@if(Request::segment(1) =='media-gallery') active @endif"><a
                                href="{{URL('/media-gallery')}}">{{ trans('backend.gallery') }}</a></li>
                    <li class="@if(Request::segment(1) =='contact') active @endif"><a href="{{URL('/contact')}}">{{ trans('frontend.contact') }}</a></li>
                    </ul>
                    <div class="pull-right flip hidden-sm hidden-xs   pt-15">
                        <a class="btn btn-colored btn-flat btn-theme-colored"
                    href="{{asset('uploads/settings/brochure.pdf')}}">{{ trans('frontend.download_brochure') }}</a>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
