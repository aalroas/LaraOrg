@extends('frontend.layouts.app')

@section('title', GeneralSiteSettings('site_title') . ' | ' . $o_s->o_title)

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

                            {{ $o_s->o_title }}

                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="container mt-30 mb-30 pt-30 pb-30">
            <div class="row ">
                <div class="col-md-9">
                    <div class="blog-posts">
                        <div class="col-md-12">
                            <div class="row list-dashed">

                                <article class="post  mb-30">
                                    <div class="entry-header">
                                    </div>
                                    <div class="entry-content p-20 pr-10">
                                        <div class="entry-meta media mt-0 no-bg no-border">
                                            <div class="media-body pl-15">
                                                <div class="event-content pull-left flip">
                                                    <h5 style="text-align: justify;">
                                                       {!! $o_s->o_text !!}
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>


                                <article class="post  mb-30">
                                    <div class="entry-header">
                                    </div>
                                    <div class="entry-content p-20 pr-10">
                                        <div class="entry-meta media mt-0 no-bg no-border">
                                            <div class="media-body pl-15">
                                                <div class="event-content pull-left flip">
                                                <img src="{{asset('uploads/static')}}/{{$o_s->o_image}}" alt="{{ $o_s->o_title }}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>



                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-sm-12 col-md-3">
                    <div class="sidebar sidebar-right mt-sm-30">
                        <div class="widget">
                            <h5 class="widget-title line-bottom">{{ trans('frontend.about') }}</h5>
                            <ul class="list-divider list-border list check">

                                    <li><a href="{{URL('/about')}}">{{ trans('frontend.about') }}</a></li>
                                    <li><a href="{{URL('/about/members')}}">{{ trans('frontend.members') }}</a></li>
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
