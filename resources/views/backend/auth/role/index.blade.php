@extends('backend.layouts.app')

@section('title', GeneralSiteSettings('site_title') . ' | '. __('labels.backend.access.roles.management'))
@section('page-css-ltr')


<!-- BEGIN: Page CSS-->
<link rel="stylesheet" type="text/css"
    href="{{asset('backend/app-assets/css/core/menu/menu-types/vertical-menu.css') }}">
<link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/css/core/colors/palette-gradient.css') }}">
<link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/css/pages/app-user.css') }}">
<link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/css/pages/aggrid.css') }}">
<!-- END: Page CSS-->


@endsection


@section('page-css-rtl')

<!-- BEGIN: Page CSS-->
<link rel="stylesheet" type="text/css"
    href="{{asset('backend/app-assets/css-rtl/core/menu/menu-types/vertical-menu.css') }}">
<link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/css-rtl/core/colors/palette-gradient.css') }}">
<link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/css-rtl/pages/app-user.css') }}">
<link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/css-rtl/pages/aggrid.css') }}">
<!-- END: Page CSS-->
@endsection
@section('content')
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-5">
                <h4 class="card-title mb-0">
                    @lang('labels.backend.access.roles.management')
                </h4>
            </div><!--col-->

            <div class="col-sm-7 pull-right">
                @include('backend.auth.role.includes.header-buttons')
            </div><!--col-->
        </div><!--row-->

        <div class="row mt-4">
            <div class="col">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>@lang('labels.backend.access.roles.table.role')</th>
                            <th>@lang('labels.backend.access.roles.table.permissions')</th>
                            <th>@lang('labels.backend.access.roles.table.number_of_users')</th>
                            <th>@lang('labels.general.actions')</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($roles as $role)
                                <tr>
                                    <td>{{ ucwords($role->name) }}</td>
                                    <td>
                                        @if($role->id === 1)
                                            @lang('labels.general.all')
                                        @else
                                            @if($role->permissions->count())
                                                @foreach($role->permissions as $permission)
                                                    {{ ucwords($permission->name) }}
                                                @endforeach
                                            @else
                                                @lang('labels.general.none')
                                            @endif
                                        @endif
                                    </td>
                                    <td>{{ $role->users->count() }}</td>
                                    <td>@include('backend.auth.role.includes.actions', ['role' => $role])</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div><!--col-->
        </div><!--row-->
        <div class="row">
            <div class="col-7">
                <div class="float-left">
                    {!! $roles->total() !!} {{ trans_choice('labels.backend.access.roles.table.total', $roles->total()) }}
                </div>
            </div><!--col-->

            <div class="col-5">
                <div class="float-right">
                    {!! $roles->render() !!}
                </div>
            </div><!--col-->
        </div><!--row-->
    </div><!--card-body-->
</div><!--card-->
@endsection
@section('page-js')
<!-- BEGIN: Page Vendor JS-->
<script src="{{asset('backend/app-assets/vendors/js/tables/ag-grid/ag-grid-community.min.noStyle.js') }} "></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Page JS-->
<script src="{{asset('backend/app-assets/js/scripts/pages/app-user.js') }} "></script>
<!-- END: Page JS-->
@endsection
