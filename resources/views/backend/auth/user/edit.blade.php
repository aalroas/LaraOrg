




@extends('backend.layouts.app')

@section('title', __('labels.backend.access.users.management') . ' | ' . __('labels.backend.access.users.edit'))

@section('breadcrumb-links')
@include('backend.auth.user.includes.breadcrumb-links')
@endsection


@section('page-css-rtl')

<link rel="stylesheet" type="text/css"
    href="{{asset('backend/app-assets/css-rtl/core/menu/menu-types/vertical-menu.min.css') }}">
<link rel="stylesheet" type="text/css"
    href="{{asset('backend/app-assets/css-rtl/core/colors/palette-gradient.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/css-rtl/pages/app-user.min.css') }}">
@endsection


@section('content')

<section class="users-edit">
    <div class="card">
        <div class="card-content">
            <div class="card-body">
                <ul class="nav nav-tabs mb-3" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link d-flex align-items-center active" id="account-tab" data-toggle="tab"
                            href="#account" aria-controls="account" role="tab" aria-selected="true">
                            <i class="feather icon-user mr-25"></i><span
                                class="d-none d-sm-block">@lang('navs.frontend.user.account')</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-flex align-items-center" id="information-tab" data-toggle="tab"
                            href="#information" aria-controls="information" role="tab" aria-selected="false">
                            <i class="feather icon-info mr-25"></i><span
                                class="d-none d-sm-block">@lang('labels.frontend.user.profile.updateCompanyInformation')</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-flex align-items-center" id="social-tab" data-toggle="tab" href="#social"
                            aria-controls="social" role="tab" aria-selected="false">
                            <i class="feather icon-share-2 mr-25"></i><span
                                class="d-none d-sm-block">@lang('frontend.social_media_accounts')</span>
                        </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="account" aria-labelledby="account-tab" role="tabpanel">
                        <!-- users edit media object start -->





{{ html()->modelForm($user->user, 'PATCH', route('admin.auth.user.updatePersonalInfo', $user->id))->class('form-horizontal')->attribute('enctype', 'multipart/form-data')->open() }}


                        <div class="col-md-4 col-sm-12">
                            <a class="mr-2 my-15" href="#">
                                <div class="form-group">
                                    <input type="file"  class="dropify"
                                        data-default-file="{{ asset('storage')}}/{{ $user->profile_image }}"
                                        data-allowed-file-extensions="png jpg jpeg"
                                  name="profile_image"     >

                            </a>
     </div>

                        </div>
                        <!-- users edit media object ends -->
                        <!-- users edit account form start -->

                        <div class="row">
                            <div class="col-12 col-sm-4">


                                <div class="form-group">
                                    <div class="controls">
                                        <label>{{ trans('backend.full_name') }} [ {{trans('backend.arabic') }} ]</label>
                                        <input type="text" name="full_name_ar" class="form-control"
                                            placeholder="{{ trans('backend.full_name') }}"
                                            value="{{ $user->full_name_ar}}" required
                                            data-validation-required-message="This username field is required">
                                    </div>
                                </div>



                                <div class="form-group">
                                    <div class="controls">
                                        <label>{{ trans('backend.full_name') }} [ {{trans('backend.english') }} ]</label>
                                        <input type="text" name="full_name_en" class="form-control"
                                            placeholder="{{ trans('backend.full_name') }}"
                                            value="{{ $user->full_name_en}}" required
                                            data-validation-required-message="This username field is required">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="controls">
                                        <label>{{ trans('backend.full_name') }} [ {{trans('backend.turkish') }} ]</label>
                                        <input type="text" name="full_name_tr" class="form-control"
                                            placeholder="{{ trans('backend.full_name') }}"
                                            value="{{ $user->full_name_tr}}" required
                                            data-validation-required-message="This username field is required">
                                    </div>
                                </div>


                            </div>


                            <div class="col-12 col-sm-4">


                                <div class="form-group">
                                    <div class="controls">
                                        <label>{{ trans('backend.phone') }}</label>
                                        <input type="text" name="phone" class="form-control"
                                            placeholder="{{ trans('backend.phone') }}"
                                            value="{{ $user->phone}}" required
                                            data-validation-required-message="This username field is required">
                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="controls">
                                        <label>{{ trans('backend.email') }}</label>
                                        <input type="text" name="email" class="form-control"
                                            placeholder="{{ trans('backend.email') }}"
                                            value="{{ $user->email}}" required
                                            data-validation-required-message="This username field is required">
                                    </div>
                                </div>



                                <div class="form-group">
                                    <div class="controls">
                                        <label>{{ trans('backend.gender') }}</label>

                                        <select name="gender" class="form-control">
                                            <option @if ($user->gender == 0) selected @endif
                                                value="0">{{ trans('frontend.female') }}</option>
                                            <option @if ($user->gender == 1) selected @endif
                                                value="1">{{ trans('frontend.male') }}</option>
                                        </select>
                                    </div>
                                </div>

                            </div>


                            <div class="col-12 col-sm-4">

                                <div class="form-group">
                                    <div class="controls">
                                        <label>{{ trans('backend.country') }}</label>
                                        <input type="text" name="country" class="form-control"
                                            placeholder="{{ trans('backend.country') }}"
                                            value="{{ $user->country}}" required
                                            data-validation-required-message="This username field is required">
                                    </div>
                                </div>
                            </div>

