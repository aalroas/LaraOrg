@extends('backend.layouts.app')

@section('title', __('labels.backend.access.users.management') . ' | ' . __('labels.backend.access.users.create'))

@section('breadcrumb-links')
    @include('backend.auth.user.includes.breadcrumb-links')
@endsection
@section('some-css')
<link rel="stylesheet" href="{{asset('frontend/c_build/css/countrySelect.css')}}">
<link rel="stylesheet" href="{{asset('frontend/c_build/css/demo.css')}}">
@endsection
@section('content')

<form id="register-form"   class="form-horizontal" action="{{route('admin.auth.user.store')}}"  method="POST"  enctype="multipart/form-data">
{{ csrf_field() }}
    <div class="card">
        <div class="card-body">
            <h4 class="border-bottom p-bottom-25 m-bottom-50 m-top-70">{{ trans('frontend.personal_information') }}
            </h4>
            <div class="form-group">
                <label>{{ trans('frontend.full_name') }} [ {{trans('backend.arabic') }} ]<span class="sup">*</span></label>
                <input type="text" class="form-control" name="full_name_ar"
                    placeholder="{{ trans('frontend.full_name') }}   [ {{trans('backend.arabic') }} ]" required="required" aria-required="true">
            </div><!-- ends: .form-group -->
            <div class="form-group">
                <label>{{ trans('frontend.full_name') }} [ {{trans('backend.english') }} ]<span class="sup">*</span></label>
                <input type="text" class="form-control" name="full_name_en"
                    placeholder="{{ trans('frontend.full_name') }}   [ {{trans('backend.english') }} ]">
            </div><!-- ends: .form-group -->

            <div class="form-group">
                <label>{{ trans('frontend.email') }}<span class="sup">*</span></label>
                <input type="email" class="form-control" name="email" placeholder="{{ trans('frontend.email') }}"
                    required="required" aria-required="true">
            </div><!-- ends: .form-group -->

            <div class="form-group">
                <label>{{ trans('frontend.password') }}<span class="sup">*</span></label>
                <input type="password" id="password" class="form-control" name="password"
                    placeholder="{{ trans('frontend.password') }}" required="required" aria-required="true">
            </div><!-- ends: .form-group -->

            <div class="form-group">

                <label>{{ trans('frontend.password_confirmation') }}<span class="sup">*</span></label>
                <span id='message'></span>
                <input type="password" id="confirm_password" name="password_confirmation" class="form-control"
                    placeholder="{{ trans('frontend.password_confirmation') }}" required="required" aria-required="true">

            </div><!-- ends: .form-group -->

            <script>
                $('#password, #confirm_password').on('keyup', function () {
                        if ($('#password').val() == $('#confirm_password').val()) {
                        $('#message').html('@lang('frontend.password_are_matching')').css('color', 'green');
                        } else
                        $('#message').html('@lang('frontend.password_not_matching')').css('color', 'red');
                        });
            </script>



            <div class="form-group">
                <label>{{ trans('frontend.phone') }}<span class="sup">*</span></label>
                <input style="direction:ltr;" type="text" class="form-control" name="phone" placeholder="{{ trans('frontend.phone') }}" required="required"
                    required aria-required="true">
            </div><!-- ends: .form-group -->


            <div class="form-group">
                <label>{{ trans('frontend.gender') }}<span class="sup">*</span></label>
                <div class="select-basic">
                    <select class="form-control" name="gender" id="gender">
                        <option value="1">{{ trans('frontend.male') }}</option>
                        <option value="0">{{ trans('frontend.female') }}</option>
                    </select>
                </div>
            </div><!-- ends: .form-group -->

            <br>
            <br>
            <h4 class="border-bottom p-bottom-25 m-bottom-50 m-top-70">{{ trans('frontend.company_information') }}
            </h4>

            <label>{{ trans('frontend.company_name') }} [ {{trans('backend.arabic') }} ]<span class="sup">*</span></label>
            <div class="form-group">

                <input type="text" class="form-control" name="company_name_ar"
                    placeholder="{{ trans('frontend.company_name') }}   [ {{trans('backend.arabic') }} ]" required="required" aria-required="true">
            </div><!-- ends: .form-group -->
            <label>{{ trans('frontend.company_name') }} [ {{trans('backend.english') }} ]<span class="sup">*</span></label>
            <div class="form-group">

                <input type="text" class="form-control" name="company_name_en"
                    placeholder="{{ trans('frontend.company_name') }}   [ {{trans('backend.english') }} ]">
            </div><!-- ends: .form-group -->
            <label>{{ trans('frontend.company_name') }} [{{trans('backend.turkish')}}]<span class="sup">*</span></label>
            <div class="form-group">

                <input type="text" class="form-control" name="company_name_tr"
                    placeholder="{{ trans('frontend.company_name') }}   [{{trans('backend.turkish')}}]">
            </div><!-- ends: .form-group -->

            <label>{{ trans('frontend.sicil_no') }}<span class="sup">*</span></label>
            <div class="form-group">

                <input type="text" class="form-control" name="sicil_no" placeholder="{{ trans('frontend.sicil_no') }}">
            </div><!-- ends: .form-group -->


            <label>{{ trans('frontend.select_company_sector') }}</label>
            <div class="form-group">


                <select class="select2 form-control" multiple="multiple" required="required" aria-required="true" name="sectors[]">


                    @foreach ($sectors  as $sector)
                    <option value="{{ $sector->id }}"> {{ $sector->name }} </option>
                    @endforeach


                </select><!-- End: .form-control -->

            </div><!-- ends: .form-group -->
            <label>{{ trans('frontend.select_company_fields') }}</label>
            <div class="form-group">

                <select class="select2 form-control" multiple="multiple" required="required" aria-required="true" name="fields[]">

                    @foreach ($fields as $field)
                    <option value="{{ $field->id }}"> {{ $field->name }} </option>
                    @endforeach
                </select><!-- End: .form-control -->

            </div><!-- ends: .form-group -->
            <label>{{ trans('frontend.year_founded') }}<span class="sup">*</span></label>
            <div class="form-group">

                <input name="year_founded" type="date" class="form-control" required="required" aria-required="true">



            </div><!-- ends: .form-group -->

            <label>{{ trans('frontend.country') }}</label>


            <div class="form-control">

                <input autocomplete="off" id="country_selector" type="text">
                <label for="country_selector" style="display:none;"></label>

            </div>

            <div class="form-control" style="display:none;">
                <input autocomplete="off" type="text" id="country_selector_code" data-countrycodeinput="55" readonly="readonly"
                    placeholder="{{ trans('frontend.country') }}" />
                <label readonly="readonly" for="country_selector_code"></label>
            </div>
            <script src="{{asset('frontend/c_build/js/countrySelect.js')}}"></script>
            <script>
                $("#country_selector").countrySelect({
                                            defaultCountry: "tr",
                                             preferredCountries: ['ye', 'tr', 'sa'],
                                             responsiveDropdown: true
                                        }
                                        );
        $(document).ready(function(){
        // Get value on button click and show alert
        var country = $("#country_selector").val();
        $('<input />').attr('type', 'hidden')
        .attr('name', 'country')
        .attr('value', country)
        .appendTo('#register-form');
        });
            </script>



            <label>{{ trans('frontend.main_company_location') }} [ {{trans('backend.arabic') }} ] <span class="sup">*</span> </label>
            <div class="form-group">

                <input type="text" name="main_location_ar" class="form-control"
                    placeholder="{{ trans('frontend.main_company_location') }}  [ {{trans('backend.arabic') }} ]" required="required"
                    aria-required="true">
            </div><!-- ends: .form-group -->
            <label>{{ trans('frontend.main_company_location') }} [ {{trans('backend.english') }} ]</label>
            <div class="form-group">

                <input type="text" name="main_location_en" class="form-control"
                    placeholder="{{ trans('frontend.main_company_location') }}  [ {{trans('backend.english') }} ]">
            </div><!-- ends: .form-group -->
            <label>{{ trans('frontend.main_company_location') }} [ {{trans('backend.turkish') }} ]</label>
            <div class="form-group">

                <input type="text" name="main_location_tr" class="form-control"
                    placeholder="{{ trans('frontend.main_company_location') }}  [ {{trans('backend.turkish') }} ]">
            </div><!-- ends: .form-group -->




            <label>{{ trans('frontend.do_you_have_any_agency?please_mention_them') }}</label>
            <div class="form-group">
                <textarea name="agency" id="agency" class="form-control " cols="20" rows="3"></textarea>
            </div><!-- ends: .form-group -->



            <label>{{ trans('frontend.please_select_number_of_your_company_employee') }}</label>
            <div class="form-group">


                <select name="number_of_employee" class="form-control">

                    <option value="1">1 - 3</option>
                    <option value="2">3 - 10</option>
                    <option value="3">10 - 50</option>
                    <option value="4">50 - 500</option>
                    <option value="5">>500</option>

                </select><!-- End: .form-control -->

            </div><!-- ends: .form-group -->



            <label>{{ trans('frontend.main_address') }} [ {{trans('backend.arabic') }} ] <span class="sup">*</span> </label>
            <div class="form-group">
                <textarea name="main_address_ar" id="main_address_ar" class="form-control mceNoEditor" cols="20" rows="3" required="required"
                    required aria-required="true"></textarea>
            </div><!-- ends: .form-group -->

            <label>{{ trans('frontend.main_address') }} [ {{trans('backend.english') }} ]</label>
            <div class="form-group">
                <textarea name="main_address_en" id="main_address_en" class="form-control mceNoEditor" cols="20" rows="3"></textarea>
            </div><!-- ends: .form-group -->

            <label>{{ trans('frontend.main_address') }} [ {{trans('backend.turkish') }} ]</label>
            <div class="form-group">
                <textarea name="main_address_tr" id="main_address_tr" class="form-control mceNoEditor" cols="20" rows="3"></textarea>
            </div><!-- ends: .form-group -->





            <label>{{ trans('frontend.branches_addresses') }}</label>
            <div class="form-group">
                <textarea name="branches_addresses" id="branches_addresses" class="form-control mceNoEditor" cols="20" rows="3"></textarea>
            </div><!-- ends: .form-group -->





            <label>{{ trans('frontend.main_product') }}</label>
            <div class="form-group">
                <textarea name="main_product" id="main_product" class="form-control mceNoEditor" cols="20" rows="3"></textarea>
            </div><!-- ends: .form-group -->





            <label>{{ trans('frontend.brief_description_about_the_company') }} [ {{trans('backend.arabic') }} ]</label>
            <div class="form-group">
                <textarea name="brief_description_ar" id="brief_description_ar" class="form-control mceNoEditor" cols="20"
                    rows="3"></textarea>
            </div><!-- ends: .form-group -->

            <label>{{ trans('frontend.brief_description_about_the_company') }} [ {{trans('backend.english') }} ]</label>
            <div class="form-group">
                <textarea name="brief_description_en" id="brief_description_en" class="form-control mceNoEditor" cols="20"
                    rows="3"></textarea>
            </div><!-- ends: .form-group -->

            <label>{{ trans('frontend.brief_description_about_the_company') }} [ {{trans('backend.turkish') }} ]</label>
            <div class="form-group">
                <textarea name="brief_description_tr" id="brief_description_tr" class="form-control mceNoEditor" cols="20"
                    rows="3"></textarea>
            </div><!-- ends: .form-group -->





            <label>{{ trans('frontend.partner_companies') }}</label>
            <div class="form-group">
                <textarea name="partner_companies" id="partner_companies" class="form-control mceNoEditor" cols="20" rows="3"></textarea>
            </div><!-- ends: .form-group -->



            <br>
            <br>
            <div class="row">
                <div class="col-md-6">
                    <label for="{{trans('frontend.profile_image')}}">{{trans('frontend.profile_image')}} <span
                            class="sup">*</span></label>
                    <div class="form-group">
                        <input type="file" name="profile_image" class="dropify" data-default-file=""
                            data-allowed-file-extensions="png jpg jpeg" required="required" aria-required="true">
                    </div>
                </div>
                <div class="col-md-6">

                    <label for="{{trans('frontend.company_logo')}}">{{trans('frontend.company_logo')}} <span
                            class="sup">*</span></label>
                    <div class="form-group">
                        <input type="file" name="company_logo" class="dropify" data-default-file=""
                            data-allowed-file-extensions="png jpg jpeg" required="required" aria-required="true">
                    </div>
                </div>
            </div>
            <script src="{{asset('backend/dropify/js/dropify.js') }}"></script>
            <script src="{{asset('backend/dropify/dropify.js') }}"></script>
            <br>
            <br>
            <h4 class="border-bottom p-bottom-25 m-bottom-50 m-top-70">{{ trans('frontend.social_media_accounts') }} </h4>

            <label>{{ trans('frontend.facebook') }} </label>
            <div class="form-group">

                <input type="text" name="facebook_url" class="form-control" placeholder="{{ trans('frontend.facebook') }}">
            </div><!-- ends: .form-group -->
            <label>{{ trans('frontend.instagram') }} </label>
            <div class="form-group">

                <input type="text" name="instagram_url" class="form-control" placeholder="{{ trans('frontend.instagram') }} ">
            </div><!-- ends: .form-group -->
            <label>{{ trans('frontend.twitter') }} </label>
            <div class="form-group">
                <input type="text" name="twitter_url" class="form-control" placeholder="{{ trans('frontend.twitter') }}">
            </div><!-- ends: .form-group -->


            <label>{{ trans('frontend.linkedin') }} </label>
            <div class="form-group">
                <input type="text" name="linkedin_url" class="form-control" placeholder="{{ trans('frontend.linkedin') }}">
            </div><!-- ends: .form-group -->

            <br>
            <div class="custom-control custom-checkbox checkbox-secondary">
                <input type="checkbox" class="custom-control-input" id="customCheck3" required="required"
                    aria-required="true">
                <label class="custom-control-label" for="customCheck3">{{ trans('frontend.i_agree_with_the_all_additional') }}
                    <a style="color:red" data-toggle="modal"
                        data-target="#myModal">{{ trans('frontend.membership_conditions') }}</a>
                </label>
            </div>






            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                    aria-hidden="true">&times;</span></button>
                            <h4 style="color:red" class="modal-title" id="myModalLabel">
                                {{ trans('frontend.membership_conditions') }}</h4>
                        </div>
                        <div class="modal-body">
                            <p style="padding: 20px;">
                                {!! trans('frontend.membership_conditions_text') !!}
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default"
                                data-dismiss="modal">{{ trans('frontend.close') }}</button>
                        </div>
                    </div>
                </div>
            </div>



            <br>



                        <div class="form-group row">
                            {{ html()->label(__('validation.attributes.backend.access.users.active'))->class('col-md-2 form-control-label')->for('active') }}

                            <div class="col-md-10">
                                <label class="switch switch-label switch-pill switch-primary">
                                    {{ html()->checkbox('active', true)->class('switch-input') }}
                                    <span class="switch-slider" data-checked="yes" data-unchecked="no"></span>
                                </label>
                            </div><!--col-->
                        </div><!--form-group-->

                        <div class="form-group row">
                            {{ html()->label(__('validation.attributes.backend.access.users.confirmed'))->class('col-md-2 form-control-label')->for('confirmed') }}

                            <div class="col-md-10">
                                <label class="switch switch-label switch-pill switch-primary">
                                    {{ html()->checkbox('confirmed', true)->class('switch-input') }}
                                    <span class="switch-slider" data-checked="yes" data-unchecked="no"></span>
                                </label>
                            </div><!--col-->
                        </div><!--form-group-->

                        @if(! config('access.users.requires_approval'))
                            <div class="form-group row">
                                {{ html()->label(__('validation.attributes.backend.access.users.send_confirmation_email') . '<br/>' . '<small>' .  __('strings.backend.access.users.if_confirmed_off') . '</small>')->class('col-md-2 form-control-label')->for('confirmation_email') }}

                                <div class="col-md-10">
                                    <label class="switch switch-label switch-pill switch-primary">
                                        {{ html()->checkbox('confirmation_email')->class('switch-input') }}
                                        <span class="switch-slider" data-checked="yes" data-unchecked="no"></span>
                                    </label>
                                </div><!--col-->
                            </div><!--form-group-->
                        @endif

                        <div class="form-group row">
                            {{ html()->label(__('labels.backend.access.users.table.abilities'))->class('col-md-2 form-control-label') }}

                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>@lang('labels.backend.access.users.table.roles')</th>
                                            <th>@lang('labels.backend.access.users.table.permissions')</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>
                                                @if($roles->count())
                                                    @foreach($roles as $role)
                                                        <div class="card">
                                                            <div class="card-header">
                                                                <div class="checkbox d-flex align-items-center">
                                                                    {{ html()->label(
                                                                            html()->checkbox('roles[]', old('roles') && in_array($role->name, old('roles')) ? true : false, $role->name)
                                                                                  ->class('switch-input')
                                                                                  ->id('role-'.$role->id)
                                                                            . '<span class="switch-slider" data-checked="on" data-unchecked="off"></span>')
                                                                        ->class('switch switch-label switch-pill switch-primary mr-2')
                                                                        ->for('role-'.$role->id) }}
                                                                    {{ html()->label(ucwords($role->name))->for('role-'.$role->id) }}
                                                                </div>
                                                            </div>
                                                            <div class="card-body">
                                                                @if($role->id != 1)
                                                                    @if($role->permissions->count())
                                                                        @foreach($role->permissions as $permission)
                                                                            <i class="fas fa-dot-circle"></i> {{ ucwords($permission->name) }}
                                                                        @endforeach
                                                                    @else
                                                                        @lang('labels.general.none')
                                                                    @endif
                                                                @else
                                                                    @lang('labels.backend.access.users.all_permissions')
                                                                @endif
                                                            </div>
                                                        </div><!--card-->
                                                    @endforeach
                                                @endif
                                            </td>
                                            <td>
                                                @if($permissions->count())
                                                    @foreach($permissions as $permission)
                                                        <div class="checkbox d-flex align-items-center">
                                                            {{ html()->label(
                                                                    html()->checkbox('permissions[]', old('permissions') && in_array($permission->name, old('permissions')) ? true : false, $permission->name)
                                                                          ->class('switch-input')
                                                                          ->id('permission-'.$permission->id)
                                                                        . '<span class="switch-slider" data-checked="on" data-unchecked="off"></span>')
                                                                    ->class('switch switch-label switch-pill switch-primary mr-2')
                                                                ->for('permission-'.$permission->id) }}
                                                            {{ html()->label(ucwords($permission->name))->for('permission-'.$permission->id) }}
                                                        </div>
                                                    @endforeach
                                                @endif
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div><!--col-->
                        </div><!--form-group-->


            <div class="card-footer clearfix">
                <div class="row">
                    <div class="col">
                        {{ form_cancel(route('admin.auth.user.index'), __('buttons.general.cancel')) }}
                    </div><!--col-->

                    <div class="col text-right">
                        {{ form_submit(__('buttons.general.crud.create')) }}
                    </div><!--col-->
                </div><!--row-->
            </div><!--card-footer-->
        </div><!--card-->
        </div>
            <!--card-->
   </form>
@endsection
