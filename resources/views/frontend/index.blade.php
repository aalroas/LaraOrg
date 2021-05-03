@extends('frontend.layouts.app')

@section('title', GeneralSiteSettings('site_title') . ' | ' . __('navs.general.home'))

@section('content')

    <!-- Section: home -->
    <section id="home">
      <div class="container-fluid p-0">

        <!-- Slider Revolution Start -->
        <div class="rev_slider_wrapper">
          <div class="rev_slider rev_slider_fullscreen" data-version="5.0">
            <ul>
        @foreach ($sliders as $slider)
              <!-- SLIDE 1 -->
            <li data-index="rs-{{ $loop->index + 1 }}" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default"
            data-easeout="default" data-masterspeed="default" data-thumb="{{asset('uploads/sliders/')}}/{{$slider->image}}" data-rotate="0"
            data-saveperformance="off" data-title="" data-description="">
            <!-- MAIN IMAGE -->
            <img src="{{asset('uploads/sliders/')}}/{{$slider->image}}" alt="{{$slider->title}}" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat"
                class="rev-slidebg" data-bgparallax="10" data-no-retina>

            <!-- LAYER NR. 1 -->
            <div class="tp-caption tp-resizeme text-uppercase text-white font-raleway bg-theme-colored-transparent pl-20 pr-20"
                id="rs-{{ $loop->index + 1 }}-layer-1" data-x="['middle']" data-hoffset="['0']" data-y="['middle']" data-voffset="['-25']"
                data-fontsize="['35']" data-lineheight="['54']" data-width="none" data-height="none" data-whitespace="nowrap"
                data-transform_idle="o:1;s:500" data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on"
                style="z-index: 7; white-space: nowrap; font-weight:600;">{{$slider->title}}
            </div>

            <!-- LAYER NR. 2 -->
            <div class="tp-caption tp-resizeme text-white" id="rs-{{ $loop->index + 1 }}-layer-2" data-x="['middle']" data-hoffset="['0']"
                data-y="['middle']" data-voffset="['35','35','40']" data-fontsize="['16','18',24']" data-lineheight="['28']"
                data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;s:500"
                data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                data-start="1400" data-splitin="none" data-splitout="none" data-responsive_offset="on"
                style="z-index: 5; white-space: nowrap; letter-spacing:0px; font-weight:400;">
           {!! $slider->text !!}
            </div>

            <!-- LAYER NR. 3 -->
            <div class="tp-caption tp-resizeme" id="rs-{{ $loop->index + 1 }}-layer-3" data-x="['middle']" data-hoffset="['0']" data-y="['middle']"
                data-voffset="['95','105','110']" data-width="none" data-height="none" data-whitespace="nowrap"
                data-transform_idle="o:1;"
                data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                data-start="1400" data-splitin="none" data-splitout="none" data-responsive_offset="on"
                style="z-index: 5; white-space: nowrap; letter-spacing:1px;"><a
        class="btn btn-colored btn-lg btn-theme-colored pl-20 pr-20" href="{{ $slider->url }}">{{ trans('frontend.read_more')}}</a>
            </div>
        </li>
@endforeach
            </ul>
          </div>
          <!-- end .rev_slider -->
        </div>
        <!--  Revolution slider scriopt -->
        <script>
          $(document).ready(function(e) {
            $(".rev_slider_fullscreen").revolution({
              sliderType:"standard",
              sliderLayout: "fullscreen",
              dottedOverlay: "none",
              delay: 5000,
              navigation: {
                keyboardNavigation: "off",
                keyboard_direction: "horizontal",
                mouseScrollNavigation: "off",
                onHoverStop: "off",
                touch: {
                  touchenabled: "on",
                  swipe_threshold: 75,
                  swipe_min_touches: 1,
                  swipe_direction: "horizontal",
                  drag_block_vertical: false
                },
                arrows: {
                  style:"zeus",
                  enable:true,
                  hide_onmobile:false,
                  hide_under:600,
                  hide_onleave:true,
                  hide_delay:200,
                  hide_delay_mobile:1200,
                  tmp:'<div class="tp-title-wrap">    <div class="tp-arr-imgholder"></div></div>',
                  left: {
                    h_align:"left",
                    v_align:"center",
                    h_offset:30,
                    v_offset:0
                  },
                  right: {
                    h_align:"right",
                    v_align:"center",
                    h_offset:30,
                    v_offset:0
                  }
                },
                bullets: {
                  enable:true,
                  hide_onmobile:false,
                  hide_under:600,
                  style:"metis",
                  hide_onleave:true,
                  hide_delay:200,
                  hide_delay_mobile:1200,
                  direction:"horizontal",
                  h_align:"center",
                  v_align:"bottom",
                  h_offset:0,
                  v_offset:30,
                  space:5,
                  tmp:'<span class="tp-bullet-img-wrap">  <span class="tp-bullet-image"></span></span>'
                }
              },
              responsiveLevels: [1240, 1024, 778],
              visibilityLevels: [1240, 1024, 778],
              gridwidth: [1170, 1024, 778, 480],
              gridheight: [600, 768, 960, 720],
              lazyType: "none",
              parallax: {
                origo: "slidercenter",
                speed: 1000,
                levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 100, 55],
                type: "scroll"
              },
              shadow: 0,
              spinner: "off",
              stopLoop: "on",
              stopAfterLoops: 0,
              stopAtSlide: -1,
              shuffle: "off",
              autoHeight: "off",
              fullScreenAutoWidth: "off",
              fullScreenAlignForce: "off",
              fullScreenOffsetContainer: "",
              fullScreenOffset: "0",
              hideThumbsOnMobile: "off",
              hideSliderAtLimit: 0,
              hideCaptionAtLimit: 0,
              hideAllCaptionAtLilmit: 0,
              debugMode: false,
              fallbacks: {
                simplifyAll: "off",
                nextSlideOnWindowFocus: "off",
                disableFocusListener: false,
              }
            });
          });
        </script>
        <!-- Slider Revolution Ends -->
      </div>
    </section>



