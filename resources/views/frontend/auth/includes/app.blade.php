<!DOCTYPE html>
<html class="loading" lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{trans('translation.rtl_ltr')}}"
    data-textdirection="{{trans('translation.rtl_ltr')}}">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="description" content="@yield('meta_description', GeneralSiteSettings(" site_meta_description"))">
<meta name="keywords" content="{{GeneralSiteSettings('site_key_keywords')}}" />
<title>@yield('title', GeneralSiteSettings('site_title'))</title>
<meta name="author" content="@yield('meta_author', 'kodatik.com')">
@yield('meta')
<link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/vendors/css/forms/select/select2.min.css')}}">
<link href="{{asset('uploads/settings')}}/{{GeneralSiteSettings('site_logo')}}" rel="shortcut icon" type="image/png">
<link href="{{asset('uploads/settings')}}/{{GeneralSiteSettings('site_logo')}}" rel="apple-touch-icon">
<link href="{{asset('uploads/settings')}}/{{GeneralSiteSettings('site_logo')}}" rel="apple-touch-icon" sizes="72x72">
<link href="{{asset('uploads/settings')}}/{{GeneralSiteSettings('site_logo')}}" rel="apple-touch-icon" sizes="114x114">
<link href="{{asset('uploads/settings')}}/{{GeneralSiteSettings('site_logo')}}" rel="apple-touch-icon" sizes="144x144">
<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/vendors/css/pickers/pickadate/pickadate.css')}}">
<script src="https://cdn.tiny.cloud/1/umkzp235f3fz92b77fdnxb5pcatvke82aj5kidsm6bdfwujt/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
 
 
<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/vendors/css/extensions/tether-theme-arrows.css') }}">
<link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/vendors/css/extensions/tether.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/vendors/css/extensions/shepherd-theme-default.css') }}">
@langrtl
<link href="https://fonts.googleapis.com/css?family=Tajawal&display=swap" rel="stylesheet">
<style>
*:not(i) {
font-family: 'Tajawal', sans-serif !important;
}
</style>
<link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/vendors/css/vendors-rtl.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/css-rtl/bootstrap.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/css-rtl/bootstrap-extended.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/css-rtl/colors.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/css-rtl/components.min.css') }}">
@yield('page-css-rtl')
<link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/css-rtl/custom-rtl.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{asset('backend/assets/css/style-rtl.css') }}">
<link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/css-rtl/pages/authentication.css') }}">
@else
<link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/css/pages/authentication.css') }}">
<link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/vendors/css/vendors.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/css/bootstrap.css') }}">
<link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/css/bootstrap-extended.css') }}">
<link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/css/colors.css') }}">
<link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/css/components.css') }}">
@yield('page-css-ltr')
<link rel="stylesheet" type="text/css" href="{{asset('backend/assets/css/style.css') }}">
@endlangrtl
</head>
<body class="vertical-layout 1-column navbar-floating footer-static bg-full-screen-image blank-page blank-page pace-done menu-hide vertical-overlay-menu"
    data-open="click" data-menu="vertical-menu-modern" data-col="1-column" data-layout="dark-layout">
<div class="app-content content">
<div class="content-overlay"></div>
<div class="content-wrapper">
<div class="content-body">
@yield('content')
</div>
</div>
</div>
<!-- END: Content-->
@yield('page-js')
</body>
</html>
