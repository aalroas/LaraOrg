@extends('frontend.layouts.app')

@section('title', GeneralSiteSettings('site_title') . ' | ' . __('navs.general.about'))

@section('content')



    <section class="section-padding">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 margin-md-60">
                <div class="m-bottom-35">

                    <div class="divider divider-simple text-left">
                        <h2 class="m-bottom-20">{{ $about->about_title}}</h2>
                    </div>

                </div>
                <p>
               {!! $about->about_text  !!} </p>

            </div><!-- ends: .col-lg-5 -->
            <div class="col-lg-6 offset-lg-1">

                <div class="video-single">
                    <figure>
                        <div class="v_img">
                            <img src="{{URL('uploads/about/')}}/{{$about->about_image}}" alt="{{ $about->about_title}}" class="rounded">

                        </div>
                        <figcaption
                            class="d-flex justify-content-center align-items-center shape-wrapper img-shape-two">
                            <a href="{{$about->url}}" class="video-iframe play-btn play-btn--lg play-btn--primary">
                                <img src="{{asset('frontend/img/svg/play-btn.svg') }}" alt="" class="svg"></a>
                        </figcaption>
                    </figure>
                </div><!-- ends: .video-single -->

            </div><!-- ends: .col-lg-6 -->
        </div><!-- ends: .row -->
    </div>
</section><!-- ends: section -->


<div class="counter counter--7 biz_overlay overlay--primary">
    <div class="bg_image_holder"><img src="img/cbg5.jpg" alt=""></div>
    <div class="container content_above">
        <div class="row align-items-center">
            <div class="col-md-5 margin-md-60">
                <div class="counter_left_content">
                <h4>{{ $about->counter_title}}</h4>
                    <p>
{!! $about->counter_text !!}
                    </p>
                </div>
            </div>

            <div class="col-md-6 offset-md-1">
                <div class="row">
                    <div class="col-sm-6">

                        <div class="counter_single">

                        <p class="value count_up">{{ $about->counnter1}} </p>
                            <p class="title">USD Revenue</p>
                        </div><!-- end: .counter_single -->

                    </div>
                    <div class="col-sm-6">

                        <div class="counter_single">

                            <p class="value count_up">{{ $about->counnter2}}</p>
                            <p class="title">USD Assets</p>
                        </div><!-- end: .counter_single -->

                    </div>
                    <div class="col-sm-6">

                        <div class="counter_single">

                            <p class="value count_up">{{ $about->counnter3}}</p>
                            <p class="title">Employees</p>
                        </div><!-- end: .counter_single -->

                    </div>
                    <div class="col-sm-6">

                        <div class="counter_single">

                            <p class="value count_up">{{ $about->counnter4}}</p>
                            <p class="title">USD Net Income</p>
                        </div><!-- end: .counter_single -->

                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- ends: .counter -->


<section class="section-bg p-top-100 p-bottom-110">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 margin-md-60">
                <div class="m-bottom-30">

                    <div class="divider divider-simple text-left">
                        <h2 class="m-bottom-20">{{ $about->mission_title}}</h2>
                    </div>

                </div>
                <p>

{!! $about->mission_text !!}
                </p>

            </div><!-- ends: .col-lg-6 -->

            <div class="col-lg-4">
                <div class="m-bottom-30">

                    <div class="divider divider-simple text-left">
                    <h2 class="m-bottom-20">{{ $about->vision_title }}</h2>
                    </div>

                </div>
          <p>

                {!! $about->vision_text !!}
            </p>
            </div><!-- ends: .col-lg-6 -->

            <div class="col-lg-4">
                <div class="m-bottom-30">

                    <div class="divider text-left">
                        <h2>{{ $about->objectives_title}} </h2>
                        <p class="mx-auto">
                            {!! $about->objectives_text  !!}
                        </p>
                    </div>

                </div>



            </div><!-- ends: .col-lg-5 -->

        </div>
    </div>
</section><!-- ends: section -->



@endsection
