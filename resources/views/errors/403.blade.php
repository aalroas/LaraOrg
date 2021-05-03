@extends('frontend.auth.includes.app')
@section('content')


<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <!-- maintenance -->
            <section class="row flexbox-container">
                <div class="col-xl-7 col-md-8 col-12 d-flex justify-content-center">
                    <div class="card auth-card bg-transparent shadow-none rounded-0 mb-0 w-100">
                        <div class="card-content">
                            <div class="card-body text-center">
                                <img src="{{asset('backend/app-assets/images/pages/not-authorized.png')}}"
                                    class="img-fluid align-self-center" alt="branding logo">
                                <h1 class="font-large-2 my-2">You are not authorized!</h1>
                                <p class="p-2">
                                
                                </p>
                                <a class="btn btn-primary btn-lg mt-2" href="{{route('frontend.index')}}">Back to Home</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- maintenance end -->

        </div>
    </div>
</div>
<!-- END: Content-->

    @endsection