@if ($event != "")
<!-- Section: Countdown  -->
<section class="bg-theme-colored">
    <div class="container pt-0 pb-0">
        <div class="row">
            <div class="col-md-12">
                <div class="divider call-to-action sm-text-center pt-10 pb-30">
                    <div class="col-md-7">
                        <h2 class="text-white mt-20 mb-0"> {{ trans('frontend.our_next_event_will_launch') }}</h2><br>
                        <h3 class="text-white mt-5"> {{ $event->name}} </h3>
                        <a class="btn btn-default btn-flat mt-10 mb-5" href="{{ route('frontend.event',$event->slug)}}">{{ trans('frontend.read_more') }}</a>
                    </div>
                    <div class="col-md-5">
                        <div class="text-center text-white font-13 pt-30 mt-5" data-countdown="{{ date('Y/m/d',strtotime($event->start_date)) }}"></div>
                        <!-- Final Countdown Timer Script -->
                        <script type="text/javascript">
                            $(document).ready(function() {
                    $('[data-countdown]').each(function() {
                      var $this = $(this), finalDate = $(this).data('countdown');
                        $this.countdown(finalDate, function(event) {
                        $this.html(event.strftime('<ul class="list-inline home-countdown"><li><span>%D</span><br> {{ trans('frontend.days') }}</li><li><span>%H</span><br> {{ trans('frontend.hour') }}</li><li><span>%M</span><br>{{ trans('frontend.minites') }} </li><li><span>%S</span><br> {{ trans('frontend.seconds') }} </li></ul>'));
                      });
                    });
                  });
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endif

    <!-- Section: Intro  -->
    <section id="about">
      <div class="container">
        <div class="section-content">
          <div class="row">


