@extends('frontend.layouts.app')

@section('title', GeneralSiteSettings('site_title') . ' | ' . __('navs.general.events'))

@section('content')

<!-- Start main-content -->
<div class="main-content">

    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="{{asset('uploads/events/')}}/{{$event->image}}">
        <div class="container pt-100 pb-50">
            <!-- Section Content -->
            <div class="section-content pt-100">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="title text-white">Events</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="text-theme-colored">{{$event->name}}</h2>

                            <img src="{{asset('uploads/events/')}}/{{$event->image}}" alt="{{$event->name}}">

                </div>
                <div class="col-md-6 mt-60">
                    <ul>
                        <li>
                            <h4>Topics:</h4>
                            <p>{{$event->name}}</p>
                        </li>
                        <li>
                            <h4>Host:</h4>
                            <p>Kodesolution Lmd.</p>
                        </li>
                        <li>
                            <h4>Location:</h4>
                            <p>{{$event->location}}</p>
                        </li>
                        <li>
                            <h4>Start Date:</h4>
                            <p>{{ date('d/m/Y - H:i',strtotime($event->start_date)) }}</p>
                        </li>
                        <li>
                            <h4>End Date:</h4>
                            <p>{{ date('d/m/Y - H:i',strtotime($event->end_date)) }}</p>
                        </li>
                        <li>
                            <h5>Share:</h5>
                            <div class="styled-icons icon-dark icon-theme-colored icon-sm icon-circled">


                                <a href="mailto:?Subject={{ $event->name }}&amp;Body={{url()->current()}}">

                                        <i class="fa fa-envelope "></i> </a>

                                    <a href="http://www.facebook.com/sharer.php?u={{url()->current()}}" target="_blank">

                                        <i class="fa fa-facebook "></i> </a>

                                    <a href="https://plus.google.com/share?url={{url()->current()}}" target="_blank">

                                        <i class="fa fa-google-plus "></i> </a>




                                    <a href="https://twitter.com/share?url={{url()->current()}}&amp;text={{ $event->name }}&amp;hashtags=int-sucsess.com"
                                        target="_blank">

                                        <i class="fa fa-twitter "></i> </a>



                                    <a href="whatsapp://send?text={{url()->current()}}" data-action="share/whatsapp/share">


                                        <i class="fa fa-whatsapp "></i>


                                    </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row mt-60">
                <div class="col-md-6">
                    <h3 class="mt-0 text-theme-colored">Event Description</h3>
                    <p>{{$event->text}}</p>
                </div>

            </div>


        </div>
    </section>

    <!-- Divider: Call To Action -->
    <section class="bg-theme-colored">
        <div class="container pt-0 pb-0">
            <div class="row">
                <div class="col-md-12">
                    <div class="call-to-action pt-30 pb-30">
                        <div class="col-md-9">
                            <h3 class="text-white">Lets Change the world we all together, join us now as a IBDA
                            </h3>
                        </div>
                        <div class="col-md-3 text-right sm-text-center">
                            <a class="btn btn-transparent btn-border btn-circled btn-lg mt-15" href="#">Become a
                                IBDA</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- end main-content -->

@endsection
