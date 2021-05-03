<!-- BEGIN: Header-->
<nav class="header-navbar navbar-expand-lg navbar navbar-with-menu floating-nav navbar-light navbar-shadow">
<div class="navbar-wrapper">
<div class="navbar-container content">
<div class="navbar-collapse" id="navbar-mobile">
<div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
<ul class="nav navbar-nav">
<li class="nav-item mobile-menu d-xl-none mr-auto"><a
class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i
class="ficon feather icon-menu"></i></a></li>
</ul>
<ul class="nav navbar-nav bookmark-icons">
<!-- li.nav-item.mobile-menu.d-xl-none.mr-auto-->
<!--   a.nav-link.nav-menu-main.menu-toggle.hidden-xs(href='#')-->
<!--     i.ficon.feather.icon-menu-->
<li class="nav-item   d-lg-block"><a class="nav-link" href="{{ route('frontend.index') }}" data-toggle="tooltip"
data-placement="top" title="Website"><i class="ficon feather icon-monitor"></i></a></li>


<li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="#"
        data-toggle="dropdown"><i class="ficon feather icon-bell"></i><span
            class="badge badge-pill badge-danger badge-up">{{ $pending_approval }}</span></a>
    <ul class="dropdown-menu dropdown-menu-media dropdown-menu-left">
        <li class="dropdown-menu-header">
            <div class="dropdown-header m-0 p-2">
               <a href="{{ route('admin.auth.user.deactivated') }}"> <h3 class="white">{{ $pending_approval }}</h3><span class="notification-title">{{ trans('backend.new_user_need_approval') }}</span></a>
            </div>
        </li>
    </ul>
</li>

</ul>







</div>
<ul class="nav navbar-nav float-right">

@if(config('locale.status') && count(config('locale.languages')) > 1)
<li class="dropdown dropdown-language nav-item">
<a class="dropdown-toggle nav-link" id="dropdown-flag" href="#" data-toggle="dropdown" aria-haspopup="true"
aria-expanded="false">
<i class="flag-icon flag-icon-{{trans('backend.concode')}}"></i>
<span class="selected-language">@lang('menus.language-picker.language')
({{ strtoupper(app()->getLocale()) }})</span>
</a>
<div class="dropdown-menu" aria-labelledby="dropdown-flag">
@foreach(array_keys(config('locale.languages')) as $lang)
@if($lang != app()->getLocale())

<a class="dropdown-item" href="{{ '/lang/'.$lang }}" data-language="{{$lang}}"><i class="flag-icon flag-icon-@if($lang == "ar"){{"sa"}}@elseif($lang == "en"){{"us"}}@else{{"tr"}}@endif"></i>@lang('menus.language-picker.langs.'.$lang)</a>
@endif
@endforeach
</div>
</li>
@endif

<li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-expand"><i
class="ficon feather icon-maximize"></i></a></li>


<li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link"
href="#" data-toggle="dropdown">
<div class="user-nav d-sm-flex d-none"><span
class="user-name text-bold-600">{{ $logged_in_user->full_name }}</span> </div><span><img class="round"
src="{{ $logged_in_user->picture }}" alt="{{ $logged_in_user->full_name }}"
height="40" width="40"></span>
</a>
<div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item"
href="{{route('admin.auth.user.edit',  $logged_in_user->id )}}"><i class="feather icon-user"></i>{{ trans('backend.profile') }}</a>



<div class="dropdown-divider"></div><a class="dropdown-item" href="{{ route('frontend.auth.logout') }}"><i
class="feather icon-power"></i> @lang('navs.general.logout')</a>

</div>
</li>
</ul>
</div>
</div>
</div>
</nav>

