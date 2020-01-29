<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{ trans('translation.rtl_ltr')}}">
<head>
   <head>
<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0" />
<meta name="description" content="@yield('meta_description', 'IBDA by Kodatik.com')">
<meta name="author" content="@yield('meta_author', 'IBDA')">
<meta name="description" content="IBDA by Kodatik.com" />
<meta name="keywords" content="charity,crowdfunding,nonprofit,orphan,Poor,funding,fundrising,ngo,children" />
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta charset="utf-8">
<!-- Page Title -->

<title>@yield('title', GeneralSiteSettings('site_title') )</title>

<!-- Favicon and Touch Icons -->
<link href="{{asset('frontend/images/favicon.png')}}" rel="shortcut icon" type="image/png">
<link href="{{asset('frontend/images/apple-touch-icon.png')}}" rel="apple-touch-icon">
<link href="{{asset('frontend/images/apple-touch-icon-72x72.png')}}" rel="apple-touch-icon" sizes="72x72">
<link href="{{asset('frontend/images/apple-touch-icon-114x114.png')}}" rel="apple-touch-icon" sizes="114x114">
<link href="{{asset('frontend/images/apple-touch-icon-144x144.png')}}" rel="apple-touch-icon" sizes="144x144">


@yield('meta')
@section('head')

@endsection


<link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,900|Mirza:400,700&amp;subset=arabic"
    rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Allura" rel="stylesheet">

@langrtl
<!-- CSS | RTL Layout -->
<link href="{{asset('frontend/css/bootstrap-rtl.min.css') }}" rel="stylesheet" type="text/css">
<link href="{{asset('frontend/css/style-main-rtl.css') }}" rel="stylesheet" type="text/css">
<link href="{{asset('frontend/css/style-main-rtl-extra.css') }}" rel="stylesheet" type="text/css">

@endlangrtl


<!-- Stylesheet -->
<link href="{{asset('frontend/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
<link href="{{asset('frontend/css/jquery-ui.min.css') }}" rel="stylesheet" type="text/css">
<link href="{{asset('frontend/css/animate.css') }}" rel="stylesheet" type="text/css">
<link href="{{asset('frontend/css/css-plugin-collections.css') }}" rel="stylesheet" />
<!-- CSS | menuzord megamenu skins -->
<link id="menuzord-menu-skins" href="{{asset('frontend/css/menuzord-skins/menuzord-rounded-boxed.css') }}" rel="stylesheet" />
<!-- CSS | Main style file -->
<link href="{{asset('frontend/css/style-main.css') }}" rel="stylesheet" type="text/css">
<!-- CSS | Preloader Styles -->
<link href="{{asset('frontend/css/preloader.css') }}" rel="stylesheet" type="text/css">
<!-- CSS | Custom Margin Padding Collection -->
<link href="{{asset('frontend/css/custom-bootstrap-margin-padding.css') }}" rel="stylesheet" type="text/css">
<!-- CSS | Responsive media queries -->
<link href="{{asset('frontend/css/responsive.css') }}" rel="stylesheet" type="text/css">

<!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->

<!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->

<!-- Revolution Slider 5.x CSS settings -->
<link href="{{asset('frontend/js/revolution-slider/css/settings.css') }}" rel="stylesheet" type="text/css" />
<link href="{{asset('frontend/js/revolution-slider/css/layers.css') }}" rel="stylesheet" type="text/css" />
<link href="{{asset('frontend/js/revolution-slider/css/navigation.css') }}" rel="stylesheet" type="text/css" />

<!-- CSS | Theme Color -->
<link href="{{asset('frontend/css/colors/theme-skin-orange.css') }}" rel="stylesheet" type="text/css">

<!-- external javascripts -->
<script src="{{asset('frontend/js/jquery-2.2.4.min.js') }}"></script>
<script src="{{asset('frontend/js/jquery-ui.min.js') }}"></script>
<script src="{{asset('frontend/js/bootstrap.min.js') }}"></script>
<!-- JS | jquery plugin collection for this theme -->
<script src="{{asset('frontend/js/jquery-plugin-collection.js') }}"></script>

<!-- Revolution Slider 5.x SCRIPTS -->
<script src="{{asset('frontend/js/revolution-slider/js/jquery.themepunch.tools.min.js') }}"></script>
<script src="{{asset('frontend/js/revolution-slider/js/jquery.themepunch.revolution.min.js') }}"></script>


<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->


</head>

<div id="wrapper" class="clearfix">
    <!-- preloader -->
    <div id="preloader">
        <div id="spinner">
        <div class="preloader-fountainTextG">
            <div id="fountainTextG_1" class="fountainTextG">I</div>
            <div id="fountainTextG_2" class="fountainTextG">B</div>
            <div id="fountainTextG_3" class="fountainTextG">D</div>
            <div id="fountainTextG_4" class="fountainTextG">A</div>
        </div>
        </div>
        <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>
    </div>

<body class="{{ trans('translation.rtl_ltr')}}">




<!-- Start main-content -->
<div class="main-content">

@include('frontend.includes.header')
@include('includes.partials.messages')

@yield('content')




@include('includes.partials.ga')

@include('frontend.includes.footer')
</div>
    <!-- end main-content -->
   </body>

</html>



