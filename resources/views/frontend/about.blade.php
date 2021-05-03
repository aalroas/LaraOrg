@extends('frontend.layouts.app')

@section('title', GeneralSiteSettings('site_title') . ' | ' . trans('frontend.about'))

@section('content')
    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-5">
      <div class="container pt-10 pb-10">
        <!-- Section Content -->
        <div class="section-content pt-10">
          <div class="row">
            <div class="col-md-12">
              <h3 class="title text-white">{{ $about->about_title}}</h3>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="container pb-20">
        <div class="section-content">
          <div class="row">
             <div class="col-xs-12 col-sm-12 col-md-12 pb-sm-20">

              <div   style="text-align: center;background-image: url({{asset('uploads/settings')}}/{{GeneralSiteSettings("site_logo")}});background-repeat: no-repeat;background-position: center;background-size: contain;" class="fluid-video-wrapper">
               <a style=" z-index: 99; position: inherit;" href="{{$about->url}}" data-lightbox-gallery="youtube-video"><i
               style="padding: 95px;color:red;"   class="fa fa-play-circle   font-72"></i></a>
            </div>
              <div class="image-box-details pt-20 pb-sm-20">
                <p style="text-align: justify;" class="lead mb-15">{!! $about->about_text !!}</p>

              </div>
            </div>

          </div>


        </div>
      </div>
    </section>


<section class="bg-silver-light">
        <div class="container">
            <div class="section-content">
                <div class="row">
                    <div class="col-md-4">
                        <h2 class="text-uppercase font-weight-600 mt-0 font-28 line-bottom">{{ $about->mission_title}}</h2>
                        <p>{!! $about->mission_text !!}</p>

                    </div>


                    <div class="col-md-4">
                        <h2 class="text-uppercase font-weight-600 mt-0 font-28 line-bottom">{{ $about->vision_title }}</h2>
                        <p>{!! $about->vision_text !!}</p>

                    </div>
                    <div class="col-md-4">
                        <h2 class="text-uppercase font-weight-600 mt-0 font-28 line-bottom">{{ $about->objectives_title}}
                        </h2>
                        <p>{!! $about->objectives_text !!}</p>
                        <div>
                        </div>
                    </div>
                </div>
    </section>



    <!-- Divider: Funfact -->
   <section class="divider parallax layer-overlay overlay-dark-9"
    data-bg-img="{{asset('uploads/about/')}}/{{$about->counter_image}}" data-parallax-ratio="0.7">
    <div class="container pt-80 pb-80">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
                <div class="funfact text-center">
                    <i class="pe-7s-smile mt-5 text-white"></i>
                    <h2 data-animation-duration="2000" data-value="{{ $about->counter1}}"
                        class="animate-number text-white font-42 font-weight-500 mt-0 mb-0">0</h2>
                    <h5 class="text-white text-uppercase font-weight-600">{{ trans('frontend.happy_member') }}</h5>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
                <div class="funfact text-center">
                    <i class="pe-7s-rocket mt-5 text-white"></i>
                    <h2 data-animation-duration="2000" data-value="{{ $about->counter2}}"
                        class="animate-number text-white font-42 font-weight-500 mt-0 mb-0">0</h2>
                    <h5 class="text-white text-uppercase font-weight-600">{{ trans('frontend.success_mission') }} </h5>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
                <div class="funfact text-center">
                    <i class="pe-7s-add-user mt-5 text-white"></i>
                    <h2 data-animation-duration="2000" data-value="{{ $about->counter3}}"
                        class="animate-number text-white font-42 font-weight-500 mt-0 mb-0">0</h2>
                    <h5 class="text-white text-uppercase font-weight-600">{{ trans('frontend.ibda_reached') }}</h5>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
                <div class="funfact text-center">
                    <i class="pe-7s-global mt-5 text-white"></i>
                    <h2 data-animation-duration="2000" data-value="{{ $about->counter4}}"
                        class="animate-number text-white font-42 font-weight-500 mt-0 mb-0">0</h2>
                    <h5 class="text-white text-uppercase font-weight-600">{{ trans('frontend.event') }}</h5>
                </div>
            </div>
        </div>
    </div>
</section>
<br>
@endsection
