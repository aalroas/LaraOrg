@extends('frontend.layouts.app')

@section('title', GeneralSiteSettings('site_title') . ' | ' . trans('frontend.executive_management'))

@section('content')
<!-- Start main-content -->
<div class="main-content">

    <!-- Section: inner-header -->
    <section class="inner-header bg-black-222">
        <div class="container pt-10 pb-10">
            <!-- Section Content -->
            <div class="section-content">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center">
                        <h2 class="text-white mt-20">

                    {{ trans('frontend.executive_management') }}

                        </h2>
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
                                    {{ trans('frontend.excutive_text') }}
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


    <section>
        <div class="container mt-30 mb-30 pt-30 pb-30">
            <div class="row ">
                <div class="col-md-9">
                        @foreach ($teams as $team)
                        <div class="col-sm-6 col-md-4 mb-30">
                            <div style="width: 100%;" class="team   effect3 border-1px border-bottom-theme-color-2px sm-text-center">
                                <div class="thumb">
                                   <img   style="max-height: 280px;"  class="img-fullwidth" src="{{asset('uploads/teams')}}/{{$team->image}}"
                                    alt="{{ $team->name}}">
                                </div>
                                <div class="content p-20 text-center">
                                    <h4 class="name mb-0 mt-0">{{ $team->name}}</h4>
                                    <p>{{ $team->position }}</p>
                                    <p class="mb-20"> {!! $team->text !!} </p>
                                    <ul class="styled-icons icon-dark icon-theme-colored icon-sm">
                                        <li><a href="{{$team->instagram}}"><i class="fa fa-instagram"></i></a></li>
                                        <li><a href="{{$team->facebook}}"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="{{$team->twitter}}"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="{{$team->linkedin}}"><i class="fa fa-linkedin"></i></a></li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        @endforeach
                </div>
                <div class="col-sm-12 col-md-3">
                    <div class="sidebar sidebar-right mt-sm-30">
                        <div class="widget">
                            <h5 class="widget-title line-bottom">{{ trans('frontend.about') }}</h5>
                            <ul class="list-divider list-border list check">

                                    <li><a href="{{URL('/about')}}">{{ trans('frontend.about') }}</a></li>
                                    <li><a href="{{URL('/about/teams')}}">{{ trans('frontend.teams') }}</a></li>
                                    <li><a href="{{URL('/about/board-of-directors')}}">{{ trans('frontend.board_of_directors') }}</a></li>
                                    <li><a href="{{URL('/about/executive-management')}}">{{ trans('frontend.executive_management') }}</a></li>
                                    <li><a href="{{URL('/about/organizational-structure')}}">{{ trans('frontend.organizational_structure') }}</a></li>
                                    <li><a href="{{URL('/about/bylaws')}}">{{ trans('frontend.bylaws') }}</a></li>

                            </ul>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- end main-content -->

@endsection
