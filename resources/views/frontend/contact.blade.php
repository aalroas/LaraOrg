@extends('frontend.layouts.app')

@section('title', GeneralSiteSettings('site_title') . ' | ' . trans('frontend.contact_us'))

@section('content')


<!-- Start main-content -->
<div class="main-content">

    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-5">
        <div class="container pt-10 pb-10">
            <!-- Section Content -->
            <div class="section-content pt-10">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="title text-white">{{ trans('frontend.contact_us') }}</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Divider: Contact -->
    <section class="divider">
        <div class="container">
            <div class="row pt-10">
                <div class="col-md-7">
                    <h4 class="mt-0 mb-30 line-bottom">{{ trans('frontend.send_a_message') }}</h4>
                    <!-- Contact Form -->

                        <div class="row">
                            <div class="col-sm-12">
                                {{ html()->form('POST', route('frontend.contact.send'))->open() }}
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            {{ html()->label(__('frontend.name'))->for('name') }}

                                            {{ html()->text('name', optional(auth()->user())->name)
                                                                        ->class('form-control')
                                                                        ->placeholder(__('frontend.name'))
                                                                        ->attribute('maxlength', 191)
                                                                        ->required()
                                                                        ->autofocus() }}
                                        </div>
                                        <!--form-group-->
                                    </div>
                                    <!--col-->
                                </div>
                                <!--row-->

                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            {{ html()->label(__('frontend.email'))->for('email') }}

                                            {{ html()->email('email', optional(auth()->user())->email)
                                                                        ->class('form-control')
                                                                        ->placeholder(__('frontend.email'))
                                                                        ->attribute('maxlength', 191)
                                                                        ->required() }}
                                        </div>
                                        <!--form-group-->
                                    </div>
                                    <!--col-->
                                </div>
                                <!--row-->

                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            {{ html()->label(__('frontend.phone'))->for('phone') }}

                                            {{ html()->text('phone')
                                                                        ->class('form-control')
                                                                        ->placeholder(__('frontend.phone'))
                                                                        ->attribute('maxlength', 191)
                                                                        ->required() }}
                                        </div>
                                        <!--form-group-->
                                    </div>
                                    <!--col-->
                                </div>
                                <!--row-->




                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            {{ html()->label(__('frontend.subject'))->for('subject') }}

                                            {{ html()->text('subject')
                                            ->class('form-control')
                                            ->placeholder(__('frontend.subject'))
                                            ->attribute('maxlength', 191)
                                            ->required() }}
                                        </div>
                                        <!--form-group-->
                                    </div>
                                    <!--col-->
                                </div>
                                <!--row-->


                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            {{ html()->label(__('frontend.your_message'))->for('message') }}

                                            {{ html()->textarea('message')
                                                                        ->class('form-control')
                                                                        ->placeholder(__('frontend.your_message'))
                                                                        ->attribute('rows', 3)
                                                                        ->required() }}
                                        </div>
                                        <!--form-group-->
                                    </div>
                                    <!--col-->
                                </div>
                                <!--row-->

                                @if(config('access.captcha.contact'))
                                <div class="row">
                                    <div class="col">
                                        @captcha
                                        {{ html()->hidden('captcha_status', 'true') }}
                                    </div>
                                    <!--col-->
                                </div>
                                <!--row-->
                                @endif

                                <div class="row">
                                    <div class="col">
                                        <div class="form-group mb-0 clearfix">
                                            {{ form_submit(__('frontend.send')) }}
                                        </div>
                                        <!--form-group-->
                                    </div>
                                    <!--col-->
                                </div>
                                <!--row-->
                                {{ html()->form()->close() }}
                            </div>

                        </div>
                        <h5 class="widget-title mb-10">{{ trans('frontend.connect_with_us') }}</h5>
                        <ul class="styled-icons icon-dark icon-theme-colored icon-circled icon-sm">
                            <li><a href="{{ GeneralSiteSettings('site_facebook_url')}}"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="{{ GeneralSiteSettings('site_twitter_url')}}"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="{{ GeneralSiteSettings('site_whatsapp_url')}}"><i class="fa fa-whatsapp"></i></a></li>
                            <li><a href="{{ GeneralSiteSettings('site_youtube_url')}}"><i class="fa fa-youtube"></i></a></li>
                            <li><a href="{{ GeneralSiteSettings('site_instagram_url')}}"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="{{ GeneralSiteSettings('site_linkedin_url')}}"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                </div>
                <div class="col-md-4 col-md-offset-1">
                    <div class="contact-info text-center pt-40 pb-40 mt-10 bg-light border-bottom border-theme-colored">
                        <i class="fa fa-phone font-36 mb-10 text-theme-colored"></i>
                        <h4> {{ trans('frontend.call_us') }}</h4>
                        <a  href="tel:{{ GeneralSiteSettings('site_phone')}}"><h6 class="text-gray">{{ trans('frontend.phone') }}: <p style="direction:ltr;">{{ GeneralSiteSettings('site_phone')}}</p></h6></a>
                        <a  href="tel:{{ GeneralSiteSettings('site_mobile')}}"><h6 class="text-gray">{{ trans('frontend.mobile') }}: <p style="direction:ltr;">{{ GeneralSiteSettings('site_mobile')}}</p></h6></a>
                        <a  href="tel:{{ GeneralSiteSettings('site_fax')}}"><h6 class="text-gray">{{ trans('frontend.fax') }}: <p style="direction:ltr;">{{ GeneralSiteSettings('site_fax')}}</p></h6></a>
                    </div>
                    <div class="contact-info text-center pt-40 pb-40 mt-10 bg-light border-bottom border-theme-colored">
                        <i class="fa fa-envelope font-36 mb-10 text-theme-colored"></i>
                        <h4>{{ trans('frontend.email') }}</h4>
                    <a href="mailto:{{ GeneralSiteSettings('site_email')}}"><h6 class="text-gray">{{ GeneralSiteSettings('site_email')}}</h6></a>
                    </div>
                    <div class="contact-info text-center pt-40 pb-40 mt-10 bg-light border-bottom border-theme-colored">
                        <i class="fa fa-map-marker font-36 mb-10 text-theme-colored"></i>
                        <h4>{{ trans('frontend.address') }}</h4>
                        <h6 class="text-gray">{{ GeneralSiteSettings('site_address')}}</h6>
                    </div>
                </div>
            </div>
        </div>
    </section>


<iframe
    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d4855.640207185046!2d28.82497093901256!3d40.99675087186761!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x74affbfcc3b71087!2sNish%20%C4%B0stanbul!5e0!3m2!1sen!2str!4v1583454788741!5m2!1sen!2str"
    width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    </section>
</div>
<!-- end main-content -->


@endsection
