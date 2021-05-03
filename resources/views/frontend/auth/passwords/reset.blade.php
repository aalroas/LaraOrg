@extends('frontend.auth.includes.app')

@section('title', GeneralSiteSettings('site_title') . ' | ' . __('labels.frontend.passwords.reset_password_box_title'))

@section('content')
<section class="row flexbox-container">
    <div class="col-xl-7 col-10 d-flex justify-content-center">
        <div class="card bg-authentication rounded-0 mb-0 w-100">
            <div class="row m-0">
                <div class="col-lg-6 d-lg-block d-none text-center align-self-center p-0">
                    <img src="{{asset('backend/app-assets/images/pages/reset-password.png')}}" alt="{{ GeneralSiteSettings('site_title')}}">
                </div>
                <div class="col-lg-6 col-12 p-0">
                    <div class="card rounded-0 mb-0 px-2">

                        <div class="card-header pb-1">
                            <div class="card-title">
                                <h4 class="mb-0">@lang('labels.frontend.passwords.reset_password_box_title')</h4>
                            </div>
                        </div>
                         @if($errors->any())
                        @foreach($errors->getMessages() as $this_error)
                        <div class="alert alert-danger">
                           {{$this_error[0]}}
                        </div>
                        @endforeach
                        @endif
                        @if(session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                        @endif
                        <p class="px-2">{{ trans('frontend.please_enter_your_new_password') }}</p>
                        <div class="card-content">
                            <div class="card-body pt-1">
                         {{ html()->form('POST', route('frontend.auth.password.reset'))->class('form-horizontal')->open() }}
                            {{ html()->hidden('token', $token) }}
                                    <fieldset class="form-label-group">
                                                {{ html()->email('email')
                                                    ->class('form-control')
                                                    ->placeholder(__('validation.attributes.frontend.email'))
                                                    ->attribute('maxlength', 191)
                                                     ->value($email)
                                                    ->required() }}
                                                    {{ html()->label(__('validation.attributes.frontend.email'))->for('email') }}
                                    </fieldset>

                                    <fieldset class="form-label-group">
                             {{ html()->password('password')
                                      ->class('form-control')
                                      ->placeholder(__('validation.attributes.frontend.password'))
                                      ->required() }}
                                      {{ html()->label(__('validation.attributes.frontend.password'))->for('password') }}
                                    </fieldset>
                                    <fieldset class="form-label-group">
                                                {{ html()->password('password_confirmation')
                                                ->class('form-control')
                                                ->placeholder(__('validation.attributes.frontend.password_confirmation'))}}
                                                {{ html()->label(__('validation.attributes.frontend.password_confirmation'))->for('password_confirmation') }}
                                             </fieldset>
                                    <div class="row pt-2">
                                        <div class="col-12 col-md-6 mb-1">
                                        <a href="{{URL('login')}}" class="btn btn-outline-primary btn-block px-0">
                                                {{ trans('frontend.go_back_to_login') }}</a>
                                        </div>
                                        <div class="col-12 col-md-6 mb-1">
                                            <button type="submit" class="btn btn-primary btn-block px-0">{{ trans('frontend.reset') }}</button>
                                        </div>
                                    </div>
                          {{ html()->form()->close() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    <!-- END: Content-->
@endsection
