@extends('backend.layouts.app')

@section('title', GeneralSiteSettings('site_title') . ' | ' . __('strings.backend.dashboard.title'))

@section('content')
 <section id="dashboard-analytics">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card bg-analytics text-white">
                <div class="card-content">
                    <div class="card-body text-center">
                        <img src="{{ asset('backend/app-assets/images/elements/decore-left.png')}}" class="img-left"
                            alt="{{asset('storage')}}/{{ $logged_in_user->full_name }}">
                        <img src="{{ asset('backend/app-assets/images/elements/decore-right.png')}}" class="img-right"
                            alt="{{ $logged_in_user->full_name }}">
                        <div class="avatar avatar-xl bg-primary shadow mt-0">
                            <div class="avatar-content">
                                <img src="{{ $logged_in_user->picture }}" alt="{{ $logged_in_user->full_name }}">
                            </div>
                        </div>
                        <div class="text-center">
                            <h1 class="mb-2 text-white">@lang('strings.backend.dashboard.welcome')
                                {{ $logged_in_user->full_name }}!</h1>
                            <p class="m-auto w-75"> 
                                {{ GeneralSiteSettings('site_title')}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="statistics-card">

    <div class="row">
        <div class="col-lg-3 col-sm-6 col-12">
            <div class="card">
                <div class="card-header d-flex align-items-start pb-0">
                    <div>
                   <a href="{{ route('admin.auth.user.index') }}">
                        <h2 class="text-bold-700 mb-0">{{$users}}</h2>
                        <p>{{ trans('frontend.members') }}</p>
                   </a>
                    </div>
                    <div class="avatar bg-rgba-primary p-50 m-0">
                          <div class="avatar-content">
                          <a href="{{ route('admin.auth.user.index') }}">  <i class="feather icon-users text-primary font-medium-5"></i></a>
                          </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-12">
            <div class="card">
                <div class="card-header d-flex align-items-start pb-0">
                    <div>
                        <a href="{{ route('admin.auth.user.deactivated') }}"><h2 class="text-bold-700 mb-0">{{ $pending_approval }}</h2>
                        <p>@lang('backend.pending_approval')</p></a>
                    </div>
                    <div class="avatar bg-rgba-warning p-50 m-0">
                        <div class="avatar-content">
                            <a href="{{ route('admin.auth.user.deactivated') }}"><i class="feather icon-user-x text-warning font-medium-5"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-12">
            <div class="card">
                <div class="card-header d-flex align-items-start pb-0">
                    <div>
                        <a href="{{ route('admin.auth.user.deleted') }}"><h2 class="text-bold-700 mb-0">{{ $deleted_users }}</h2>
                        <p>@lang('menus.backend.access.users.deleted')</p></a>
                    </div>
                    <div class="avatar bg-rgba-danger p-50 m-0">
                        <div class="avatar-content">
                           <a href="{{ route('admin.auth.user.deleted') }}"> <i class="feather icon-user-x text-danger font-medium-5"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-12">
            <div class="card">
                <div class="card-header d-flex align-items-start pb-0">
                    <div>
                        <a href="{{URL('about/board-of-directors')}}"><h2 class="text-bold-700 mb-0">{{ $boards}}</h2>
                        <p>{{ trans('frontend.board_of_directors') }}</p></a>
                    </div>
                    <div class="avatar bg-rgba-success p-50 m-0">
                        <div class="avatar-content">
                            <a href="{{URL('about/board-of-directors')}}"><i class="feather icon-user text-success font-medium-5"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
    <div class="col-xl-2 col-md-4 col-sm-6">
        <div class="card text-center">
            <div class="card-content">
                <div class="card-body">
                    <div class="avatar bg-rgba-primary p-50 m-0 mb-1">
                        <div class="avatar-content">
                            <a href="{{ route('admin.post.index') }}"><i class="feather icon-edit font-medium-5 text-primary font-medium-5"></i></a>
                        </div>
                    </div>
                    <a href="{{ route('admin.post.index') }}"><h2 class="text-bold-700">{{ $posts}}</h2>
                    <p class="mb-0 line-ellipsis">{{ trans('backend.posts') }}</p></a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-2 col-md-4 col-sm-6">
        <div class="card text-center">
            <div class="card-content">
                <div class="card-body">
                    <div class="avatar bg-rgba-warning p-50 m-0 mb-1">
                        <div class="avatar-content">
                          <a href="{{ route('admin.activity.index') }}">  <i class="feather icon-activity text-warning font-medium-5"></i></a>
                        </div>
                    </div>
                    <a href="{{ route('admin.activity.index') }}"><h2 class="text-bold-700">{{ $activities}}</h2>
                    <p class="mb-0 line-ellipsis">{{ trans('frontend.activities') }}</p></a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-2 col-md-4 col-sm-6">
        <div class="card text-center">
            <div class="card-content">
                <div class="card-body">
                    <div class="avatar bg-rgba-info p-50 m-0 mb-1">
                        <div class="avatar-content">
                            <a href="{{ route('admin.slider.index') }}"><i class="feather icon-monitor text-info font-medium-5"></i></a>
                        </div>
                    </div>
                    <a href="{{ route('admin.slider.index') }}"><h2 class="text-bold-700">{{ $sliders }}</h2>
                    <p class="mb-0 line-ellipsis">{{ trans('backend.sliders') }}</p></a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-2 col-md-4 col-sm-6">
        <div class="card text-center">
            <div class="card-content">
                <div class="card-body">
                    <div class="avatar bg-rgba-danger p-50 m-0 mb-1">
                        <div class="avatar-content">
                            <a href="{{ route('admin.gallery.index') }}"><i class="feather icon-image text-danger font-medium-5"></i></a>
                        </div>
                    </div>
                <a href="{{ route('admin.gallery.index') }}"><h2 class="text-bold-700">{{ $galleries }}</h2>
                    <p class="mb-0 line-ellipsis">{{ trans('backend.gallery') }}</p></a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-2 col-md-4 col-sm-6">
        <div class="card text-center">
            <div class="card-content">
                <div class="card-body">
                    <div class="avatar bg-rgba-success p-50 m-0 mb-1">
                        <div class="avatar-content">
                           <a href="{{ route('admin.testimonial.index') }}"> <i class="feather icon-award text-success font-medium-5"></i></a>
                        </div>
                    </div>
                   <a href="{{ route('admin.testimonial.index') }}"><h2 class="text-bold-700">{{ $testimonials}}</h2>
                    <p class="mb-0 line-ellipsis">{{ trans('backend.testimonials') }}</p></a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-2 col-md-4 col-sm-6">
        <div class="card text-center">
            <div class="card-content">
                <div class="card-body">
                    <div class="avatar bg-rgba-warning p-50 m-0 mb-1">
                        <div class="avatar-content">
                            <a href="{{ route('admin.contact_forms.index') }}"><i class="feather icon-mail text-warning font-medium-5"></i></a>
                        </div>
                    </div>
                <a href="{{ route('admin.contact_forms.index') }}"><h2 class="text-bold-700">{{ $contact_forms }}</h2>
                    <p class="mb-0 line-ellipsis">{{ trans('backend.contacts_forms') }}</p></a>
                </div>
            </div>
        </div>
    </div>
    </div>


    <div class="row">
        <div class="col-xl-2 col-md-4 col-sm-6">
            <div class="card text-center">
                <div class="card-content">
                    <div class="card-body">
                        <div class="avatar bg-rgba-info p-50 m-0 mb-1">
                            <div class="avatar-content">
                               <a href="{{ route('admin.team.index') }}"> <i class="feather icon-users text-info font-medium-5"></i></a>
                            </div>
                        </div>
                        <a href="{{ route('admin.team.index') }}"><h2 class="text-bold-700">{{ $teams}}</h2>
                        <p class="mb-0 line-ellipsis">{{ trans('backend.team') }}</p></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-2 col-md-4 col-sm-6">
            <div class="card text-center">
                <div class="card-content">
                    <div class="card-body">
                        <div class="avatar bg-rgba-success p-50 m-0 mb-1">
                            <div class="avatar-content">
                              <a href="{{ route('admin.activitytype.index') }}">  <i class="feather icon-activity text-success font-medium-5"></i></a>
                            </div>
                        </div>
                       <a href="{{ route('admin.activitytype.index') }}"> <h2 class="text-bold-700">{{ $activitytypes }}</h2>
                        <p class="mb-0 line-ellipsis">{{ trans('backend.activitytype') }}</p></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-2 col-md-4 col-sm-6">
            <div class="card text-center">
                <div class="card-content">
                    <div class="card-body">
                        <div class="avatar bg-rgba-warning p-50 m-0 mb-1">
                            <div class="avatar-content">
                                <a href="{{ route('admin.unittype.index') }}"><i class="feather icon-server text-warning font-medium-5"></i></a>
                            </div>
                        </div>
                        <a href="{{ route('admin.unittype.index') }}"><h2 class="text-bold-700">{{ $unittypes }}</h2>
                        <p class="mb-0 line-ellipsis">{{ trans('backend.unittype') }}</p></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-2 col-md-4 col-sm-6">
            <div class="card text-center">
                <div class="card-content">
                    <div class="card-body">
                        <div class="avatar bg-rgba-primary p-50 m-0 mb-1">
                            <div class="avatar-content">
                               <a href="{{ route('admin.sector.index') }}"> <i class="feather icon-cpu text-primary font-medium-5"></i></a>
                            </div>
                        </div>
                        <a href="{{ route('admin.sector.index') }}"><h2 class="text-bold-700">{{ $sectors }}</h2>
                        <p class="mb-0 line-ellipsis">{{ trans('backend.sectors') }}</p></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-2 col-md-4 col-sm-6">
            <div class="card text-center">
                <div class="card-content">
                    <div class="card-body">
                        <div class="avatar bg-rgba-info p-50 m-0 mb-1">
                            <div class="avatar-content">
                                <a href="{{ route('admin.field.index') }}"><i class="feather icon-cpu text-info font-medium-5"></i></a>
                            </div>
                        </div>
                        <a href="{{ route('admin.field.index') }}"><h2 class="text-bold-700">{{ $fields}}</h2>
                        <p class="mb-0 line-ellipsis">{{ trans('backend.fields') }}</p></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-2 col-md-4 col-sm-6">
            <div class="card text-center">
                <div class="card-content">
                    <div class="card-body">
                        <div class="avatar bg-rgba-success p-50 m-0 mb-1">
                            <div class="avatar-content">
                               <a href="{{ URL('/admin/forum/category')}}"> <i class="feather icon-credit-card text-success font-medium-5"></i></a>
                            </div>
                        </div>
                        <a href="{{ URL('/admin/forum/category')}}"><h2 class="text-bold-700">{{ $forum_categories }}</h2>
                        <p class="mb-0 line-ellipsis">{{ trans('backend.forum_category') }}</p></a>
                    </div>
                </div>
            </div>
        </div>
    </div>


</section>
@endsection

