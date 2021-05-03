@extends('frontend.layouts.app')

@section('title', GeneralSiteSettings('site_title') . ' | ' . $terms_of_use->t_title)

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

                            {{ $terms_of_use->t_title }}

                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="container mt-30 mb-30 pt-30 pb-30">
            <div class="row ">
                <div class="col-md-12">
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
                                                       {!! $terms_of_use->t_text !!}
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
</div>
<!-- end main-content -->

@endsection
