@extends('backend.layouts.app')

@section('title', GeneralSiteSettings('site_title') . ' | ' . __('labels.backend.access.users.management'))

@section('page-css-ltr')


<!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/css/core/menu/menu-types/vertical-menu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/css/core/colors/palette-gradient.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/css/pages/app-user.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/css/pages/aggrid.css') }}">
    <!-- END: Page CSS-->

<!-- LTR -->

@endsection


@section('page-css-rtl')

<!-- BEGIN: Page CSS-->
<link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/css-rtl/core/menu/menu-types/vertical-menu.css') }}">
<link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/css-rtl/core/colors/palette-gradient.css') }}">
<link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/css-rtl/pages/app-user.css') }}">
<link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/css-rtl/pages/aggrid.css') }}">
<!-- END: Page CSS-->
@endsection



@section('breadcrumb-links')
@include('backend.auth.user.includes.breadcrumb-links')
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-5">
                <h4 class="card-title mb-0">
                    {{ __('labels.backend.access.users.management') }} <small
                        class="text-muted">{{ __('labels.backend.access.users.active') }}</small>
                </h4>
            </div>
            <!--col-->

            <div class="col-sm-7">
                @include('backend.auth.user.includes.header-buttons')
            </div>


            <!--col-->
        </div>
        <!--row-->

        <div class="row mt-4">

            <div class="col">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>@lang('labels.backend.access.users.table.last_name')</th>
                                <th>@lang('labels.backend.access.users.table.first_name')</th>
                                <th>@lang('labels.backend.access.users.table.email')</th>
                                <th>@lang('labels.backend.access.users.table.confirmed')</th>
                                <th>@lang('labels.backend.access.users.table.roles')</th>
                                <th>@lang('labels.backend.access.users.table.other_permissions')</th>
                                <th>@lang('labels.backend.access.users.table.social')</th>
                                <th>@lang('labels.backend.access.users.table.last_updated')</th>
                                <th>@lang('labels.general.actions')</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                            <tr>
                                <td>{{ $user->last_name }}</td>
                                <td>{{ $user->first_name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>@include('backend.auth.user.includes.confirm', ['user' => $user])</td>
                                <td>{{ $user->roles_label }}</td>
                                <td>{{ $user->permissions_label }}</td>
                                <td>@include('backend.auth.user.includes.social-buttons', ['user' => $user])</td>
                                <td>{{ $user->updated_at->diffForHumans() }}</td>
                                <td class="btn-td">@include('backend.auth.user.includes.actions', ['user' => $user])
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <!--col-->
        </div>
        <!--row-->
        <div class="row">
            <div class="col-7">
                <div class="float-left">
                    {!! $users->total() !!}
                    {{ trans_choice('labels.backend.access.users.table.total', $users->total()) }}
                </div>
            </div>
            <!--col-->

            <div class="col-5">
                <div class="float-right">
                    {!! $users->render() !!}
                </div>
            </div>
            <!--col-->
        </div>
        <!--row-->
    </div>
    <!--card-body-->
</div>
<!--card-->
@endsection
@section('page-js')
<!-- BEGIN: Page Vendor JS-->
<script src="{{asset('backend/app-assets/vendors/js/tables/ag-grid/ag-grid-community.min.noStyle.js') }} "></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Page JS-->
<script src="{{asset('backend/app-assets/js/scripts/pages/app-user.js') }} "></script>
<!-- END: Page JS-->
@endsection
