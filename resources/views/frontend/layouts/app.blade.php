<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{ trans('translation.rtl_ltr')}}">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0" />
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
<title>@yield('title', GeneralSiteSettings('site_title') )</title>
<meta name="description" content="@yield('meta_description', GeneralSiteSettings("site_meta_description"))">
<meta name="keywords" content="{{GeneralSiteSettings('site_key_keywords')}}"/>
@yield('css')
<link href="{{asset('uploads/settings')}}/{{GeneralSiteSettings('site_icon')}}" rel="shortcut icon" type="image/png">
<link href="{{asset('uploads/settings')}}/{{GeneralSiteSettings('site_icon')}}" rel="apple-touch-icon">
<link href="{{asset('uploads/settings')}}/{{GeneralSiteSettings('site_icon')}}" rel="apple-touch-icon" sizes="72x72">
<link href="{{asset('uploads/settings')}}/{{GeneralSiteSettings('site_icon')}}" rel="apple-touch-icon" sizes="114x114">
<link href="{{asset('uploads/settings')}}/{{GeneralSiteSettings('site_icon')}}" rel="apple-touch-icon" sizes="144x144">
<meta name="author" content="@yield('meta_author', 'IBDA By kodatik.com')">
@yield('meta')
@section('head')
@endsection
<link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/vendors/css/forms/select/select2.min.css')}}">
<link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,900|Mirza:400,700&amp;subset=arabic" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Allura" rel="stylesheet">
<link href="{{asset('frontend/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
<link href="{{asset('frontend/css/jquery-ui.min.css') }}" rel="stylesheet" type="text/css">
<link href="{{asset('frontend/css/animate.css') }}" rel="stylesheet" type="text/css">
<link href="{{asset('frontend/css/css-plugin-collections.css') }}" rel="stylesheet" />
<link id="menuzord-menu-skins" href="{{asset('frontend/css/menuzord-skins/menuzord-rounded-boxed.css') }}" rel="stylesheet" />
<link href="{{asset('frontend/css/style-main.css') }}" rel="stylesheet" type="text/css">
<link href="{{asset('frontend/css/preloader.css') }}" rel="stylesheet" type="text/css">
<link href="{{asset('frontend/css/custom-bootstrap-margin-padding.css') }}" rel="stylesheet" type="text/css">
<link href="{{asset('frontend/css/responsive.css') }}" rel="stylesheet" type="text/css">
<link href="{{asset('frontend/js/revolution-slider/css/settings.css') }}" rel="stylesheet" type="text/css" />
<link href="{{asset('frontend/js/revolution-slider/css/layers.css') }}" rel="stylesheet" type="text/css" />
<link href="{{asset('frontend/js/revolution-slider/css/navigation.css') }}" rel="stylesheet" type="text/css" />
<link href="{{asset('frontend/css/colors/theme-skin-orange.css') }}" rel="stylesheet" type="text/css">
<script  src="{{asset('frontend/js/jquery-2.2.4.min.js') }}" ></script>
<script  src="{{asset('frontend/js/jquery-ui.min.js') }}" ></script>
<script  src="{{asset('frontend/js/bootstrap.min.js') }}" ></script>
<script  src="{{asset('frontend/js/jquery-plugin-collection.js') }}" ></script>
<script  src="{{asset('frontend/js/revolution-slider/js/jquery.themepunch.tools.min.js') }}" ></script>
<script  src="{{asset('frontend/js/revolution-slider/js/jquery.themepunch.revolution.min.js') }}" ></script>
@langrtl
<link href="{{asset('frontend/css/bootstrap-rtl.min.css') }}" rel="stylesheet" type="text/css">
<link href="{{asset('frontend/css/style-main-rtl.css') }}" rel="stylesheet" type="text/css">
<link href="{{asset('frontend/css/style-main-rtl-extra.css') }}" rel="stylesheet" type="text/css">
<style>




#chatter .chatter_avatar {
float: right;
margin: 5px;
margin-left: 15px;
right: 10px;
}
#chatter ul.discussions li a.discussion_list .chatter_post_actions, #chatter ul.discussions li .chatter_posts
.chatter_post_actions {

left: 0px;
top: 15px;
}
#chatter ul.discussions li a.discussion_list .chatter_right, #chatter ul.discussions li .chatter_posts .chatter_right {
float: left;
left: 25px;
text-align: left;

}
#chatter .conversation ul.discussions li .chatter_posts .chatter_middle {
margin-left: 0px;
padding-right: 80px;
padding-left: 0px;

}
#chatter ul.discussions li a.discussion_list .chatter_post_actions p, #chatter ul.discussions li .chatter_posts
.chatter_post_actions p {
float: left;
margin-left: 10px;
}
#chatter ul.discussions li .chatter_posts .chatter_post_actions {
left: 0px;
top: 5px;
} #chatter #chatter_header h1 {
margin-top: 0px;
margin-bottom: 0px;
line-height: 23px;
font-size: 14px;
color: #f1f1f1;
float: left;
}
#chatter #chatter_header span {
float: right;
line-height: 30px;
margin-left: 14px;
color: #ccc;
color: rgba(255, 255, 255, 0.85);
font-size: 12px;
}
#chatter ul.discussions li .chatter_posts .chatter_middle p {
text-align: justify;
}
</style>
@endlangrtl
<link rel="stylesheet" type="text/css" href="//www.fontstatic.com/f=cocon-next-arabic" />
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
        font-family: 'cocon-next-arabic' !important;
        /* / font-size: 16 !important; */
    }
.menuzord-brand img {
max-height: 100px !important;
}
.footer a {
color: #fff;
}
@media only screen and (max-width: 768px) {
.none{
display: none !important;
}
.pull-left.flip {
float: none !important;
}
}

  @media only screen and (max-device-width: 480px) {
      .footer_ds {
      width: max-content;
margin-right: -26px !important;
padding-left: 0px !important;
}
.new_ds {
width: 100% !important;
left: 19px !important;
min-width: fit-content !important;
}

.ds_img{
z-index: 99 !important;
 position: absolute !important;
 top: -73px !important;
}
    }


</style>

<!--[if lt IE 9]>
  <script  src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js" ></script>
  <script  src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js" ></script>
<![endif]-->
</head>
<body class="{{ trans('translation.rtl_ltr')}}">
<div id="wrapper" class="clearfix">
<!-- preloader -->
<div id="preloader">
<div id="spinner" style="position: absolute;left: 40%;top: 45%;z-index: 1000;height: 31px;width: 31px;">
    <div class="preloader-fountainTextG">
        <div id="fountainTextG_1" class="fountainTextG">I</div>
        <div id="fountainTextG_2" class="fountainTextG">B</div>
        <div id="fountainTextG_3" class="fountainTextG">D</div>
        <div id="fountainTextG_4" class="fountainTextG">A</div>
    </div>
</div>
<div id="disable-preloader" class="btn btn-default btn-sm">{{ trans('frontend.disable_preloader') }}</div>
</div>
@include('frontend.includes.header')
@include('includes.partials.logged-in-as')
<div class="main-content">

@include('includes.partials.messages')
@yield('content')
@include('includes.partials.ga')
</div>
@include('frontend.includes.footer')
<script  src="{{asset('backend/app-assets/vendors/js/forms/select/select2.full.min.js') }}" ></script>
<script  src="{{asset('backend/app-assets/js/scripts/forms/select/form-select2.min.js') }}" ></script>
</div>
@yield('js')
   </body>
</html>



