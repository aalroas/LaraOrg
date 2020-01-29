<!DOCTYPE html>
@langrtl
<html class="loading" lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl" data-textdirection="rtl">
@else
<html class="loading" lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr" data-textdirection="ltr">
@endlangrtl
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">


<meta name="csrf-token" content="{{ csrf_token() }}">
<title>@yield('title', GeneralSiteSettings('site_title'))</title>
<meta name="description" content="@yield('meta_description', 'IBDA by Kodatik.com')">
<meta name="author" content="@yield('meta_author', 'kodatik.com')">
@yield('meta')
<meta name="keywords" content="">



<link rel="apple-touch-icon" href="{{asset('backend/app-assets/images/ico/apple-icon-120.png')}}">
<link rel="shortcut icon" type="image/x-icon" href="{{asset('backend/app-assets/images/ico/favicon.ico') }}">
<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">






<link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/vendors/css/charts/apexcharts.css') }}">
<link rel="stylesheet" type="text/css"
    href="{{asset('backend/app-assets/vendors/css/extensions/tether-theme-arrows.css') }}">
<link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/vendors/css/extensions/tether.min.css') }}">
<link rel="stylesheet" type="text/css"
    href="{{asset('backend/app-assets/vendors/css/extensions/shepherd-theme-default.css') }}">

<!-- END: Vendor CSS-->


<!-- BEGIN: Vendor CSS-->
@langrtl


<link href="https://fonts.googleapis.com/css?family=Tajawal&display=swap" rel="stylesheet">

<style>



*:not(i) {
font-family: 'Tajawal', sans-serif !important;
}
</style>
<!-- Check if the language is set to RTL, so apply the RTL layouts -->
<!-- Otherwise apply the normal LTR layouts -->
<link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/vendors/css/vendors-rtl.min.css') }}">

<!-- BEGIN: Theme CSS-->
<link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/css-rtl/bootstrap.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/css-rtl/bootstrap-extended.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/css-rtl/colors.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/css-rtl/components.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/css-rtl/themes/dark-layout.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/css-rtl/themes/semi-dark-layout.min.css') }}">



@yield('page-css-rtl')


<!-- BEGIN: Custom CSS-->
<link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/css-rtl/custom-rtl.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{asset('backend/assets/css/style-rtl.css') }}">
<!-- END: Custom CSS-->



@else

<!-- BEGIN: Vendor CSS-->
<link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/vendors/css/vendors.min.css') }}">
<!-- END: Vendor CSS-->


<!-- BEGIN: Theme CSS-->
<link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/css/bootstrap.css') }}">
<link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/css/bootstrap-extended.css') }}">
<link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/css/colors.css') }}">
<link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/css/components.css') }}">
<link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/css/themes/dark-layout.css') }}">
<link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/css/themes/semi-dark-layout.css') }}">

<!-- BEGIN: Page CSS-->

@yield('page-css-ltr')

<!-- END: Page CSS-->

<!-- BEGIN: Custom CSS-->
<link rel="stylesheet" type="text/css" href="{{asset('backend/assets/css/style.css') }}">
<!-- END: Custom CSS-->

@endlangrtl



</head>


<body
    class="vertical-layout vertical-menu-modern dark-layout 1-column  navbar-floating footer-static bg-full-screen-image  blank-page blank-page"
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