<div class="divider col-12 col-sm-12">
    <div class="divider-text"><i class="feather icon-check"></i></div>
</div>
<div class="col-4  col-sm-4">
                            <div class="form-group">
                                <div class="controls">
                                    <label>{{ trans('backend.is_board') }}</label>

                                    <select name="is_board" onchange="yesnoCheck(this);" class="form-control">
                                        <option @if ($user->is_board == 1 ) selected @endif
                                            value="1">{{ trans('backend.yes') }}</option>
                                        <option @if ($user->is_board == 0 ) selected
                                            @endif value="0">{{ trans('backend.no') }}</option>
                                    </select>
                                </div>
                            </div>
</div>

<script>
    function yesnoCheck(that) {
    if (that.value == 1) {
    document.getElementById("ifYes").style.display = "block";
    } else {
    document.getElementById("ifYes").style.display = "none";
    }
    }
</script>
<div  id="ifYes" style="display: none;" class="col-12 col-sm-12">

    <div class="form-group">
        <div class="controls">
            <label>{{ trans('backend.position') }} [ {{trans('backend.arabic') }} ]</label>
            <input type="text" name="position_ar" class="form-control" placeholder="{{ trans('backend.position') }}"
                value="{{ $user->position_ar}}"  >
        </div>
    </div>


    <div class="form-group">
        <div class="controls">
            <label>{{ trans('backend.position') }} [ {{trans('backend.english') }} ]</label>
            <input type="text" name="position_en" class="form-control" placeholder="{{ trans('backend.position') }}"
                value="{{ $user->position_en}}"  >
        </div>
    </div>


    <div class="form-group">
        <div class="controls">
            <label>{{ trans('backend.position') }} [ {{trans('backend.turkish') }} ]</label>
            <input type="text" name="position_tr" class="form-control" placeholder="{{ trans('backend.position') }}"
                value="{{ $user->position_tr}}"  >
        </div>
    </div>

</div>


<div class="divider col-12 col-sm-12">
    <div class="divider-text"><i class="feather icon-check"></i></div>
