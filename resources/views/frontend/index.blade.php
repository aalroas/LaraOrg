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
           {{$slider->text}}
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
        class="btn btn-colored btn-lg btn-theme-colored pl-20 pr-20" href="{{ $slider->url }}">Read More</a>
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
                  hide_onmobile:true,
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
                  hide_onmobile:true,
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
                        <h2 class="text-white mt-20 mb-0">Our Next Event will Launch</h2>
                        <h5 class="text-white mt-5">Changing lives to make easier for child education and drinking
                            water!</h5>
                        <a class="btn btn-default btn-flat mt-10 mb-5" href="{{route('frontend.event',$event->id)}}">{{ trans('translation.more_info') }}</a>
                    </div>
                    <div class="col-md-5">
                        <div class="text-center text-white font-13 pt-30 mt-5" data-countdown="{{ date('Y/m/d',strtotime($event->start_date)) }}"></div>
                        <!-- Final Countdown Timer Script -->
                        <script type="text/javascript">
                            $(document).ready(function() {
                    $('[data-countdown]').each(function() {
                      var $this = $(this), finalDate = $(this).data('countdown');
                        $this.countdown(finalDate, function(event) {
                        $this.html(event.strftime('<ul class="list-inline home-countdown"><li><span>%D</span><br> {{ trans('translation.days') }}</li><li><span>%H</span><br> {{ trans('translation.hour') }}</li><li><span>%M</span><br>{{ trans('translation.minites') }} </li><li><span>%S</span><br> {{ trans('translation.seconds') }} </li></ul>'));
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
            <div class="col-xs-12 col-sm-6 col-md-4 pb-sm-20">
              <h3 class="line-bottom mt-0">{{ $about->about_title }} </h3>
              <div class="image-box-thum">
              <iframe src="{{$about->url }}" height="210"  title="IBDA policy" allowfullscreen></iframe>
              </div>
              <div class="image-box-details pt-20 pb-sm-20">
                <p class="lead mb-15">

{{ $about->about_text }}

                </p>
            <a href="{{route('frontend.about')}}" class="btn btn-sm btn-theme-colored mt-10">{{ trans('translation.read_more') }}</a>
              </div>
            </div>
            <div class="col-sm-6 col-md-4 pb-sm-20">
              <h3 class="line-bottom border-bottom mt-0">Become a IBDA</h3>
            <img src="{{ asset('frontend/images/about/ab1.png') }}" alt="{{ GeneralSiteSettings('site_title')}}">

              <p class="mb-5">Lorem ipsum dolor sit amet, consec teturadip cing elit. Quod quidem, ipsum tempora.</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error, excepturi ratione! Quis cum fugiat.</p>
              <a href="#" class="btn btn-colored btn-sm btn-theme-colored mt-5">See Details</a>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
              <!-- IBDA Form Starts -->
              <form id="paypal_donate_form_onetime_recurring" class="form p-30" data-bg-img="images/about/f1.jpg">
                <div class="row">
                  <div class="col-md-12">
                    <h3 class="text-white line-bottom mt-0 mb-30">Make a <span class="text-theme-colored">IBDA</span> Now</h3>
                    <div class="form-group text-white mb-30">
                      <label><strong class="text-white">Payment Type</strong></label> <br>
                      <label class="radio-inline">
                        <input checked="" value="one_time" name="payment_type" type="radio">
                        One Time
                      </label>
                      <label class="radio-inline">
                        <input value="recurring" name="payment_type" type="radio">
                        Recurring
                      </label>
                    </div>
                  </div>

                  <div class="col-sm-12" id="donation_type_choice" style="display: none;">
                    <div class="form-group mb-20">
                      <label><strong class="text-white">IBDA Type</strong></label>
                      <div class="radio text-white mt-5">
                        <label class="radio-inline">
                          <input value="D" name="t3" checked="" type="radio">
                          Daily</label>
                        <label class="radio-inline">
                          <input value="W" name="t3" type="radio">
                          Weekly</label>
                        <label class="radio-inline">
                          <input value="M" name="t3" type="radio">
                          Monthly</label>
                        <label class="radio-inline">
                          <input value="Y" name="t3" type="radio">
                          Yearly</label>
                      </div>
                    </div>
                  </div>

                  <div class="col-sm-6">
                    <div class="form-group mb-20">
                      <label><strong class="text-white">Donate for</strong></label>
                      <select name="item_name" class="form-control">
                        <option value="Educate Children">Educate Children</option>
                        <option value="Child Camps">Child Camps</option>
                        <option value="Clean Water for Life">Clean Water for Life</option>
                        <option value="Campaign for Child Poverty">Campaign for Child Poverty</option>
                      </select>
                    </div>
                  </div>

                  <div class="col-sm-6">
                    <div class="form-group mb-30">
                      <label><strong class="text-white">Currency</strong></label>
                      <select name="currency_code" class="form-control">
                        <option value="">Select Currency</option>
                        <option value="USD" selected="selected">USD - U.S. Dollars</option>
                        <option value="AUD">AUD - Australian Dollars</option>
                        <option value="BRL">BRL - Brazilian Reais</option>
                        <option value="GBP">GBP - British Pounds</option>
                        <option value="HKD">HKD - Hong Kong Dollars</option>
                        <option value="HUF">HUF - Hungarian Forints</option>
                        <option value="INR">INR - Indian Rupee</option>
                        <option value="ILS">ILS - Israeli New Shekels</option>
                        <option value="JPY">JPY - Japanese Yen</option>
                        <option value="MYR">MYR - Malaysian Ringgit</option>
                        <option value="MXN">MXN - Mexican Pesos</option>
                        <option value="TWD">TWD - New Taiwan Dollars</option>
                        <option value="NZD">NZD - New Zealand Dollars</option>
                        <option value="NOK">NOK - Norwegian Kroner</option>
                        <option value="PHP">PHP - Philippine Pesos</option>
                        <option value="PLN">PLN - Polish Zlotys</option>
                        <option value="RUB">RUB - Russian Rubles</option>
                        <option value="SGD">SGD - Singapore Dollars</option>
                        <option value="SEK">SEK - Swedish Kronor</option>
                        <option value="CHF">CHF - Swiss Francs</option>
                        <option value="THB">THB - Thai Baht</option>
                        <option value="TRY">TRY - Turkish Liras</option>
                      </select>
                    </div>
                  </div>

                  <div class="col-sm-12">
                    <div class="form-group mb-30">
                      <label><strong class="text-white">How much do you want to donate?</strong></label>
                      <select name="amount" class="form-control">
                          <option value="20">20</option>
                          <option value="50">50</option>
                          <option value="100">100</option>
                          <option value="200">200</option>
                          <option value="500">500</option>
                          <option value="other">Other Amount</option>
                      </select>
                      <div id="custom_other_amount" style="display: none;">
                        <label><strong>Custom Amount:</strong></label>
                      </div>
                    </div>
                  </div>

                  <div class="col-sm-12">
                    <div class="form-group">
                      <button type="submit" class="btn btn-flat btn-dark btn-theme-colored mt-10 pl-30 pr-30" data-loading-text="Please wait...">Donate Now</button>
                    </div>
                  </div>
                </div>
              </form>

              <!-- Appointment Form Validation-->
              <script type="text/javascript">
                $("#home_appointment_form").validate({
                  submitHandler: function(form) {
                    var form_btn = $(form).find('button[type="submit"]');
                    var form_result_div = '#form-result';
                    $(form_result_div).remove();
                    form_btn.before('&lt;div id="form-result" class="alert alert-success" role="alert" style="display: none;"&gt;&lt;/div&gt;');
                    var form_btn_old_msg = form_btn.html();
                    form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
                    $(form).ajaxSubmit({
                      dataType:  'json',
                      success: function(data) {
                        if( data.status == 'true' ) {
                          $(form).find('.form-control').val('');
                        }
                        form_btn.prop('disabled', false).html(form_btn_old_msg);
                        $(form_result_div).html(data.message).fadeIn('slow');
                        setTimeout(function(){ $(form_result_div).fadeOut('slow') }, 6000);
                      }
                    });
                  }
                });
              </script>
              <!-- Appointment Form Ends -->
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: About -->
    <section class="bg-silver-light">
      <div class="container">
        <div class="section-content">
          <div class="row">
            <div class="col-md-6">
              <h2 class="text-uppercase font-weight-600 mt-0 font-28 line-bottom">Rise your Helping Hand please save the children.</h2>
              <h4 class="text-theme-colored">Lorem ipsum dolor sit amet soluta saepe odit error, maxime praesentium sunt udiandae!</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore atque officiis maxime suscipit expedita obcaecati nulla in ducimus iure quos quam recusandae dolor quas et perspiciatis voluptatum accusantium delectus nisi reprehenderit, eveniet fuga modi pariatur, eius vero. Ea vitae maiores.</p>
              <a class="btn btn-theme-colored btn-flat btn-lg mt-10 mb-sm-30" href="#">Read More →</a>
            </div>
            <div class="col-md-6">
              <div class="owl-carousel-1col" data-nav="true">
                <div class="item">
                  <img src="images/about/5.jpg" alt="">
                </div>
                <div class="item">
                  <img src="images/about/6.jpg" alt="">
                </div>
                <div class="item">
                  <img src="images/about/7.jpg" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- divider: Emergency Services -->
    <section class="divider parallax layer-overlay overlay-dark-9" data-stellar-background-ratio="0.2"  data-bg-img="images/bg/bg2.jpg">
      <div class="container">
        <div class="section-content text-center">
          <div class="row">
            <div class="col-md-12">
              <h2 class="mt-0 text-white">How you can help us</h2>
              <h2 class="text-white">Just call at <span class="text-theme-colored">(01) 234 5678</span> to make a IBDA</h2>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Causes -->
    <section id="causes" class="bg-silver-light">
      <div class="container pb-40">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-10 col-md-offset-1">
              <h2 class="text-uppercase line-bottom-center mt-0">Our <span class="text-theme-colored font-weight-600">Causes</span></h2>
              <div class="title-icon">
                <i class="flaticon-charity-hand-holding-a-heart"></i>
              </div>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem autem voluptatem obcaecati! <br>ipsum dolor sit Rem autem voluptatem obcaecati</p>
            </div>
          </div>
        </div>
        <div class="row multi-row-clearfix">
          <div class="col-sm-6 col-md-3 col-lg-3">
            <div class="causes bg-white maxwidth500 mb-30">
              <div class="thumb">
                <img src="images/project/1.jpg" alt="" class="img-fullwidth">
                <div class="overlay-donate-now">
                  <a href="page-donate.html" class="btn btn-dark btn-theme-colored btn-flat btn-sm pull-left mt-10">Donate <i class="flaticon-charity-make-a-IBDA font-16 ml-5"></i></a>
                </div>
              </div>
              <div class="causes-details clearfix  border-bottom-theme-color-1px p-15 pt-10 pb-10">
                <h5 class="font-weight-600 font-16"><a href="page-single-cause.html">Education for Childreen</a></h5>
                <p>Lorem ipsum dolor sit amet, consect adipisicing elit Praesent</p>
                <div class="progress-item mt-0">
                  <div class="progress mb-0">
                    <div data-percent="84" class="progress-bar"><span class="percent">0</span></div>
                  </div>
                </div>
                <ul class="list-inline project-conditions mt-20 text-center m-0 p-10">
                  <li class="target-fund text-theme-colored"><strong>$120,000</strong>Target</li>
                  <li class="day text-theme-colored"><i class="flaticon-charity-hand-holding-a-heart font-30"></i></li>
                  <li class="raised text-theme-colored"><strong>$65,000</strong>Raised</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-3 col-lg-3">
            <div class="causes bg-white maxwidth500 mb-30">
              <div class="thumb">
                <img src="images/project/2.jpg" alt="" class="img-fullwidth">
                <div class="overlay-donate-now">
                  <a href="page-donate.html" class="btn btn-dark btn-theme-colored btn-flat btn-sm pull-left mt-10">Donate <i class="flaticon-charity-make-a-IBDA font-16 ml-5"></i></a>
                </div>
              </div>
              <div class="causes-details clearfix  border-bottom-theme-color-1px p-15 pt-10 pb-10">
                <h5 class="font-weight-600 font-16"><a href="page-single-cause.html">Education for Childreen</a></h5>
                <p>Lorem ipsum dolor sit amet, consect adipisicing elit Praesent</p>
                <div class="progress-item mt-0">
                  <div class="progress mb-0">
                    <div data-percent="84" class="progress-bar"><span class="percent">0</span></div>
                  </div>
                </div>
                <ul class="list-inline project-conditions mt-20 text-center m-0 p-10">
                  <li class="target-fund text-theme-colored"><strong>$120,000</strong>Target</li>
                  <li class="day text-theme-colored"><i class="flaticon-charity-hand-holding-a-heart font-30"></i></li>
                  <li class="raised text-theme-colored"><strong>$65,000</strong>Raised</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-3 col-lg-3">
            <div class="causes bg-white maxwidth500 mb-30">
              <div class="thumb">
                <img src="images/project/3.jpg" alt="" class="img-fullwidth">
                <div class="overlay-donate-now">
                  <a href="page-donate.html" class="btn btn-dark btn-theme-colored btn-flat btn-sm pull-left mt-10">Donate <i class="flaticon-charity-make-a-IBDA font-16 ml-5"></i></a>
                </div>
              </div>
              <div class="causes-details clearfix  border-bottom-theme-color-1px p-15 pt-10 pb-10">
                <h5 class="font-weight-600 font-16"><a href="page-single-cause.html">Education for Childreen</a></h5>
                <p>Lorem ipsum dolor sit amet, consect adipisicing elit Praesent</p>
                <div class="progress-item mt-0">
                  <div class="progress mb-0">
                    <div data-percent="84" class="progress-bar"><span class="percent">0</span></div>
                  </div>
                </div>
                <ul class="list-inline project-conditions mt-20 text-center m-0 p-10">
                  <li class="target-fund text-theme-colored"><strong>$120,000</strong>Target</li>
                  <li class="day text-theme-colored"><i class="flaticon-charity-hand-holding-a-heart font-30"></i></li>
                  <li class="raised text-theme-colored"><strong>$65,000</strong>Raised</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-3 col-lg-3">
            <div class="causes bg-white maxwidth500 mb-30">
              <div class="thumb">
                <img src="images/project/4.jpg" alt="" class="img-fullwidth">
                <div class="overlay-donate-now">
                  <a href="page-donate.html" class="btn btn-dark btn-theme-colored btn-flat btn-sm pull-left mt-10">Donate <i class="flaticon-charity-make-a-IBDA font-16 ml-5"></i></a>
                </div>
              </div>
              <div class="causes-details clearfix  border-bottom-theme-color-1px p-15 pt-10 pb-10">
                <h5 class="font-weight-600 font-16"><a href="page-single-cause.html">Education for Childreen</a></h5>
                <p>Lorem ipsum dolor sit amet, consect adipisicing elit Praesent</p>
                <div class="progress-item mt-0">
                  <div class="progress mb-0">
                    <div data-percent="84" class="progress-bar"><span class="percent">0</span></div>
                  </div>
                </div>
                <ul class="list-inline project-conditions mt-20 text-center m-0 p-10">
                  <li class="target-fund text-theme-colored"><strong>$120,000</strong>Target</li>
                  <li class="day text-theme-colored"><i class="flaticon-charity-hand-holding-a-heart font-30"></i></li>
                  <li class="raised text-theme-colored"><strong>$65,000</strong>Raised</li>
                </ul>
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
            <div class="col-xs-12 col-sm-6 col-md-4">
              <h3 class="line-bottom border-bottom mt-0"> {{ trans('translation.upcoming_events') }}</h3>

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
                    <h5 class="media-heading font-16 font-weight-600"><a href="{{ route('frontend.event',$event->id)}}">{{ $event->name }}</a></h5>
                      <ul class="list-inline font-weight-600 text-gray-dimgray">
                        <li><i class="fa fa-clock-o text-theme-colored"></i>{{date('d/m/Y - H:i',strtotime($event->start_date)) }} - {{ date('d/m/Y - H:i',strtotime($event->end_date)) }}</li>
                        <li> <i class="fa fa-map-marker text-theme-colored"></i> {{ $event->location }} </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
@endforeach



            </div>
            <div class="col-md-8 col-sm-12">
              <h3 class="text-uppercase title line-bottom mt-0 mb-30"><i class="fa fa-thumb-tack text-theme-colored mr-10"></i>Running <span class="text-theme-colored">Project</span></h3>
              <div class="owl-carousel-1col owl-dots-bottom-right">
                <div class="causes">
                  <div class="row-fluid">
                    <div class="col-md-5">
                      <img src="images/gallery/h1.jpg" alt="">
                    </div>
                    <div class="col-md-7">
                      <h4 class="mt-0 mb-0 text-black-666">Featured Project:</h4>
                      <h2 class="line-bottom mt-0">Education for Childreen</h2>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam maxime nesciunt ex modi minus illum nemo provident ducimus, velit magnam consectetur adipisicing nemo provident ducimus, velit magnam.</p>
                      <div class="progress-item mt-0">
                        <div class="progress mb-0">
                          <div data-percent="84" class="progress-bar"><span class="percent">0</span></div>
                        </div>
                      </div>
                      <div class="mt-10 mb-20">
                        <ul class="list-inline clearfix mt-10">
                          <li class="pull-left flip pr-0">Raised: <span class="font-weight-700 font-">$1890</span></li>
                          <li class="text-theme-colored pull-right flip pr-0">Goal: <span class="font-weight-700">$2500</span></li>
                        </ul>
                      </div>
                      <a class="btn btn-theme-colored btn-sm" href="#">Donate Now</a>
                    </div>
                  </div>
                </div>
                <div class="causes">
                  <div class="row-fluid">
                    <div class="col-md-5">
                      <img src="images/gallery/h2.jpg" alt="">
                    </div>
                    <div class="col-md-7">
                      <h4 class="mt-0 mb-0 text-black-666">Featured Project:</h4>
                      <h2 class="line-bottom mt-0">Help Poor Childreen</h2>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam maxime nesciunt ex modi minus illum nemo provident ducimus, velit magnam consectetur adipisicing nemo provident ducimus, velit magnam.</p>
                      <div class="progress-item mt-0">
                        <div class="progress mb-0">
                          <div data-percent="84" class="progress-bar"><span class="percent">0</span></div>
                        </div>
                      </div>
                      <div class="mt-10 mb-20">
                        <ul class="list-inline clearfix mt-10">
                          <li class="pull-left flip pr-0">Raised: <span class="font-weight-700 font-">$1890</span></li>
                          <li class="text-theme-colored pull-right flip pr-0">Goal: <span class="font-weight-700">$2500</span></li>
                        </ul>
                      </div>
                      <a class="btn btn-theme-colored btn-sm" href="#">Donate Now</a>
                    </div>
                  </div>
                </div>
                <div class="causes">
                  <div class="row-fluid">
                    <div class="col-md-5">
                      <img src="images/gallery/h3.jpg" alt="">
                    </div>
                    <div class="col-md-7">
                      <h4 class="mt-0 mb-0 text-black-666">Featured Project:</h4>
                      <h2 class="line-bottom mt-0">Reduce World Poverty</h2>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam maxime nesciunt ex modi minus illum nemo provident ducimus, velit magnam consectetur adipisicing nemo provident ducimus, velit magnam.</p>
                      <div class="progress-item mt-0">
                        <div class="progress mb-0">
                          <div data-percent="84" class="progress-bar"><span class="percent">0</span></div>
                        </div>
                      </div>
                      <div class="mt-10 mb-20">
                        <ul class="list-inline clearfix mt-10">
                          <li class="pull-left flip pr-0">Raised: <span class="font-weight-700 font-">$1890</span></li>
                          <li class="text-theme-colored pull-right flip pr-0">Goal: <span class="font-weight-700">$2500</span></li>
                        </ul>
                      </div>
                      <a class="btn btn-theme-colored btn-sm" href="#">Donate Now</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Divider: Funfact -->
    <section class="divider parallax layer-overlay overlay-dark-9" data-bg-img="images/bg/bg4.jpg" data-parallax-ratio="0.7">
      <div class="container pt-80 pb-80">
        <div class="row">
          <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
            <div class="funfact text-center">
              <i class="pe-7s-smile mt-5 text-white"></i>
              <h2 data-animation-duration="2000" data-value="754" class="animate-number text-white font-42 font-weight-500 mt-0 mb-0">0</h2>
              <h5 class="text-white text-uppercase font-weight-600">Happy Donators</h5>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
            <div class="funfact text-center">
              <i class="pe-7s-rocket mt-5 text-white"></i>
              <h2 data-animation-duration="2000" data-value="675" class="animate-number text-white font-42 font-weight-500 mt-0 mb-0">0</h2>
              <h5 class="text-white text-uppercase font-weight-600">Success Mission</h5>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
            <div class="funfact text-center">
              <i class="pe-7s-add-user mt-5 text-white"></i>
              <h2 data-animation-duration="2000" data-value="1248" class="animate-number text-white font-42 font-weight-500 mt-0 mb-0">0</h2>
              <h5 class="text-white text-uppercase font-weight-600">IBDA Reached</h5>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
            <div class="funfact text-center">
              <i class="pe-7s-global mt-5 text-white"></i>
              <h2 data-animation-duration="2000" data-value="24" class="animate-number text-white font-42 font-weight-500 mt-0 mb-0">0</h2>
              <h5 class="text-white text-uppercase font-weight-600">Globalization Work</h5>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: volunteers -->
    <section id="team" class="bg-silver-light">
      <div class="container">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-10 col-md-offset-1">
              <h2 class="text-uppercase line-bottom-center mt-0">Our <span class="text-theme-colored font-weight-600">volunteers</span></h2>
              <div class="title-icon">
                <i class="flaticon-charity-hand-holding-a-heart"></i>
              </div>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem autem voluptatem obcaecati! <br>ipsum dolor sit Rem autem voluptatem obcaecati</p>
            </div>
          </div>
        </div>
        <div class="section-content">
          <div class="row multi-row-clearfix">
            <div class="col-xs-12 col-sm-6 col-md-4 mb-30">
              <div class="team-member clearfix">
                <div class="team-thumb">
                  <img alt="" src="images/team/team1.jpg" class="img-fullwidth">
                  <div class="overlay">
                    <div class="content">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea iste nihil ex libero ab esse, dignissimos maxime enim sint laborum.</p>
                    </div>
                  </div>
                </div>
                <div class="team-info bg-theme-colored">
                  <h3 class="mt-0 text-white">Sakib Jacson</h3>
                  <ul class="styled-icons icon-circled icon-theme-colored">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 mb-30">
              <div class="team-member clearfix">
                <div class="team-thumb">
                  <img alt="" src="images/team/team3.jpg" class="img-fullwidth">
                  <div class="overlay">
                    <div class="content">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea iste nihil ex libero ab esse, dignissimos maxime enim sint laborum.</p>
                    </div>
                  </div>
                </div>
                <div class="team-info bg-theme-colored">
                  <h3 class="mt-0 text-white">Jerin Jacson</h3>
                  <ul class="styled-icons icon-circled icon-theme-colored">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 mb-30">
              <div class="team-member clearfix">
                <div class="team-thumb">
                  <img alt="" src="images/team/team2.jpg" class="img-fullwidth">
                  <div class="overlay">
                    <div class="content">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea iste nihil ex libero ab esse, dignissimos maxime enim sint laborum.</p>
                    </div>
                  </div>
                </div>
                <div class="team-info bg-theme-colored">
                  <h3 class="mt-0 text-white">Alex Jacobson</h3>
                  <ul class="styled-icons icon-circled icon-theme-colored">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Gallery -->
    <section id="gallery">
      <div class="container">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-10 col-md-offset-1">
              <h2 class="text-uppercase line-bottom-center mt-0">Photo <span class="text-theme-colored font-weight-600">Gallery</span></h2>
              <div class="title-icon">
                <i class="flaticon-charity-hand-holding-a-heart"></i>
              </div>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem autem voluptatem obcaecati! <br>ipsum dolor sit Rem autem voluptatem obcaecati</p>
            </div>
          </div>
        </div>
        <div class="section-content">
          <div class="row">
            <div class="col-md-12">
              <!-- Portfolio Gallery Grid -->

              <div class="gallery-isotope grid-4 gutter-small clearfix" data-lightbox="gallery">
                <!-- Portfolio Item Start -->
                <div class="gallery-item">
                  <div class="thumb">
                    <img alt="project" src="images/gallery/gallery-md1.jpg" class="img-fullwidth">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a href="images/gallery/gallery-lg1.jpg"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Portfolio Item End -->

                <!-- Portfolio Item Start -->
                <div class="gallery-item">
                  <div class="thumb">
                    <img alt="project" src="images/gallery/gallery-md2.jpg" class="img-fullwidth">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a href="images/gallery/gallery-lg2.jpg"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Portfolio Item End -->

                <!-- Portfolio Item Start -->
                <div class="gallery-item">
                  <div class="thumb">
                    <img alt="project" src="images/gallery/gallery-md3.jpg" class="img-fullwidth">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a href="images/gallery/gallery-lg3.jpg"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Portfolio Item End -->

                <!-- Portfolio Item Start -->
                <div class="gallery-item">
                  <div class="thumb">
                    <img alt="project" src="images/gallery/gallery-md4.jpg" class="img-fullwidth">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a href="images/gallery/gallery-lg4.jpg"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Portfolio Item End -->

                <!-- Portfolio Item Start -->
                <div class="gallery-item">
                  <div class="thumb">
                    <img alt="project" src="images/gallery/gallery-md5.jpg" class="img-fullwidth">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a href="images/gallery/gallery-lg5.jpg"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Portfolio Item End -->

                <!-- Portfolio Item Start -->
                <div class="gallery-item">
                  <div class="thumb">
                    <img alt="project" src="images/gallery/gallery-md6.jpg" class="img-fullwidth">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a href="images/gallery/gallery-lg6.jpg"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Portfolio Item End -->

                <!-- Portfolio Item Start -->
                <div class="gallery-item">
                  <div class="thumb">
                    <img alt="project" src="images/gallery/gallery-md7.jpg" class="img-fullwidth">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a href="images/gallery/gallery-lg7.jpg"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Portfolio Item End -->

                <!-- Portfolio Item Start -->
                <div class="gallery-item">
                  <div class="thumb">
                    <img alt="project" src="images/gallery/gallery-md8.jpg" class="img-fullwidth">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a href="images/gallery/gallery-lg8.jpg"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Portfolio Item End -->

                <!-- Portfolio Item Start -->
                <div class="gallery-item">
                  <div class="thumb">
                    <img alt="project" src="images/gallery/gallery-md9.jpg" class="img-fullwidth">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a href="images/gallery/gallery-lg9.jpg"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Portfolio Item End -->

                <!-- Portfolio Item Start -->
                <div class="gallery-item">
                  <div class="thumb">
                    <img alt="project" src="images/gallery/gallery-md10.jpg" class="img-fullwidth">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a href="images/gallery/gallery-lg10.jpg"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Portfolio Item End -->

                <!-- Portfolio Item Start -->
                <div class="gallery-item">
                  <div class="thumb">
                    <img alt="project" src="images/gallery/gallery-md11.jpg" class="img-fullwidth">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a href="images/gallery/gallery-lg11.jpg"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Portfolio Item End -->

                <!-- Portfolio Item Start -->
                <div class="gallery-item">
                  <div class="thumb">
                    <img alt="project" src="images/gallery/gallery-md12.jpg" class="img-fullwidth">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a href="images/gallery/gallery-lg12.jpg"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Portfolio Item End -->
              </div>
              <!-- End Portfolio Gallery Grid -->
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Donors Say -->
    <section class="divider parallax layer-overlay overlay-dark-8" data-background-ratio="0.5" data-bg-img="images/bg/bg8.jpg">
      <div class="container pt-60 pb-60">
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <h2 class="line-bottom-center text-white text-center mt-0 mb-30">Our <span class="text-theme-colored">Donors</span> say</h2>
            <div class="owl-carousel-1col" data-dots="true">
              <div class="item">
                <div class="testimonial-wrapper text-center">
                  <div class="thumb"><img class="img-circle" alt="" src="images/testimonials/3.jpg"></div>
                  <div class="content pt-10">
                    <p class="font-15 text-white"><em>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque est quasi, quas ipsam, expedita placeat facilis odio illo ex accusantium eaque itaque officiis et sit. Vero quo, impedit neque.</em></p>
                    <i class="fa fa-quote-right font-36 mt-10 text-gray-lightgray"></i>
                    <h4 class="author text-theme-colored mb-0">Catherine Grace</h4>
                    <h6 class="title text-gray mt-0 mb-15">Designer</h6>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimonial-wrapper text-center">
                  <div class="thumb"><img class="img-circle" alt="" src="images/testimonials/3.jpg"></div>
                  <div class="content pt-10">
                    <p class="font-15 text-white"><em>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque est quasi, quas ipsam, expedita placeat facilis odio illo ex accusantium eaque itaque officiis et sit. Vero quo, impedit neque.</em></p>
                    <i class="fa fa-quote-right font-36 mt-10 text-gray-lightgray"></i>
                    <h4 class="author text-theme-colored mb-0">Catherine Grace</h4>
                    <h6 class="title text-gray mt-0 mb-15">Designer</h6>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimonial-wrapper text-center">
                  <div class="thumb"><img class="img-circle" alt="" src="images/testimonials/3.jpg"></div>
                  <div class="content pt-10">
                    <p class="font-15 text-white"><em>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque est quasi, quas ipsam, expedita placeat facilis odio illo ex accusantium eaque itaque officiis et sit. Vero quo, impedit neque.</em></p>
                    <i class="fa fa-quote-right font-36 mt-10 text-gray-lightgray"></i>
                    <h4 class="author text-theme-colored mb-0">Catherine Grace</h4>
                    <h6 class="title text-gray mt-0 mb-15">Designer</h6>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Shop  -->
    <section class="bg-silver-light">
      <div class="container pb-40">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-10 col-md-offset-1">
              <h2 class="text-uppercase line-bottom-center mt-0">Our <span class="text-theme-colored font-weight-600">Shop</span></h2>
              <div class="title-icon">
                <i class="flaticon-charity-hand-holding-a-heart"></i>
              </div>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem autem voluptatem obcaecati! <br>ipsum dolor sit Rem autem voluptatem obcaecati</p>
            </div>
          </div>
        </div>
        <div class="row multi-row-clearfix">
          <div class="col-md-12">
            <div class="products owl-carousel-4col">
              <div class="item">
                <div class="product bg-white">
                  <span class="tag-sale">Sale!</span>
                  <div class="product-thumb">
                    <img alt="" src="images/products/l1.jpg" class="img-responsive img-fullwidth">
                    <div class="overlay">
                      <div class="btn-add-to-cart-wrapper">
                        <a class="btn btn-theme-colored btn-sm btn-flat pl-20 pr-20 btn-add-to-cart text-uppercase font-weight-700" href="shop-cart.html" target="_blank">Add To Cart</a>
                      </div>
                      <div class="btn-product-view-details">
                        <a class="btn btn-default btn-theme-colored btn-sm btn-flat pl-20 pr-20 btn-add-to-cart text-uppercase font-weight-700" href="shop-product-details.html" target="_blank">View detail</a>
                      </div>
                    </div>
                  </div>
                  <div class="product-details text-center">
                    <a href="#"><h5 class="product-title">Product Name</h5></a>
                    <div class="star-rating" title="Rated 4.50 out of 5"><span data-width="67%">4.50</span></div>
                    <div class="price"><del><span class="amount">$110.00</span></del><ins><span class="amount">$90.00</span></ins></div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="product bg-white">
                  <div class="product-thumb">
                    <img alt="" src="images/products/l2.jpg" class="img-responsive img-fullwidth">
                    <div class="overlay">
                      <div class="btn-add-to-cart-wrapper">
                        <a class="btn btn-theme-colored btn-sm btn-flat pl-20 pr-20 btn-add-to-cart text-uppercase font-weight-700" href="shop-cart.html" target="_blank">Add To Cart</a>
                      </div>
                      <div class="btn-product-view-details">
                        <a class="btn btn-default btn-theme-colored btn-sm btn-flat pl-20 pr-20 btn-add-to-cart text-uppercase font-weight-700" href="shop-product-details.html" target="_blank">View detail</a>
                      </div>
                    </div>
                  </div>
                  <div class="product-details text-center">
                    <a href="#"><h5 class="product-title">Product Name</h5></a>
                    <div class="star-rating" title="Rated 5.00 out of 5"><span data-width="100%">5.00</span></div>
                    <div class="price"><ins><span class="amount">$480.00</span></ins></div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="product bg-white">
                  <span class="tag-sale">Sale!</span>
                  <div class="product-thumb">
                    <img alt="" src="images/products/l3.jpg" class="img-responsive img-fullwidth">
                    <div class="overlay">
                      <div class="btn-add-to-cart-wrapper">
                        <a class="btn btn-theme-colored btn-sm btn-flat pl-20 pr-20 btn-add-to-cart text-uppercase font-weight-700" href="shop-cart.html" target="_blank">Add To Cart</a>
                      </div>
                      <div class="btn-product-view-details">
                        <a class="btn btn-default btn-theme-colored btn-sm btn-flat pl-20 pr-20 btn-add-to-cart text-uppercase font-weight-700" href="shop-product-details.html" target="_blank">View detail</a>
                      </div>
                    </div>
                  </div>
                  <div class="product-details text-center">
                    <a href="#"><h5 class="product-title">Product Name</h5></a>
                    <div class="star-rating" title="Rated 4.00 out of 5"><span data-width="60%">4.00</span></div>
                    <div class="price"><del><span class="amount">$70.00</span></del><ins><span class="amount">$55.00</span></ins></div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="product bg-white">
                  <div class="product-thumb">
                    <img alt="" src="images/products/l4.jpg" class="img-responsive img-fullwidth">
                    <div class="overlay">
                      <div class="btn-add-to-cart-wrapper">
                        <a class="btn btn-theme-colored btn-sm btn-flat pl-20 pr-20 btn-add-to-cart text-uppercase font-weight-700" href="shop-cart.html" target="_blank">Add To Cart</a>
                      </div>
                      <div class="btn-product-view-details">
                        <a class="btn btn-default btn-theme-colored btn-sm btn-flat pl-20 pr-20 btn-add-to-cart text-uppercase font-weight-700" href="shop-product-details.html" target="_blank">View detail</a>
                      </div>
                    </div>
                  </div>
                  <div class="product-details text-center">
                    <a href="#"><h5 class="product-title">Product Name</h5></a>
                    <div class="star-rating" title="Rated 3.50 out of 5"><span data-width="75%">3.50</span></div>
                    <div class="price"><ins><span class="amount">$185.00</span></ins></div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="product bg-white">
                  <span class="tag-sale">Sale!</span>
                  <div class="product-thumb">
                    <img alt="" src="images/products/l5.jpg" class="img-responsive img-fullwidth">
                    <div class="overlay">
                      <div class="btn-add-to-cart-wrapper">
                        <a class="btn btn-theme-colored btn-sm btn-flat pl-20 pr-20 btn-add-to-cart text-uppercase font-weight-700" href="shop-cart.html" target="_blank">Add To Cart</a>
                      </div>
                      <div class="btn-product-view-details">
                        <a class="btn btn-default btn-theme-colored btn-sm btn-flat pl-20 pr-20 btn-add-to-cart text-uppercase font-weight-700" href="shop-product-details.html" target="_blank">View detail</a>
                      </div>
                    </div>
                  </div>
                  <div class="product-details text-center">
                    <a href="#"><h5 class="product-title">Product Name</h5></a>
                    <div class="star-rating" title="Rated 4.50 out of 5"><span data-width="40%">4.50</span></div>
                    <div class="price"><del><span class="amount">$220.00</span></del><ins><span class="amount">$210.00</span></ins></div>
                  </div>
                </div>
              </div>
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
              <h2 class="text-uppercase line-bottom-center mt-0">Our <span class="text-theme-colored font-weight-600">Blog</span></h2>
              <div class="title-icon">
                <i class="flaticon-charity-hand-holding-a-heart"></i>
              </div>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem autem voluptatem obcaecati! <br>ipsum dolor sit Rem autem voluptatem obcaecati</p>
            </div>
          </div>
        </div>
        <div class="section-content">
          <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-4">
              <article class="post clearfix mb-sm-30 bg-silver-light">
                <div class="entry-header">
                  <div class="post-thumb thumb">
                    <img src="images/blog/1.jpg" alt="" class="img-responsive img-fullwidth">
                  </div>
                </div>
                 <div class="bg-theme-colored p-5 text-center pt-10 pb-10">
                    <span class="mb-10 text-white mr-10 font-13"><i class="fa fa-share-alt mr-5 text-white"></i>24 Share</span>
                    <span class="mb-10 text-white mr-10 font-13"><i class="fa fa-commenting-o mr-5 text-white"></i> 214 Comments</span>
                    <span class="mb-10 text-white mr-10 font-13"><i class="fa fa-heart-o mr-5 text-white"></i> 895 Likes</span>
                 </div>
                <div class="entry-content p-20 pr-10">
                  <div class="entry-meta media mt-0 no-bg no-border">
                    <div class="entry-date media-left text-center flip bg-theme-colored pt-5 pr-15 pb-5 pl-15">
                      <ul>
                        <li class="font-16 text-white font-weight-600 border-bottom">28</li>
                        <li class="font-12 text-white text-uppercase">Feb</li>
                      </ul>
                    </div>
                    <div class="media-body pl-15">
                      <div class="event-content pull-left flip">
                        <h4 class="entry-title text-white text-uppercase m-0 mt-5"><a href="#">This is a standard post with thumbnail</a></h4>
                      </div>
                    </div>
                  </div>
                  <p class="mt-10">Lorem ipsum dolor sit amet, consectetur adipisi cing elit. Molestias eius illum libero dolor nobis deleniti, sint assumenda. Pariatur iste veritatis excepturi, ipsa optio nobis.</p>
                  <a href="#" class="btn btn-default btn-sm btn-theme-colored mt-10">Read more</a>
                </div>
              </article>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
              <article class="post clearfix mb-sm-30 bg-silver-light">
                <div class="entry-header">
                  <div class="post-thumb thumb">
                    <img src="images/blog/2.jpg" alt="" class="img-responsive img-fullwidth">
                  </div>
                </div>
                 <div class="bg-theme-colored p-5 text-center pt-10 pb-10">
                    <span class="mb-10 text-white mr-10 font-13"><i class="fa fa-share-alt mr-5 text-white"></i>24 Share</span>
                    <span class="mb-10 text-white mr-10 font-13"><i class="fa fa-commenting-o mr-5 text-white"></i> 214 Comments</span>
                    <span class="mb-10 text-white mr-10 font-13"><i class="fa fa-heart-o mr-5 text-white"></i> 895 Likes</span>
                 </div>
                <div class="entry-content p-20 pr-10">
                  <div class="entry-meta media mt-0 no-bg no-border">
                    <div class="entry-date media-left text-center flip bg-theme-colored pt-5 pr-15 pb-5 pl-15">
                      <ul>
                        <li class="font-16 text-white font-weight-600 border-bottom">28</li>
                        <li class="font-12 text-white text-uppercase">Feb</li>
                      </ul>
                    </div>
                    <div class="media-body pl-15">
                      <div class="event-content pull-left flip">
                        <h4 class="entry-title text-white text-uppercase m-0 mt-5"><a href="#">This is a standard post with thumbnail</a></h4>
                      </div>
                    </div>
                  </div>
                  <p class="mt-10">Lorem ipsum dolor sit amet, consectetur adipisi cing elit. Molestias eius illum libero dolor nobis deleniti, sint assumenda. Pariatur iste veritatis excepturi, ipsa optio nobis.</p>
                  <a href="#" class="btn btn-default btn-sm btn-theme-colored mt-10">Read more</a>
                </div>
              </article>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
              <article class="post clearfix mb-sm-30 bg-silver-light">
                <div class="entry-header">
                  <div class="post-thumb thumb">
                    <img src="images/blog/3.jpg" alt="" class="img-responsive img-fullwidth">
                  </div>
                </div>
                 <div class="bg-theme-colored p-5 text-center pt-10 pb-10">
                    <span class="mb-10 text-white mr-10 font-13"><i class="fa fa-share-alt mr-5 text-white"></i>24 Share</span>
                    <span class="mb-10 text-white mr-10 font-13"><i class="fa fa-commenting-o mr-5 text-white"></i> 214 Comments</span>
                    <span class="mb-10 text-white mr-10 font-13"><i class="fa fa-heart-o mr-5 text-white"></i> 895 Likes</span>
                 </div>
                <div class="entry-content p-20 pr-10">
                  <div class="entry-meta media mt-0 no-bg no-border">
                    <div class="entry-date media-left text-center flip bg-theme-colored pt-5 pr-15 pb-5 pl-15">
                      <ul>
                        <li class="font-16 text-white font-weight-600 border-bottom">28</li>
                        <li class="font-12 text-white text-uppercase">Feb</li>
                      </ul>
                    </div>
                    <div class="media-body pl-15">
                      <div class="event-content pull-left flip">
                        <h4 class="entry-title text-white text-uppercase m-0 mt-5"><a href="#">This is a standard post with thumbnail</a></h4>
                      </div>
                    </div>
                  </div>
                  <p class="mt-10">Lorem ipsum dolor sit amet, consectetur adipisi cing elit. Molestias eius illum libero dolor nobis deleniti, sint assumenda. Pariatur iste veritatis excepturi, ipsa optio nobis.</p>
                  <a href="#" class="btn btn-default btn-sm btn-theme-colored mt-10">Read more</a>
                </div>
              </article>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection
