@extends('frontend.layouts.app')

@section('title', GeneralSiteSettings('site_title') . ' | ' . $user->full_name )

@section('content')
  <!-- Start main-content -->
  <div class="main-content">
    <!-- Section: inner-header -->
    <section class="inner-header divider layer-overlay overlay-dark" data-bg-img="{{asset('frontend/images/bg/bg4.jpg')}}">
      <div class="container pt-30 pb-30">
        <!-- Section Content -->
        <div class="section-content text-center">
          <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center">
              <h3 class="title text-white">{{ $user->full_name }}</h3>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Volunteer Details -->
    <section class="bg-silver-light">
      <div class="container">
        <div class="section-content">
          <div class="row">

            <div class="col-md-3">
              <div class="thumb">
                <img src="{{asset('storage')}}/{{$user->profile_image}}" alt="{{ $user->full_name }}">
              </div>
            </div>

            <div class="col-md-6">
              <h3 class="name text-theme-colored mt-0 mb-0">{{ $user->full_name }}</h3>
              <h4 class="mt-5">{{ $user->company_name }}</h4>

              <p>{{ $user->position}}</p>

                <h5 class="mt-5">{{ trans('frontend.brief_description') }} :</h5>
                <p style="text-align: justify;">  {!! $user->brief_description !!} </p>


              <ul class="styled-icons icon-dark icon-theme-colored icon-sm mt-15 mb-0">
                <li><a href="{{$user->instagram_url}}"><i class="fa fa-instagram"></i></a></li>
                <li><a href="{{$user->facebook_url}}"><i class="fa fa-facebook"></i></a></li>
                <li><a href="{{$user->twitter_url}}"><i class="fa fa-twitter"></i></a></li>
                <li><a href="{{$user->linkedin_url}}"><i class="fa fa-linkedin"></i></a></li>
             </ul>
            </div>

            <div class="col-md-3">
                <div class="thumb">
                    <img src="{{asset('storage')}}/{{$user->company_logo}}" alt="{{ $user->full_name }}">
                </div>
            </div>

          </div>


            <ul class="nav nav-tabs mt-30">
              <li class="active"><a data-toggle="tab" href="#tab1" aria-expanded="false">{{ trans('frontend.profile') }}</a></li>
              <li class=""><a data-toggle="tab" href="#tab2" aria-expanded="true">{{ trans('frontend.address') }}</a></li>
              <li class=""><a data-toggle="tab" href="#tab3" aria-expanded="false">{{ trans('frontend.contact') }}</a></li>
            </ul>
            <div class="tab-content bg-white">
              <div id="tab1" class="tab-pane fade active in">
                <dl class="dl-horizontal doctor-info">

                    <dt>{{ trans('frontend.registration_year') }} :</dt>
                    <dd>
                     {{ $user->created_at->format('Y')   }}
                    </dd>

                    <hr>
                    <dt>{{ trans('frontend.company_name') }} :</dt>
                    <dd>
                        {{ $user->company_name }}
                    </dd>
                    <hr>

                    <dt>{{ trans('frontend.country') }} :</dt>
                    <dd>
                        {{ $user->country }}
                    </dd>
                    <hr>


                    <dt>{{ trans('frontend.year_founded') }}  :</dt>
                    <dd>
                        {{ $user->year_founded }}
                    </dd>
                    <hr>

                   <dt>{{ trans('frontend.main_product') }}  :</dt>
                  <dd>
                     {{ $user->main_product }}
                  </dd>
                  <hr>



                  <dt>{{ trans('frontend.company_sectors') }} :</dt>
                  <dd>
                    <ul class="list theme-colored angle-double-right m-0">
                        @foreach ($user->sectors as $sector => $value)
                        <li class="mt-0">{{    $user->sectors[$sector]->name }}</li>
                        @endforeach
                    </ul>
                  </dd>

                  <hr>

                  <dt>{{ trans('frontend.company_fields') }} :</dt>
                    <dd>
                        <ul class="list theme-colored angle-double-right m-0">
                            @foreach ($user->fields as $field => $value)
                            <li class="mt-0">{{    $user->fields[$field]->name }}</li>
                            @endforeach
                        </ul>
                    </dd>

                   <hr>

                    <dt>{{ trans('frontend.number_of_employee') }} :</dt>
                    <dd>
                        {{ $user->number_of_employee }}
                    </dd>
                    <hr>




                    <dt>{{ trans('frontend.agency') }} :</dt>
                    <dd>
                        {{ $user->agency }}
                    </dd>
                    <hr>



                    <dt>{{ trans('frontend.partner_companies') }} :</dt>
                    <dd>
                        {{ $user->partner_companies }}
                    </dd>






                </dl>
              </div>
              <div id="tab2" class="tab-pane fade">
                <dl class="dl-horizontal doctor-info">

                    <dt>{{ trans('frontend.main_location') }} :</dt>
                    <dd>
                        {{ $user->main_location   }}
                    </dd>



                    <hr>
                    <dt>{{ trans('frontend.main_address') }} :</dt>
                    <dd>
                        {{ $user->main_address   }}
                    </dd>


                    <hr>
                    <dt>{{ trans('frontend.branches_addresses') }} :</dt>
                    <dd>
                        {{ $user->branches_addresses   }}
                    </dd>


                </dl>

              </div>
              <div id="tab3" class="tab-pane fade">

                <dl class="dl-horizontal doctor-info">

                    <dt>{{ trans('frontend.email') }} :</dt>
                    <dd>
                        {{ $user->email   }}
                    </dd>



                    <hr>
                    <dt>{{ trans('frontend.phone') }} :</dt>
                    <dd>
                        {{ $user->phone   }}
                    </dd>

                    <hr>
                    <dt>{{ trans('frontend.scoical_accounts') }} :</dt>
                    <dd>
                    <ul class="styled-icons icon-dark icon-theme-colored icon-sm mt-15 mb-0">
                        <li><a href="{{$user->instagram_url}}"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="{{$user->facebook_url}}"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="{{$user->twitter_url}}"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="{{$user->linkedin_url}}"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                    </dd>


                </dl>


              </div>
            </div>
        </div>
      </div>
    </section>
  </div>
  <!-- end main-content -->



@endsection
