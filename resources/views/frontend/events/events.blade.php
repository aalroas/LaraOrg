@extends('frontend.layouts.app')

@section('title', GeneralSiteSettings('site_title') . ' | ' . __('frontend.events'))

@section('content')
<!-- Start main-content -->
<div class="main-content">

    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-5">
        <div class="container pt-10 pb-10">
            <!-- Section Content -->
            <div class="section-content pt-10">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="title text-white">{{ trans('frontend.events') }}</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>




<!-- Section: event calendar -->
<section>
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<ul class="news_tab">
					@foreach($events as $event)
					<div class="upcoming-events bg-white-f3 mb-20">
						<div class="row">
							<div class="col-sm-3 pr-0 pr-sm-15">
								<div class="thumb p-15">
									<img class="img-fullwidth" src="{{  asset('uploads/events/')}}/{{ $event->image }}" alt="{{ $event->name }}">
								</div>
							</div>
							<div class="col-sm-3 pl-0 pl-sm-15">
								<div class="event-details p-15 mt-20">



									<h4 class="mt-0 text-uppercase font-weight-500">{{ $event->name }}</h4>

									<a href="{{ route('frontend.event',$event->slug) }}" class="btn btn-flat btn-dark btn-theme-colored btn-sm mt-10">{{ trans('frontend.read_more') }} <i
											class="fa fa-angle-double-right"></i></a>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="event-count p-15 mt-15">
									<ul class="event-date list-inline font-16 text-uppercase mt-10 mb-20">
										<li class="p-15 mr-5 bg-lightest">{{ date('M',strtotime($event->start_date)) }}</li>
										<li class="p-15 pl-20 pr-20 mr-5 bg-lightest"> {{ date('d',strtotime($event->start_date)) }}</li>
										<li class="p-15 bg-lightest">{{ date('Y',strtotime($event->start_date)) }}</li>
									</ul>
									<ul>
										<li class="mb-10"><a href="#"><i class="fa fa-clock-o mr-5"></i> at {{ date('d/M/Y - H:i',strtotime($event->start_date)) }} - {{ date('d/M/Y - H:i',strtotime($event->end_date)) }}</a></li>
										<li><a href="#"><i class="fa fa-map-marker mr-5"></i>{{ trans('frontend.location')." : ".$event->location }}</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					@endforeach

			</div>
        </div>
        <nav>
            <ul class="pagination theme-colored">
                {{ $events->links() }}
            </ul>
        </nav>
	</div>
</section>




@endsection
