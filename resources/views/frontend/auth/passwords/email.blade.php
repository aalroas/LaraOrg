@extends('frontend.auth.includes.app')

@section('title', GeneralSiteSettings('site_title') . ' | ' . __('labels.frontend.passwords.reset_password_box_title'))

@section('content')


<section class="row flexbox-container">
        <div class="col-xl-7 col-md-9 col-10 d-flex justify-content-center px-0">
            <div class="card bg-authentication rounded-0 mb-0">
                <div class="row m-0">
                    <div class="col-lg-6 d-lg-block d-none text-center align-self-center">
                        <img src="{{asset('backend/app-assets/images/pages/forgot-password.png')}}" alt="{{ GeneralSiteSettings('site_title')}}">
                    </div>
                    <div class="col-lg-6 col-12 p-0">
                        <div class="card rounded-0 mb-0 px-2 py-1">
                            <div class="card-header pb-1">
                                <div class="card-title">
                                    <h4 class="mb-0">@lang('labels.frontend.passwords.reset_password_box_title')</h4>
                                </div>
                            </div>
                            <p class="px-2 mb-0">{{ trans('frontend.please_enter_your_email_address_and_we_will_send_you_instructions_on_how_to_reset_your_password') }}</p>
                            <div class="card-content">
                                <div class="card-body">
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
                                 {{ html()->form('POST', route('frontend.auth.password.email.post'))->open() }}
                                        <div class="form-label-group">
                                       {{ html()->label(__('validation.attributes.frontend.email'))->for('email') }}
                                                {{ html()->email('email')
                                                   ->class('form-control')
                                                  ->placeholder(__('validation.attributes.frontend.email'))
                                                    ->attribute('maxlength', 191)
                                                    ->required()
                                                    ->autofocus() }}
                                        </div>

                                    <div class="float-md-left d-block mb-1">
                                    <a href="{{URL('login')}}" class="btn btn-outline-primary btn-block px-75">{{ trans('frontend.login') }}</a>
                                    </div>
                                    <div class="float-md-right d-block mb-1">
                                        <button type="submit"  class="btn btn-primary btn-block px-75">{{ __('labels.frontend.passwords.send_password_reset_link_button') }}</button>
                                    </div>
                                    {{ html()->form()->close() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>


@endsection
