@extends('backend.layouts.app')

@section('title', __('labels.backend.access.users.management') . ' | ' . __('labels.backend.access.users.change_password'))

@section('breadcrumb-links')
    @include('backend.auth.user.includes.breadcrumb-links')
@endsection

@section('content')
{{ html()->form('PATCH', route('admin.auth.user.change-password.post', $user))->class('form-horizontal')->open() }}
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-5">
                    <h4 class="card-title mb-0">
                        @lang('labels.backend.access.users.management')
                        <small class="text-muted">@lang('labels.backend.access.users.change_password')</small>
                    </h4>

                    <div class="small text-muted">
                        @lang('labels.backend.access.users.change_password_for', ['user' => $user->name])
                    </div>
                </div><!--col-->
            </div><!--row-->

            <hr />

            <div class="row mt-4 mb-4">
                <div class="col">
                    <div class="form-group row">
                        {{ html()->label(__('validation.attributes.backend.access.users.password'))->class('col-md-2 form-control-label')->for('password') }}

                        <div class="col-md-10">
                            {{ html()->password('password')
                                ->class('form-control')
                                ->id('password')
                                ->placeholder( __('validation.attributes.backend.access.users.password'))
                                ->required()
                                ->autofocus() }}

                        </div><!--col-->

                    </div><!--form-group-->

                    <div class="form-group row">
                        {{ html()->label(__('validation.attributes.backend.access.users.password_confirmation'))->class('col-md-2 form-control-label')->for('password_confirmation') }}

                        <div class="col-md-10">
                            {{ html()->password('password_confirmation')
                                ->class('form-control')
                                ->id('confirm_password')
                                ->placeholder( __('validation.attributes.backend.access.users.password_confirmation'))
                                ->required() }}
                                <span id='message'></span>
                        </div><!--col-->

                        <script>
                            $('#password, #confirm_password').on('keyup', function () {
                                             if ($('#password').val() == $('#confirm_password').val()) {
                                            $('#message').html('@lang('frontend.password_are_matching')').css('color', 'green');
                                            } else
                                             $('#message').html('@lang('frontend.password_not_matching')').css('color', 'red');
                                            });
                        </script>

                    </div><!--form-group-->
                </div><!--col-->
            </div><!--row-->
        </div><!--card-body-->

        <div class="card-footer">
            <div class="row">
                <div class="col">
                    {{ form_cancel(route('admin.auth.user.index'), __('buttons.general.cancel')) }}
                </div><!--col-->

                <div class="col text-right">
                    {{ form_submit(__('buttons.general.crud.update')) }}
                </div><!--row-->
            </div><!--row-->
        </div><!--card-footer-->
    </div><!--card-->
{{ html()->form()->close() }}
@endsection
