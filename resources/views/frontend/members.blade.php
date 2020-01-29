@extends('frontend.layouts.app')

@section('title', GeneralSiteSettings('site_title') . ' | ' . __('navs.general.about'))

@section('content')
    <section class="breadcrumb_area breadcrumb2 bgimage biz_overlay">
        <div class="bg_image_holder">
        <img src="{{asset('frontend/img/breadbg.jpg')}}" alt="">
        </div>
        <div class="container content_above">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb_wrapper d-flex flex-column align-items-center">
                        <h4 class="page_title">Our Members List</h4>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb m-bottom-30">
                            <li class="breadcrumb-item"><a href="{{ route('frontend.index')}}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Our Members List</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div><!-- ends: .row -->
        </div>
    </section><!-- ends: .breadcrumb_area -->


    <section class="section-padding2 section-bg">
        <div class="card-style team--card3">
            <div class="container">
                <div class="row">

            @foreach ($members as $member)
                    <div class="col-lg-4 col-sm-6">


                        <div class="card card-shadow card--team1">
                            <div class="card-body text-center">
                            <img src="{{$member->profile_image}}" alt="{{ $member->full_name}}" class="rounded-circle">
                            <h6><a href="{{ route('frontend.member',$member->id)}}">{{ $member->full_name}}</a></h6>
                                <span class="team-designation">{{ $member->company_name}}</span>
                                <ul class="team-social d-flex justify-content-center">
                                <li><a href="{{$member->instagram_url}}"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="{{$member->facebook_url}}"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="{{$member->twitter_url}}"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="{{$member->linkedin_url}}"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>

</div>
@endforeach
 <!-- ends: .col-lg-4 -->
                </div>
            </div>
        </div><!-- ends: .card-style -->
    </section><!-- ends: section -->
@endsection