{{-- // about --}}
       <div class="col-xs-12 col-sm-6 col-md-6 pb-sm-20">
              <h3  class="line-bottom">{{ $about->about_title }} </h3>
              <div   style="text-align: center;background-image: url({{asset('uploads/settings')}}/{{GeneralSiteSettings("site_logo")}});background-repeat: no-repeat;background-position: center;background-size: contain;" class="fluid-video-wrapper">
               <a style=" z-index: 99; position: inherit;" href="{{$about->url}}" data-lightbox-gallery="youtube-video"><i
               style="padding: 95px;color:red;"   class="fa fa-play-circle   font-72"></i></a>
            </div>
              <div class="image-box-details pt-20 pb-sm-20">
                <p style="text-align: justify;" class="lead mb-15">{!! $about->about_text !!}</p>
            <a href="{{route('frontend.about')}}" class="btn btn-sm btn-theme-colored mt-10">{{ trans('frontend.read_more') }}</a>
              </div>
            </div>
{{-- // become member --}}
            <div class="col-sm-6 col-md-6 pb-sm-20">
              <h3 class="line-bottom border-bottom mt-0">{{ trans('frontend.become_a_ibda_member') }}</h3>
            <img src="{{ asset('uploads/about/')}}/{{$about->about_image }}" alt="{{ GeneralSiteSettings('site_title')}}">
            <ul class="styled-icons icon-dark icon-theme-colored icon-circle icon-sm mt-10 mb-5">
                <li><a href="{{ GeneralSiteSettings('site_facebook_url')}}"><i class="fa fa-facebook"></i></a></li>
                <li><a href="{{ GeneralSiteSettings('site_twitter_url')}}"><i class="fa fa-twitter"></i></a></li>
                <li><a href="{{ GeneralSiteSettings('site_whatsapp_url')}}"><i class="fa fa-whatsapp"></i></a></li>
                <li><a href="{{ GeneralSiteSettings('site_youtube_url')}}"><i class="fa fa-youtube"></i></a></li>
                <li><a href="{{ GeneralSiteSettings('site_instagram_url')}}"><i class="fa fa-instagram"></i></a></li>
                <li><a href="{{ GeneralSiteSettings('site_linkedin_url')}}"><i class="fa fa-linkedin"></i></a></li>
             </ul>
            <p class="mb-15" style="text-align: justify;">{{ trans('frontend.join_the_us_and_enjoy_all_the_benefits_of_the_membership') }}.</p>
            <a href="{{URL('/register')}}" class="btn btn-colored btn-sm btn-theme-colored mt-5">{{ trans('frontend.register') }}</a>
            </div>
          </div>
        </div>
      </div>
    </section>




    <!-- Section: Upcoming Events & Running Project-->
    <section class="bg-silver-light">
      <div class="container">
        <div class="section-content">
          <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6">
              <h3 class="line-bottom border-bottom mt-0"> {{ trans('frontend.upcoming_events') }}</h3>

@foreach($events as $event)
              <div class="event media sm-maxwidth400 mt-5 mb-0 pt-10 pb-15">
                <div class="row">
                  <div class="col-xs-2 col-md-3 pr-0">
                    <div class="event-date text-center bg-theme-colored border-1px p-0 pt-10 pb-10 sm-custom-style">
                      <ul>
                        <li class="font-28 text-white font-weight-700">{{ date('d',strtotime($event->start_date)) }}</li>
                        <li class="font-18 text-white text-center text-uppercase">{{ date('M',strtotime($event->start_date)) }}</li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-xs-9 pr-10 pl-10">
                    <div class="event-content mt-10 p-5 pb-0 pt-0">
                    <h5 class="media-heading font-16 font-weight-600"><a href="{{ route('frontend.event',$event->slug)}}">{{ $event->name }}</a></h5>
                      <ul class="list-inline font-weight-600 text-gray-dimgray">
                        <li><i class="fa fa-clock-o text-theme-colored"></i>{{date('d/m/Y - H:i',strtotime($event->start_date)) }} - {{ date('d/m/Y - H:i',strtotime($event->end_date)) }}</li>
                        <li> <i class="fa fa-map-marker text-theme-colored"></i> {{ $event->location }} </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
@endforeach
<div class="separator">
    <a href="{{route('frontend.events')}}"> <span>{{ trans('frontend.view_all') }}</span></a>
</div>
            </div>

            <div class="col-md-6 col-sm-12">
              <h3 class="text-uppercase title line-bottom mt-0 mb-30"><i class="fa fa-thumb-tack text-theme-colored mr-10"></i>{{ trans('frontend.bylaws') }}</h3>

{{-- // org bylaws --}}

    <p class="mb-15" style="text-align: justify;">{{ $bylaws->g_title }}</p>

    <div class="event-content pull-left flip">
        <p class="mb-15" style="text-align: justify;">{!! $bylaws->g_text !!}</p>

        <a class="btn btn-gray mt-10" href="{{asset('uploads/static')}}/{{$bylaws->g_pdf}}"><i
                class="fa fa-file-pdf-o pr-5"></i> {{ trans('frontend.download') }} : {{ $bylaws->g_title }} </a>
    </div>

            </div>
          </div>
        </div>
      </div>
    </section>










    <!-- Section: Upcoming Events & Running Project-->
    <section>
        <div class="container">
            <div class="section-content">
                <div class="row">

                    <div class="col-md-12 col-sm-12">
                        <h3 class="text-uppercase title line-bottom mt-0 mb-30"><i
                                class="fa fa-thumb-tack text-theme-colored mr-10"></i>{{ trans('frontend.last') }} <span
                                class="text-theme-colored">{{ trans('frontend.activities') }}</span></h3>
                        <div class="owl-carousel-1col owl-dots-bottom-right">


                            @foreach ($activities as $activity)
                            <div class="causes">
                                <div class="row-fluid">
                                    <div class="col-md-5">
                                    <img src="{{asset('uploads/activities/')}}/{{ $activity->f_image }}" alt="{{ $activity->title }}">
                                    </div>
                                    <div class="col-md-7">
                                        <a href="{{route('frontend.activity',$activity->slug)}}"><h2 class="line-bottom mt-0">{{  $activity->title}}</h2></a>
                                        <p>{!!  Str::words($activity->text,30,'...') !!}</p>

                                        <div class="mt-10 mb-20">
                                            <ul class="list-inline clearfix mt-10">
                                                <li class="pull-left flip pr-0">{{ trans('frontend.activity_uint') }}: <span class="font-weight-700 font-">

                                                @foreach ($activity->unit_types as $unit)
                                                {{ $unit->name }}
                                                @endforeach


                                                 </span></li>
                                                <li class="text-theme-colored pull-right flip pr-0">{{ trans('frontend.activity_type') }}: <span class="font-weight-700">
                                                    @foreach ($activity->activity_types as $activityt)
                                                    {{ $activityt->name }}
                                                    @endforeach
                                                </span></li>
                                            </ul>
                                        </div>
                                        <a class="btn btn-theme-colored btn-sm" href="{{route('frontend.activity',$activity->slug)}}">{{ trans('frontend.read_more') }}</a>
                                    </div>
                                </div>
                            </div>

@endforeach

                        </div>
                    </div>

                </div>
                <div class="separator">
    <a href="{{route('frontend.activities')}}"> <span>{{ trans('frontend.view_all') }}</span></a>
</div>

            </div>
        </div>
    </section>




    <!-- Section: Donors Say -->
    <section class="divider parallax layer-overlay overlay-dark-8" data-background-ratio="0.5" data-bg-img="{{asset('uploads/about/')}}/{{$about->about_image}}">
      <div class="container pt-60 pb-60">
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <h2 class="line-bottom-center text-white text-center mt-0 mb-30">{{ trans('frontend.our_members_say') }}</h2>
            <div class="owl-carousel-1col" data-dots="true">

                @foreach ($testimonials as $testimonial)
              <div class="item">
                <div class="testimonial-wrapper text-center">
                <div class="thumb"><img class="img-circle" alt="{{$testimonial->title}}" src="{{asset('uploads/testimonials')}}/{{$testimonial->image}}"></div>
                  <div class="content pt-10">
                    <p class="font-15 text-white"><em>{!! $testimonial->text !!}</em></p>
                    <i class="fa fa-quote-right font-36 mt-10 text-gray-lightgray"></i>
                    <h4 class="author text-theme-colored mb-0"> {{$testimonial->title}}</h4>
                  </div>
                </div>
              </div>
@endforeach
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- Section: blog -->
    <section id="blog">
      <div class="container">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-10 col-md-offset-1">
              <h2 class="text-uppercase line-bottom-center mt-0">{{ trans('frontend.our_blog') }}</h2>
            </div>
          </div>
        </div>
        <div class="section-content">
          <div class="row">

@foreach ($posts as $post)


            <div class="col-xs-12 col-sm-6 col-md-4">
              <article class="post clearfix mb-sm-30 bg-silver-light">
                <div class="entry-header">
                  <div class="post-thumb thumb">
                 <a href="{{route('frontend.new',$post->slug)}}"><img src="{{asset('uploads/posts/')}}/{{ $post->f_image}}" alt="{{$post->title}}" class="img-responsive img-fullwidth"></a>
                  </div>
                </div>

                <div class="entry-content p-20 pr-10">
                  <div class="entry-meta media mt-0 no-bg no-border">
                    <div class="entry-date media-left text-center flip bg-theme-colored pt-5 pr-15 pb-5 pl-15">
                      <ul>
                        <li class="font-16 text-white font-weight-600 border-bottom">{{ date('d',strtotime($post->date)) }}</li>
                        <li class="font-12 text-white text-uppercase">{{ date('M',strtotime($post->date)) }}</li>
                      </ul>
                    </div>
                    <div class="media-body pl-15">
                      <div class="event-content pull-left flip">
                       <a href="{{route('frontend.new',$post->slug)}}"> <h4 class="entry-title text-black text-uppercase m-0 mt-5">{{$post->title}}</h4></a>
                      </div>
                    </div>
                  </div>
                <p  style="text-align: justify;" class="mt-10">{!! Str::words($post->text,20,'...') !!}</p>

                  <a style="padding-right: 42px;" href="{{route('frontend.new',$post->slug)}}" class="btn btn-default btn-sm btn-theme-colored mt-10">{{ trans('frontend.read_more') }}</a>
                </div>
              </article>
            </div>
@endforeach



          </div>
<div class="separator">
    <a href="{{route('frontend.news')}}"> <span>{{ trans('frontend.view_all') }}</span></a>
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
