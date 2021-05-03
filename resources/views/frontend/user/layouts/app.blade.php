<!DOCTYPE html>
<html class="loading" lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{trans('translation.rtl_ltr')}}" data-textdirection="{{trans('translation.rtl_ltr')}}">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>@yield('title', GeneralSiteSettings('site_title'))</title>
<meta name="description" content="@yield('meta_description', GeneralSiteSettings(" site_meta_description"))">
<meta name="keywords" content="{{GeneralSiteSettings('site_key_keywords')}}" />
<meta name="author" content="@yield('meta_author', 'kodatik.com')">
@yield('meta')


<link href="https://fonts.googleapis.com/css?family=Tajawal:300,400,500,600" rel="stylesheet">
<link href="{{asset('uploads/settings')}}/{{GeneralSiteSettings('site_icon')}}" rel="shortcut icon" type="image/png">
<link href="{{asset('uploads/settings')}}/{{GeneralSiteSettings('site_icon')}}" rel="apple-touch-icon">
<link href="{{asset('uploads/settings')}}/{{GeneralSiteSettings('site_icon')}}" rel="apple-touch-icon" sizes="72x72">
<link href="{{asset('uploads/settings')}}/{{GeneralSiteSettings('site_icon')}}" rel="apple-touch-icon" sizes="114x114">
<link href="{{asset('uploads/settings')}}/{{GeneralSiteSettings('site_icon')}}" rel="apple-touch-icon" sizes="144x144">
 <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/vendors/css/forms/select/select2.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/vendors/css/extensions/tether-theme-arrows.css') }}">
<link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/vendors/css/extensions/tether.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/vendors/css/extensions/shepherd-theme-default.css') }}">
<link rel="stylesheet" href="{{asset('backend/dropify/css/dropify.min.css') }}">
<style>
     body,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    ul,
    li,
    p,
    a,
    td {
       font-family: 'Tajawal', sans-serif !important;
    }
</style>
@langrtl


<link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/vendors/css/vendors-rtl.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/css-rtl/bootstrap.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/css-rtl/bootstrap-extended.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/css-rtl/colors.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/css-rtl/components.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/css-rtl/core/menu/menu-types/vertical-menu.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/css-rtl/core/colors/palette-gradient.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/css-rtl/pages/dashboard-analytics.min.css') }}">

<link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/css-rtl/pages/app-user.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/css-rtl/custom-rtl.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{asset('backend/assets/css/style-rtl.css') }}">
@else
<link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/vendors/css/vendors.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/css/bootstrap.css') }}">
<link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/css/bootstrap-extended.css') }}">
<link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/css/colors.css') }}">
<link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/css/components.css') }}">
<link rel="stylesheet" type="text/css" href="{{asset('backend/assets/css/style.css') }}">
<link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/css/core/menu/menu-types/vertical-menu.css') }}">
<link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/css/core/colors/palette-gradient.css') }}">
<link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/css/pages/dashboard-analytics.css') }}">
@endlangrtl
</head>
<body class="vertical-layout vertical-menu-modern 2-columns  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">
@include('frontend.user.includes.header')
@include('frontend.user.includes.sidebar')
<div class="app-content content">
<div class="content-overlay"></div>
<div class="content-wrapper">
{{-- {!! Breadcrumbs::render() !!} --}}
<div class="content-body">
@include('includes.partials.read-only')
@include('includes.partials.logged-in-as')
@include('includes.partials.messages')
@yield('content')
</div>
</div>
</div>
@include('frontend.user.includes.footer')
@yield('page-js')
</body>
</html>
