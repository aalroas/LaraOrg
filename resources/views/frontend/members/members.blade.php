@extends('frontend.layouts.app')

@section('title', GeneralSiteSettings('site_title') . ' | ' . __('frontend.members'))

@section('content')
<!-- Start main-content -->
<div class="main-content">

<section class="inner-header divider layer-overlay overlay-dark bg-silver-light">
        <div class="container pt-20 pb-30">
            <!-- Section Content -->
            <div class="section-content text-center">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 text-center">
                        <h2 class="text-theme-colored font-36">{{ trans('frontend.members') }}</h2>



                                <div class="col-md-12">
                                    <div class="row">
                                <form action="{{route('frontend.members')}}" method="get">
                                        <!-- category dropdown -->
                                        <div class="col-sm-3 col-md-4">
                                            <select class="form-control" name="sector">
                                           <option selected disabled>{{ trans('frontend.sort_by:_sector') }}</option>
                                                @foreach ($sectors as $sector)
                                                <option value="{{$sector->id}}">{{ $sector->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <!--  sort by dropdown -->
                                        <div class="col-sm-3 col-md-4">
                                            <select class="form-control"  name="field">
                                                <option  selected disabled>{{ trans('frontend.sort_by:_field') }}</option>
                                               @foreach ($fields as $field)
                                                <option value="{{$field->id}}">{{ $field->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <!-- whishlist button -->


                                  <div class="col-sm-1 col-md-4">
                                    <input type="submit" value="{{ trans('frontend.search')}}" class="btn btn-block btn-secondary">
                                </div>

                                </form>
                                    </div>
                                </div>




                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="inner-header divider">
        <div class="col-md-2 col-sm-6">

        </div>
        <div class="col-md-8 col-sm-6">
            <article class="post  mb-30">
                <div class="entry-header">
                </div>
                <div class="entry-content p-20 pr-10">
                    <div class="entry-meta media mt-0 no-bg no-border">
                        <div class="media-body pl-15">
                            <div class="event-content   flip">
                                <h5 style="text-align: center;">
                                    {{ trans('frontend.member_text') }}
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
        </div>
        <div class="col-md-2 col-sm-6">

        </div>
    </section>



    <!-- Section: Volunteer -->
    <section>
        <div class="container pt-70 pb-40">
            <div class="section-content">
                <div class="row">

                   @foreach ($members as $member)

                    <div class="col-sm-6 col-md-3 mb-30">
                        <div style="width: 100%;" class="team box-hover-effect effect3 border-1px border-bottom-theme-color-2px sm-text-center  ">
                            <div class="thumb">
                            <a class="text-theme-colored" href="{{ route('frontend.member',$member->id)}}"> <img style="max-height: 280px;" class="img-fullwidth" src="{{asset('storage')}}/{{$member->profile_image}}" alt="{{ $member->full_name}}"></a></div>
                            <div class="content p-20 text-center">
                                <h4 class="name mb-0 mt-0"><a class="text-theme-colored" href="{{ route('frontend.member',$member->id)}}">{{ $member->full_name}}</a></h4>
 
                                   <p>{{ $member->company_name}}</p>
                                
                                <p>{{ $member->position}}</p>
                                <p class="mb-20"></p>
                                <ul class="styled-icons icon-dark icon-theme-colored icon-sm">
                                        <li><a href="{{$member->instagram_url}}"><i class="fa fa-instagram"></i></a></li>
                                        <li><a href="{{$member->facebook_url}}"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="{{$member->twitter_url}}"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="{{$member->linkedin_url}}"><i class="fa fa-linkedin"></i></a></li>

                                </ul>
                            </div>
                        </div>
                    </div>

                    @endforeach





                </div>

            </div>
            <nav>
                <ul class="pagination theme-colored">
                    {{ $members->links() }}
                </ul>
            </nav>
        </div>

    </section>



</div>
<!-- end main-content -->

@endsection
