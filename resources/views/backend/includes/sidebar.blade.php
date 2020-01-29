<!-- BEGIN: Main Menu-->
<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">



    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto"><a class="navbar-brand" href="{{ route('admin.dashboard') }}">
                    <div class="brand-logo"></div>
                    <h2 class="brand-text mb-0">IBDA</h2>
                </a></li>
            <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i
                        class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i
                        class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary"
                        data-ticon="icon-disc"></i></a></li>
        </ul>
    </div>



    <div class="shadow-bottom"></div>
    @if ($logged_in_user->isAdmin())
<div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

<li class=" nav-item"><a href="{{ route('admin.dashboard') }}"><i class="feather icon-home"></i><span class="menu-title"
            data-i18n="Dashboard">@lang('menus.backend.sidebar.dashboard')</span><span
            class="badge badge badge-warning badge-pill float-right mr-2"></span></a>
</li>
<li class=" nav-item">
    <a href="app-email.html"><i class="feather icon-mail">
        </i><span class="menu-title" data-i18n="Email">Email</span>
    </a>
</li>

@if ($pending_approval > 0)
<li class=" navigation-header"><span>@lang('menus.backend.access.title') : {{ $pending_approval }}</span>
</li>
@endif

<li class=" nav-item ">
    <a href="{{ route('admin.auth.user.index') }}"><i class="feather icon-user"></i><span class="menu-title"
            data-i18n="User">@lang('labels.backend.access.users.management')</span>
    </a>
    @if ($pending_approval > 0)
    <span class="badge badge-danger">{{ $pending_approval }}</span>
    @endif
</li>

<li class=" nav-item ">
    <a href="{{ route('admin.auth.role.index') }}"><i class="feather icon-shield"></i><span class="menu-title"
            data-i18n="User">@lang('labels.backend.access.roles.management')</span>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('admin.activity.index') }}"><i class="feather icon-shield"></i><span class="menu-title"
            data-i18n="User">@lang('backend.activity')</span></a>
</li>

<li><a href="{{ route('admin.post.index') }}"><i class="feather icon-circle"></i><span class="menu-item"
            data-i18n="Select">{{ trans('backend.posts') }}</span></a>
</li>

<li><a href="{{ route('admin.contact_forms.index') }}"><i class="feather icon-circle"></i><span class="menu-item"
            data-i18n="Select">{{ trans('backend.contacts_forms') }}</span></a>
</li>
<li class=" nav-item ">
    <a href="{{ route('admin.setting.edit') }}"><i class="feather icon-shield"></i><span class="menu-title"
            data-i18n="User">@lang('backend.setting')</span>
    </a>
</li>
<li class=" nav-item ">
    <a href="{{ route('admin.slider.index') }}"><i class="feather icon-shield"></i><span class="menu-title"
            data-i18n="User">@lang('backend.sliders')</span>
    </a>
</li>
<li class=" nav-item ">
    <a href="{{ route('admin.testimonial.index') }}"><i class="feather icon-shield"></i><span class="menu-title"
            data-i18n="User">@lang('backend.testimonials')</span>
    </a>
</li>


<li class=" nav-item ">
    <a href="{{ route('admin.events.index') }}"><i class="feather icon-shield"></i><span class="menu-title"
            data-i18n="User">@lang('backend.events')</span>
    </a>
</li>

<li class=" nav-item ">
    <a href="{{ route('admin.gallery.index') }}"><i class="feather icon-shield"></i><span class="menu-title"
            data-i18n="User">@lang('backend.gallery')</span>
    </a>
</li>

<li class=" nav-item ">
    <a href="{{ route('admin.static.edit') }}"><i class="feather icon-shield"></i><span class="menu-title"
            data-i18n="User">@lang('backend.pages')</span>
    </a>
</li>

<li class=" nav-item ">
    <a href="{{ route('admin.about.edit') }}"><i class="feather icon-shield"></i><span class="menu-title"
            data-i18n="User">@lang('backend.about')</span>
    </a>
</li>

<li class=" nav-item ">
    <a href="{{ route('admin.sector.index') }}"><i class="feather icon-shield"></i><span class="menu-title"
            data-i18n="User">@lang('backend.sectors')</span>
    </a>
</li>



<li class=" nav-item ">
    <a href="{{ route('admin.field.index') }}"><i class="feather icon-shield"></i><span class="menu-title"
            data-i18n="User">@lang('backend.fields')</span>
    </a>
</li>











        </ul>
    </div>
    @endif
</div>
<!-- END: Main Menu-->
