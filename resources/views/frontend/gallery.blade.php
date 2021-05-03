
@extends('frontend.layouts.app')
@section('title', GeneralSiteSettings('site_title') . ' | ' . trans('backend.gallery'))
@section('content')

<!-- Section: inner-header -->
<section class="inner-header divider parallax layer-overlay overlay-dark-5">
    <div class="container pt-10 pb-10">
        <!-- Section Content -->
        <div class="section-content pt-10">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="title text-white">{{ trans('backend.gallery') }}</h3>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Gallery Grid 3 -->
<section style="padding-bottom: 600px;" >
<div class="container pb-20">
    <div class="section-content">
        <div class="row">
            <div class="col-md-12">
                    <!-- Portfolio Gallery Grid -->
                    <div id="grid" class="gallery-isotope grid-3 gutter clearfix">
                        <!-- Portfolio Item Start -->
                        @foreach ($galleries as $gallery)
@if ($gallery->type === 1)
<!-- Portfolio Item Start -->
<div class="gallery-item design">
<div class="thumb">
    <div class="flexslider-wrapper">
        <div class="flexslider">
            <ul class="slides">
                @foreach ($gallery->gallery_images as $image)
                <li>
                    <a href="{{asset('uploads/galleries/')}}/{{ $image->gallery_image_path}}" title="{{ $gallery->title}}">
                        <img src="{{asset('uploads/galleries/')}}/{{ $image->gallery_image_path}}" alt="{{ $gallery->title}}">
                    </a>
                </li>
                    @endforeach
            </ul>
        </div>
    </div>
    <div class="overlay-shade"></div>
    <div class="icons-holder">
        <div class="icons-holder-inner">
            <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                <a href="#"><i class="fa fa-picture-o"></i></a>
            </div>
        </div>
    </div>
</div>
<h4 class="text-center mt-15 mb-40">{{ $gallery->title}}</h4>
</div>
<!-- Portfolio Item End -->
@elseif ($gallery->type === 0)

<!-- Portfolio Item Start -->
<div class="gallery-item design">
<div class="thumb">
<img class="img-fullwidth" src="{{asset('uploads/settings')}}/{{GeneralSiteSettings('site_logo')}}" alt="{{$gallery->title}}">
    <div class="overlay-shade"></div>
    <div class="icons-holder">
        <div class="icons-holder-inner">
            <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                <a class="popup-youtube" href="{{ $gallery->video_url}}"><i
                        class="fa fa-youtube-play"></i></a>
            </div>
        </div>
    </div>
</div>
<h4 class="text-center mt-15 mb-40">{{ $gallery->title}}</h4>
</div>
<!-- Portfolio Item End -->

@else


<!-- Portfolio Item Start -->
<div class="gallery-item photography">
    <div class="thumb">
        <div class="flexslider-wrapper">
            <div class="flexslider">
                <ul class="slides">

                    @foreach ($gallery->gallery_images as $image)
                    <li>
                        <a href="{{asset('uploads/galleries/')}}/{{ $image->gallery_image_path}}" title="{{ $gallery->title}}">
                            <img src="{{asset('uploads/galleries/')}}/{{ $image->gallery_image_path}}" alt="{{ $gallery->title}}">
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>

<div class="overlay-shade"></div>
        <div class="icons-holder">
            <div class="icons-holder-inner">
                <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                 <a href="#"><i class="fa fa-picture-o"></i></a>
                </div>
            </div>

        </div>

    </div>
    <a class="popup-youtube" href="{{ $gallery->video_url}}"><h4 class="text-center mt-15 mb-40">{{ $gallery->title}}  -  <i style="color:red; font-size:20px;" class="fa fa-youtube-play"></i></h4></a>
</div>
<!-- Portfolio Item End -->

@endif




<nav>
    <ul class="pagination theme-colored">
        {{ $galleries->links() }}
    </ul>
</nav>


@endforeach

                    </div>
                    <!-- End Portfolio Gallery Grid -->

                </div>
            </div>
        </div>
    </div>
</section>


@endsection
