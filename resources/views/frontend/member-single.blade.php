@extends('frontend.layouts.app')

@section('title', GeneralSiteSettings('site_title') . ' | ' . __('navs.general.member_single'))

@section('content')
<section class="team-profile p-top-120 p-bottom-80">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 margin-md-10">
                <img src="{{asset($user->profile_image)}}" alt="{{ $user->full_name }}" class="rounded">
                <img src="{{asset($user->company_logo)}}" alt="{{ $user->full_name }}" class="rounded">
            </div><!-- ends: .col-lg-4 -->

            <div class="col-lg-10">
                <div class="team-details m-left-50">
                    <div class="m-bottom-30">
                        <h4 class="color-primary">{{ $user->full_name }}</h4>
                        <span>{{ $user->company_name }}</span>
                        <span>{{ $user->country }}</span>
                        <span class="m-top-15 d-flex">
                            <strong class="color-dark">{{ trans('frontend.company_sectors') }}:</strong>
                            <span class="color-secondary m-left-10">
                                @foreach ($user->sectors as $sector => $value)
                                {{    $user->sectors[$sector]->name . "," }}
                                @endforeach
                            </span>
                        </span>

                        <span class="m-top-15 d-flex">
                            <strong class="color-dark">{{ trans('frontend.company_fields') }}:</strong>
                            <span class="color-secondary m-left-10">
                                @foreach ($user->fields as $field => $value)
                                {{    $user->fields[$field]->name . "," }}
                                @endforeach
                            </span>
                        </span>

                        <div class="m-top-25">
                            <div class="social-basic ">
                                <ul class="d-flex justify-content-start ">
                                    <li><a href="{{$user->instagram_url}}"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="{{$user->facebook_url}}"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="{{$user->twitter_url}}"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="{{$user->linkedin_url}}"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <section class="team-timeline m-bottom-120">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-10">

                                    <div class="timeline2 m-top-10">

                                        <div class="happening2">

                                            <h6 class="happening2__title">{{ trans('translation.brief_description') }}:
                                            </h6>
                                            <p>
                                                {!! $user->brief_description !!}
                                            </p>
                                        </div><!-- ends: .happening2 -->
                                        <div class="happening2">

                                            <h6 class="happening2__title">{{ trans('translation.registration_year') }}:
                                            </h6>
                                            <p>
                                                {{ $user->created_at->format('Y')   }}
                                            </p>
                                        </div><!-- ends: .happening2 -->

                                        <div class="happening2">

                                            <h6 class="happening2__title">{{ trans('translation.main_product') }}:</h6>
                                            <p>
                                                {{ $user->main_product   }}
                                            </p>
                                        </div><!-- ends: .happening2 -->
                                        <div class="happening2">

                                            <h6 class="happening2__title">{{ trans('translation.main_address') }}:</h6>
                                            <p>
                                                {{ $user->main_address   }}
                                            </p>
                                        </div><!-- ends: .happening2 -->



                                    </div>
                                </div>

                            </div>
                        </div>
                    </section><!-- ends: team-timeline -->
                </div>
            </div>
            <!-- ends: .col-lg-8 -->


        </div>
    </div>
</section><!-- ends: section -->

@endsection