</div>
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
                                                                                                    html()->checkbox('roles[]', in_array($role->name, $userRoles), $role->name)
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
                                            </div>
                                            <!--card-->
                                            @endforeach
                                            @endif
                                        </td>
                                        <td>
                                            @if($permissions->count())
                                            @foreach($permissions as $permission)
                                            <div class="checkbox d-flex align-items-center">
                                                {{ html()->label(
                                                                                            html()->checkbox('permissions[]', in_array($permission->name, $userPermissions), $permission->name)
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




                            <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
                                <button type="submit" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1">
                                    {{ trans('backend.save') }}
                                     </button>
                                <button type="reset" class="btn btn-outline-warning">{{ trans('frontend.reset') }}</button>
                            </div>




                        </div>
                        {{ html()->closeModelForm() }}
                        <br>


                    </div>
                    <div class="tab-pane" id="information" aria-labelledby="information-tab" role="tabpanel">
                        <!-- users edit Info form start -->



{{ html()->modelForm($user->user, 'PATCH', route('admin.auth.user.updateCompanyInfo', $user->id))->class('form-horizontal')->attribute('enctype', 'multipart/form-data')->open() }}


                        <div class="row mt-1">
                            <div class="col-md-4 col-sm-12">

                                    <a class="mr-2 my-15" href="#">
                                        <div class="form-group">
                                            <input type="file" name="company_logo" class="dropify"
                                                data-default-file="{{asset('storage')}}/{{  $user->company_logo}}"
                                                data-allowed-file-extensions="png jpg jpeg">

                                    </a>

                                </div>
                                <h5 class="mb-1"><i
                                        class="feather icon-user mr-25"></i>{{ trans('backend.company_info') }}</h5>
                                <div class="row">
                                    <div class="col-12">



                                        <div class="form-group">
                                            <div class="controls">
                                                <label>{{ trans('backend.company_name') }} [ {{trans('backend.arabic') }} ]</label>
                                                <input type="text" name="company_name_ar" class="form-control"
                                                    placeholder="{{ trans('backend.company_name') }}"
                                                    value="{{ $user->company_name_ar}}" required
                                                    data-validation-required-message="{{ trans('backend.company_name') }}">
                                            </div>
                                        </div>



                                        <div class="form-group">
                                            <div class="controls">
                                                <label>{{ trans('backend.company_name') }} [ {{trans('backend.english') }} ]</label>
                                                <input type="text" name="company_name_en" class="form-control"
                                                    placeholder="{{ trans('backend.company_name') }}"
                                                    value="{{ $user->company_name_en}}" required
                                                    data-validation-required-message="{{ trans('backend.company_name') }}">
                                            </div>
                                        </div>




                                        <div class="form-group">
                                            <div class="controls">
                                                <label>{{ trans('backend.company_name') }} [ {{trans('backend.turkish') }} ]</label>
                                                <input type="text" name="company_name_tr" class="form-control"
                                                    placeholder="{{ trans('backend. company_name') }}"
                                                    value="{{ $user->company_name_tr}}" required
                                                    data-validation-required-message="{{ trans('backend.company_name') }}">
                                            </div>
                                        </div>





<div class="form-group">
                                            <div class="controls">
                                                <label>{{ trans('frontend.sicil_no') }}</label>
                                                <input type="text" name="sicil_no" class="form-control" placeholder="{{ trans('frontend.sicil_no') }}"
                                                    value="{{ $user->sicil_no}}" required
                                                    data-validation-required-message="{{ trans('frontend.sicil_no') }}">
                                            </div>
                                        </div>




                                        <div class="form-group">
                                            <label>{{ trans('backend.company_sectors') }}</label>

                                            <select name="sectors[]" class="select2 form-control" multiple="multiple">
                                                @foreach ($sectors as $sector)
                                                <option value="{{ $sector->id }}"
                                                @foreach ($user->sectors as $usersec)
                                                    @if ($usersec->id == $sector->id)
                                                    selected
                                                    @endif
                                                    @endforeach>
                                                    {{ $sector->name }}
                                                </option>
                                                @endforeach

                                            </select>
                                        </div>


                                        <div class="form-group">
                                            <label>{{ trans('backend.company_fields') }}</label>
                                            <select name="fields[]" class="select2 form-control" multiple="multiple">
                                                @foreach ($fields as $field)
                                                <option value="{{ $field->id }}" @foreach ($user->fields as
                                                    $userfield)
                                                    @if ($userfield->id == $field->id)
                                                    selected
                                                    @endif
                                                    @endforeach>
                                                    {{ $field->name }}
                                                </option>
                                                @endforeach

                                            </select>
                                        </div>



                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="controls">
                                        <label>{{ trans('backend.year_founded') }}</label>
                                        <input name="year_founded" type="text" class="form-control"
                                            value="{{ $user->year_founded}}"
                                            placeholder="{{ trans('backend.year_founded') }}"
                                            data-validation-required-message="{{ trans('backend.year_founded') }}">
                                    </div>
                                </div>












                                <div class="form-group">
                                    <div class="controls">
                                        <label>{{ trans('backend.agency') }}</label>
                                        <input name="agency" type="text" class="form-control"
                                            value="{{ $user->agency}}"
                                            placeholder="{{ trans('backend.agency') }}"
                                            data-validation-required-message="{{ trans('backend.agency') }}">
                                    </div>
                                </div>



                                <div class="form-group">
                                    <div class="controls">
                                        <label>{{ trans('backend.number_of_employee') }}</label>

                                        <select name="number_of_employee" class="form-control">

                                            <option @if ($user->number_of_employee == 1 ) selected @endif
                                                value="1">1 - 3</option>
                                            <option @if ($user->number_of_employee == 2 ) selected
                                                @endif value="2">3 - 10</option>
                                            <option @if ($user->number_of_employee == 3 ) selected
                                                @endif value="3">10 - 50</option>

                                            <option @if ($user->number_of_employee == 4 ) selected
                                                @endif value="4">50 - 500</option>
                                            <option @if ($user->number_of_employee == 5 )
                                                selected @endif value="5">> 500</option>

                                        </select><!-- End: .form-control -->

                                    </div>
                                </div>










                            </div>
                            <div class="col-12 col-sm-6">
                                <h5 class="mb-1 mt-2 mt-sm-0"><i
                                        class="feather icon-map-pin mr-25"></i>{{ trans('backend.address_info') }}</h5>


                                <div class="form-group">
                                    <div class="controls">
                                        <label>{{ trans('backend.main_location') }} [ {{trans('backend.arabic') }} ]</label>
                                        <input name="main_location_ar" type="text" class="form-control"
                                            value="{{ $user->main_location_ar}}"
                                            placeholder="{{ trans('backend.main_location') }}"
                                            data-validation-required-message="{{ trans('backend.main_location') }}">
                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="controls">
                                        <label>{{ trans('backend.main_location') }} [ {{trans('backend.english') }} ]</label>
                                        <input name="main_location_en" type="text" class="form-control"
                                            value="{{ $user->main_location_en}}"
                                            placeholder="{{ trans('backend.main_location') }}"
                                            data-validation-required-message="{{ trans('backend.main_location') }}">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="controls">
                                        <label>{{ trans('backend.main_location') }} [ {{trans('backend.turkish') }} ]</label>
                                        <input name="main_location_tr" type="text" class="form-control"
                                            value="{{ $user->main_location_tr}}"
                                            placeholder="{{ trans('backend.main_location') }}"
                                            data-validation-required-message="{{ trans('backend.main_location') }}">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="controls">
                                        <label>{{ trans('backend.main_address') }} [ {{trans('backend.arabic') }} ]</label>
                                        <input type="text" name="main_address_ar" class="form-control"
                                            value="{{ $user->main_address_ar}}"
                                            placeholder="{{ trans('backend.main_address') }}"
                                            data-validation-required-message="{{ trans('backend.main_address') }}">
                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="controls">
                                        <label>{{ trans('backend.main_address') }} [ {{trans('backend.english') }} ]</label>
                                        <input type="text" name="main_address_en" class="form-control"
                                            value="{{ $user->main_address_en}}"
                                            placeholder="{{ trans('backend.main_address') }}"
                                            data-validation-required-message="{{ trans('backend.main_address') }}">
                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="controls">
                                        <label>{{ trans('backend.main_address') }} [ {{trans('backend.turkish') }} ]</label>
                                        <input type="text" name="main_address_tr" class="form-control"
                                            value="{{ $user->main_address_tr}}"
                                            placeholder="{{ trans('backend.main_address') }}"
                                            data-validation-required-message="{{ trans('backend.main_address') }}">
                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="controls">
                                        <label>{{ trans('backend.branches_addresses') }}</label>
                                        <input type="text" name="branches_addresses" class="form-control"
                                            value="{{ $user->branches_addresses}}"
                                            placeholder="{{ trans('backend.branches_addresses') }}"
                                            data-validation-required-message="{{ trans('backend.branches_addresses') }}">
                                    </div>
                                </div>


                                <h5 class="mb-1 mt-2 mt-sm-0"><i
                                        class="feather icon-map-pin mr-25"></i>{{ trans('backend.compnay_info') }}</h5>

                                <div class="form-group">
                                    <div class="controls">
                                        <label>{{ trans('backend.main_product') }}</label>
                                        <input type="text" name="main_product" class="form-control"
                                            value="{{ $user->main_product}}"
                                            placeholder="{{ trans('backend.main_product') }}"
                                            data-validation-required-message="{{ trans('backend.main_product') }}">
                                    </div>
                                </div>






                                <div class="form-group">
                                    <div class="controls">
                                        <label>{{ trans('backend.brief_description') }} [ {{trans('backend.arabic') }} ]</label>
                                        <input type="text" name="brief_description_ar" class="form-control"
                                            value="{{ $user->brief_description_ar}}"
                                            placeholder="{{ trans('backend.brief_description') }}"
                                            data-validation-required-message="{{ trans('backend.brief_description') }}">
                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="controls">
                                        <label>{{ trans('backend.brief_description') }} [ {{trans('backend.english') }} ]</label>
                                        <input type="text" name="brief_description_en" class="form-control"
                                            value="{{ $user->brief_description_en}}"
                                            placeholder="{{ trans('backend.brief_description') }}"
                                            data-validation-required-message="{{ trans('backend.brief_description') }}">
                                    </div>
                                </div>



                                <div class="form-group">
                                    <div class="controls">
                                        <label>{{ trans('backend.partner_companies') }}</label>
                                        <input type="text" name="partner_companies" class="form-control"
                                            value="{{ $user->partner_companies}}"
                                            placeholder="{{ trans('backend.partner_companies') }}"
                                            data-validation-required-message="{{ trans('backend.partner_companies') }}">
                                    </div>
                                </div>




                            </div>
                            <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
                                <button type="submit" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1">{{ trans('backend.save') }}
                                     </button>
                                <button type="reset" class="btn btn-outline-warning">{{ trans('frontend.reset') }}</button>
                            </div>
                        </div>
                        {{ html()->closeModelForm() }}
                        <!-- users edit Info form ends -->
                    </div>
                    <div class="tab-pane" id="social" aria-labelledby="social-tab" role="tabpanel">
                        <!-- users edit socail form start -->

 {{ html()->modelForm($user->user, 'PATCH', route('admin.auth.user.updateContactInfo', $user->id))->class('form-horizontal')->attribute('enctype', 'multipart/form-data')->open() }}
                        <div class="row">
                            <div class="col-12 col-sm-6">

                                <fieldset>
                                    <label>Twitter</label>
                                    <div class="input-group mb-75">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text feather icon-twitter"
                                                id="basic-addon3"></span>
                                        </div>
                                        <input name="twitter_url" type="text" class="form-control"
                                            value="{{ $user->twitter_url}}"
                                            placeholder="https://www.twitter.com/" aria-describedby="basic-addon3">
                                    </div>

                                    <label>Facebook</label>
                                    <div class="input-group mb-75">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text feather icon-facebook"
                                                id="basic-addon4"></span>
                                        </div>
                                        <input name="facebook_url" type="text" class="form-control"
                                            value="{{ $user->facebook_url}}"
                                            placeholder="https://www.facebook.com/" aria-describedby="basic-addon4">
                                    </div>
                                    <label>Instagram</label>
                                    <div class="input-group mb-75">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text feather icon-instagram"
                                                id="basic-addon5"></span>
                                        </div>
                                        <input name="instagram_url" type="text" class="form-control"
                                            value="{{ $user->instagram_url}}"
                                            placeholder="https://www.instagram.com/" aria-describedby="basic-addon5">
                                    </div>
                                </fieldset>
                            </div>
                            <div class="col-12 col-sm-6">
                                <label>Linkedin</label>
                                <div class="input-group mb-75">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text feather icon-linkedin" id="basic-addon9"></span>
                                    </div>
                                    <input name="linkedin_url" type="text" class="form-control"
                                        value="{{ $user->linkedin_url}}"
                                        placeholder="https://www.linkedin.com/" aria-describedby="basic-addon9">
                                </div>

                            </div>
                            <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
                                <button type="submit" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1">{{ trans('backend.save') }}</button>
                                <button type="reset" class="btn btn-outline-warning">{{ trans('frontend.reset') }}</button>
                            </div>
                        </div>
                        {{ html()->closeModelForm() }}
                        <!-- users edit socail form ends -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- users edit ends -->


@endsection


@section('page-js')
<script src="{{ asset('backend/app-assets/js/scripts/pages/app-user.min.js') }}"></script>
<script src="{{ asset('backend/app-assets/js/scripts/navs/navs.min.js') }}"></script>

@endsection

