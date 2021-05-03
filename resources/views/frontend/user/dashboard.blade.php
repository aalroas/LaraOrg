

@extends('frontend.user.layouts.app')

@section('title', GeneralSiteSettings('site_title') . ' | ' . __('navs.frontend.dashboard') )
@section('content')
<!-- Dashboard Analytics Start -->
        <section id="dashboard-analytics">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card bg-analytics text-white">
                        <div class="card-content">
                            <div class="card-body text-center">
                                <img src="{{ asset('backend/app-assets/images/elements/decore-left.png')}}" class="img-left" alt="{{ $logged_in_user->full_name }}">
                                <img src="{{ asset('backend/app-assets/images/elements/decore-right.png')}}" class="img-right" alt="{{ $logged_in_user->full_name }}">
                                <div class="avatar avatar-xl bg-primary shadow mt-0">
                                    <div class="avatar-content">
                                        <img src="{{asset('storage')}}/{{ $logged_in_user->profile_image }}" alt="{{ $logged_in_user->full_name }}">
                                    </div>
                                </div>
                                <div class="text-center">
                                    <h1 class="mb-2 text-white">@lang('strings.backend.dashboard.welcome') {{ $logged_in_user->full_name }}!</h1>
                                <p class="m-auto w-75">  {{ GeneralSiteSettings('site_title')}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Dashboard Analytics end -->
@endsection

