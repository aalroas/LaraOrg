@extends('frontend.layouts.app')

@section('title', GeneralSiteSettings('site_title') . ' | ' . __('frontend.activities'))

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


                {{$activitytype->name }}



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
                <div class="event-content  flip">
                    <h5 style="text-align: justify;">


                  {!! $activitytype->text !!}


                    </h5>
                </div>
            </div>
        </div>
    </div>
</article>
<ul style="background-color: #f26a24;" class="nav nav-tabs mt-30">
    <li style="width: 100%;" class="active">
        <a data-toggle="tab" href="#tab1" aria-expanded="true">
            <h5>{{ trans('frontend.activities') }}</h5>
        </a>
    </li>
</ul>

<div class="tab-content bg-white">
    <div id="tab1" class="tab-pane fade-in active">
@foreach ($activities as $activity)


<article class="post clearfix mb-30 bg-lighter">
    <div class="col-md-4 entry-header">
        <div class="post-thumb thumb">
            <img src="{{asset('uploads/activities/')}}/{{$activity->f_image}}" alt="{{$activity->title}}"
                class="img-responsive img-fullwidth">
        </div>
    </div>
    <div class="col-md-8 entry-content p-20 pr-10">
        <div class="entry-meta media mt-0 no-bg no-border">
            <div class="entry-date media-left text-center flip bg-theme-colored pt-5 pr-15 pb-5 pl-15">
                <ul>
                    <li class="font-16 text-white font-weight-600">
                        {{ date('d',strtotime($activity->date)) }}</li>
                    <li class="font-12 text-white text-uppercase">
                        {{ date('M',strtotime($activity->date)) }}</li>

                </ul>
            </div>
            <div class="media-body pl-15">
                <div class="event-content pull-left flip">
                    <h4 class="entry-title text-white text-uppercase m-0 mt-5"><a
                            href="{{route('frontend.activity',$activity->slug)}}">{{$activity->title}}</a>
                    </h4>
                    <span class="mb-10 text-gray-darkgray mr-10 font-13">{{ trans('frontend.unit_type') }} :
                        @foreach ($activity->unit_types as $unit)
                        {{ $unit->name }}
                        @endforeach
                    </span>
                    <span class="mb-10 text-gray-darkgray mr-10 font-13">{{ trans('frontend.activity_type') }} :
                        @foreach ($activity->activity_types as $type)
                        {{ $type->name  }}
                        @endforeach
                    </span>

                </div>
            </div>
        </div>
        <p style="text-align: justify;" class="mt-10">{!! Str::words($activity->text,30,'...')!!}</p>
        <a href="{{route('frontend.activity',$activity->slug)}}"
            class="btn-read-more">{{ trans('frontend.read_more') }}</a>
        <div class="clearfix"></div>
    </div>
</article>
@endforeach
    </div>
</div>

                            </div>
                        </div>
                        <div class="col-md-12">
                         <nav>
                            <ul class="pagination theme-colored">
                                {{ $activities->links() }}
                            </ul>
                        </nav>
                        </div>
                    </div>
                </div>


                <div class="col-sm-12 col-md-3">
                    <div class="sidebar sidebar-right mt-sm-30">
                        <div class="widget">
                            <h5 class="widget-title line-bottom">{{ trans('frontend.units') }}</h5>
                            <ul class="list-divider list-border list check">
                                @foreach ($headerunit_types as $unit)
                                <li><a href="{{ route('frontend.unittype',$unit->slug) }}">{{ $unit->name}}</a></li>
                                @endforeach
                            </ul>
                        </div>

                        <div class="widget">
                            <h5 class="widget-title line-bottom">{{ trans('frontend.activities') }}</h5>
                            <ul class="list-divider list-border list check">
                                @foreach ($headeractivity_types as $activity_type)
                                <li><a
                                        href="{{ route('frontend.activitytype',$activity_type->slug) }}">{{ $activity_type->name}}</a>
                                </li>
                                @endforeach
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
