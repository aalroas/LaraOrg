@extends('backend.layouts.app')

@section('title', GeneralSiteSettings('site_title') . ' | ' . __('labels.backend.access.users.management'))
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
                     <table class="table table-striped dataex-html5-selectors">
                        <thead>
                            <tr>
                                <th>@lang('frontend.profile_image')</th>
                                <th>@lang('backend.full_name')</th>
                                <th>@lang('labels.backend.access.users.table.email')</th>
                                <th>@lang('backend.is_board')</th>
                                <th>@lang('labels.backend.access.users.table.confirmed')</th>
                                <th>@lang('labels.backend.access.users.table.roles')</th>
                                <th>@lang('labels.backend.access.users.table.other_permissions')</th>

                                <th>{{ trans('backend.member_card') }}</th>

                                <th>@lang('labels.backend.access.users.table.last_updated')</th>
                                <th>@lang('labels.general.actions')</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                            <tr>
                                <td align="center"> <img style="height: 50px;width: 50px;" class="img-circle"
                                                src="{{ asset('storage')}}/{{$user->profile_image }}"></td>
                                <td>{{ $user->full_name }}</td>
                                <td>{{ $user->email }}</td>


                                     <td>@if($user->is_board == 1) {{ trans('backend.yes') }} @else
                                            {{ trans('backend.no') }} @endif</td>



                                <td>@include('backend.auth.user.includes.confirm', ['user' => $user])</td>
                                <td>{{ $user->roles_label }}</td>
                                <td>{{ $user->permissions_label }}</td>

                                <td><a href="{{ route('admin.auth.user.member_card',$user->id) }}" class="btn btn-primary btn-sm ajax-modal">{{ trans('backend.print') }}</a>
                                    </td>

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

