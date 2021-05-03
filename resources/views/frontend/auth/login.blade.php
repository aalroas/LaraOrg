@extends('frontend.auth.includes.app')



@section('title', GeneralSiteSettings('site_title') . ' | ' . __('labels.frontend.auth.login_box_title'))


@section('page-css-rtl')
<!-- BEGIN: Page CSS-->
<link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/css-rtl/core/menu/menu-types/vertical-menu.css') }}">
<link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/css-rtl/core/colors/palette-gradient.css') }}">
<link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/css-rtl/pages/authentication.css') }}">
    <!-- END: Page CSS-->

@endsection

@section('page-css-ltr')
<!-- BEGIN: Page CSS-->
<link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/css/core/menu/menu-types/vertical-menu.css') }}">
<link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/css/core/colors/palette-gradient.css') }}">
<link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/css/pages/authentication.css') }}">
<!-- END: Page CSS-->
@endsection





@section('content')


<!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">

                <section class="row flexbox-container">
                    <div class="col-xl-8 col-11 d-flex justify-content-center">
                        <div class="card bg-authentication rounded-0 mb-0">
                            <div class="row m-0">
                                <div class="col-lg-6 d-lg-block d-none text-center align-self-center px-1 py-0">
                                    <img src="{{asset('backend/app-assets/images/pages/login.png')}}" alt="branding logo">
                                </div>
                                <div class="col-lg-6 col-12 p-0">
                                    <div class="card rounded-0 mb-0 px-2">
                                        <div class="card-header pb-1">
                                            <div class="card-title">
                                                <h4 class="mb-0">@lang('labels.frontend.auth.login_box_title')</h4>
                                                @include('includes.partials.messages')
                                            </div>
                                        </div>
                                        <div class="card-content">
                                            <div class="card-body pt-1">
                                           {{ html()->form('POST', route('frontend.auth.login.post'))->open() }}
                                                    <fieldset
                                                        class="form-label-group form-group position-relative has-icon-left">
                                                  {{ html()->email('email')
                                                                                            ->class('form-control')
                                                                                            ->placeholder(__('validation.attributes.frontend.email'))
                                                                                            ->attribute('maxlength', 191)
                                                                                            ->required() }}
                                                        <div class="form-control-position">
                                                            <i class="feather icon-user"></i>
                                                        </div>
                                                {{ html()->label(__('validation.attributes.frontend.email'))->for('email') }}
                                                    </fieldset>

                                                    <fieldset class="form-label-group position-relative has-icon-left">
                                                    {{ html()->password('password')
                                                                                                ->class('form-control')
                                                                                                ->placeholder(__('validation.attributes.frontend.password'))
                                                                                                ->required() }}
                                                        <div class="form-control-position">
                                                            <i class="feather icon-lock"></i>
                                                        </div>
                                               {{ html()->label(__('validation.attributes.frontend.password'))->for('password') }}
                                                    </fieldset>
                                                    <div
                                                        class="form-group d-flex justify-content-between align-items-center">
                                                        <div class="text-left">
                                                            <fieldset class="checkbox">

                                                               <div class="checkbox">
                                                                    {{ html()->label(html()->checkbox('remember', true, 1) . ' ' . __('labels.frontend.auth.remember_me'))->for('remember') }}


                                                            </div>
                                                            </fieldset>
                                                        </div>
                                                        <div class="text-right">
                                                            <a href="{{ route('frontend.auth.password.reset') }}">@lang('labels.frontend.passwords.forgot_password')</a>
                                                        </div>
                                                    </div>

                                                <a href="{{route('frontend.auth.register')}}" class="btn btn-outline-primary float-left btn-inline waves-effect waves-light">{{__('frontend.register')}}</a>
                                                <button type="submit" class="btn btn-primary float-right btn-inline waves-effect waves-light">{{ __('labels.frontend.auth.login_button') }}</button>

                                                <div>
                                                    <br>
                                                    <br>
                                                    <br>
                                                    <br>
                                                </div>

@if(config('access.captcha.login'))
    <div class="row">
        <div class="col">
            @captcha
            {{ html()->hidden('captcha_status', 'true') }}
        </div>
        <!--col-->
    </div>
    <!--row-->
    @endif
                                            {{ html()->form()->close() }}
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
        </div>
    </div>
    <!-- END: Content-->


@endsection

@push('after-scripts')
    @if(config('access.captcha.login'))
        @captchaScripts
    @endif
@endpush
