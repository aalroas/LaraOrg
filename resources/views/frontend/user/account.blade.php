@extends('frontend.user.layouts.app')




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
                                class="d-none d-sm-block">@lang('labels.frontend.user.profil')</span>
                        </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="account" aria-labelledby="account-tab" role="tabpanel">
                        <!-- users edit media object start -->


                        {{ html()->modelForm($logged_in_user, 'POST', route('frontend.user.profile.updatePersonalInfo'))->class('form-horizontal')->attribute('enctype', 'multipart/form-data')->open() }}
                        @method('PATCH')



                        <div class="media mb-2">
                            <a class="mr-2 my-15" href="#">
                                <div class="form-group">
                                    <input type="file" name="profile_image" class="dropify"
                                        data-default-file="{{ $logged_in_user->picture }}"
                                        data-allowed-file-extensions="png jpg jpeg">
                                </div>
                            </a>

                            <div class="media-body mt-100">
                                <h4 class="media-heading">{{$logged_in_user->full_name}}</h4>
                            </div>
                        </div>
                        <!-- users edit media object ends -->
                        <!-- users edit account form start -->

                        <div class="row">
                            <div class="col-12 col-sm-4">


                                <div class="form-group">
                                    <div class="controls">
                                        <label>{{ trans('backend.full_name') }} [ AR ]</label>
                                        <input type="text" name="full_name_ar" class="form-control"
                                            placeholder="{{ trans('backend.full_name') }}"
                                            value="{{$logged_in_user->full_name_ar}}" required
                                            data-validation-required-message="This username field is required">
                                    </div>
                                </div>



                                <div class="form-group">
                                    <div class="controls">
                                        <label>{{ trans('backend.full_name') }} [ EN ]</label>
                                        <input type="text" name="full_name_en" class="form-control"
                                            placeholder="{{ trans('backend.full_name') }}"
                                            value="{{$logged_in_user->full_name_en}}" required
                                            data-validation-required-message="This username field is required">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="controls">
                                        <label>{{ trans('backend.full_name') }} [ TR ]</label>
                                        <input type="text" name="full_name_tr" class="form-control"
                                            placeholder="{{ trans('backend.full_name') }}"
                                            value="{{$logged_in_user->full_name_tr}}" required
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
                                            value="{{$logged_in_user->phone}}" required
                                            data-validation-required-message="This username field is required">
                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="controls">
                                        <label>{{ trans('backend.email') }}</label>
                                        <input type="text" name="email" class="form-control"
                                            placeholder="{{ trans('backend.email') }}"
                                            value="{{$logged_in_user->email}}" required
                                            data-validation-required-message="This username field is required">
                                    </div>
                                </div>



                                <div class="form-group">
                                    <div class="controls">
                                        <label>{{ trans('backend.gender') }}</label>

                                        <select name="gender" class="form-control">
                                            <option @if ($logged_in_user->gender == 0) selected @endif
                                                value="0">{{ trans('backend.female') }}</option>
                                            <option @if ($logged_in_user->gender == 1) selected @endif
                                                value="1">{{ trans('backend.male') }}</option>
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
                                            value="{{$logged_in_user->country}}" required
                                            data-validation-required-message="This username field is required">
                                    </div>
                                </div>



                            </div>
                            <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
                                <button type="submit" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1">Save
                                    Changes</button>
                                <button type="reset" class="btn btn-outline-warning">Reset</button>
                            </div>




                        </div>
                        {{ html()->closeModelForm() }}
                        <br>

                        <form role="form" action="{{ route('frontend.auth.password.update') }}" method="post"
                            enctype="multipart/form-data" novalidate>
                            {{ csrf_field() }}
                            @method('PATCH')
                            <div class="col-12">
                                <div class="table-responsive border rounded px-1 ">
                                    <h6 class="border-bottom py-1 mx-1 mb-0 font-medium-2"><i
                                            class="feather icon-lock mr-50 "></i>{{ trans('backend.change_password') }}
                                    </h6>

                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                {{ html()->label(__('validation.attributes.frontend.old_password'))->for('old_password') }}

                                                {{ html()->password('old_password')
                                                ->class('form-control')
                                                ->placeholder(__('validation.attributes.frontend.old_password'))
                                                ->autofocus()
                                                ->required() }}
                                            </div>
                                            <!--form-group-->
                                        </div>
                                        <!--col-->
                                    </div>
                                    <!--row-->

                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                {{ html()->label(__('validation.attributes.frontend.password'))->for('password') }}

                                                {{ html()->password('password')
                                                ->class('form-control')
                                                ->placeholder(__('validation.attributes.frontend.password'))
                                                ->required() }}
                                            </div>
                                            <!--form-group-->
                                        </div>
                                        <!--col-->
                                    </div>
                                    <!--row-->

                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                {{ html()->label(__('validation.attributes.frontend.password_confirmation'))->for('password_confirmation') }}

                                                {{ html()->password('password_confirmation')
                                                ->class('form-control')
                                                ->placeholder(__('validation.attributes.frontend.password_confirmation'))
                                                ->required() }}
                                            </div>
                                            <!--form-group-->
                                        </div>
                                        <!--col-->
                                    </div>
                                    <!--row-->





                                </div>
                            </div>
                            <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
                                <button type="submit" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1">Save
                                    Changes</button>
                                <button type="reset" class="btn btn-outline-warning">Reset</button>
                            </div>

                        </form>
                        <!-- users edit account form ends -->
                    </div>
                    <div class="tab-pane" id="information" aria-labelledby="information-tab" role="tabpanel">
                        <!-- users edit Info form start -->

                        {{ html()->modelForm($logged_in_user, 'POST', route('frontend.user.profile.updateCompanyInfo'))->class('form-horizontal')->attribute('enctype', 'multipart/form-data')->open() }}
                        @method('PATCH')

                        <div class="row mt-1">
                            <div class="col-12 col-sm-6">
                                <div class="col-4 col-sm-4">
                                    <a class="mr-2 my-15" href="#">
                                        <div class="form-group">
                                            <input type="file" name="company_logo" class="dropify"
                                                data-default-file="{{$logged_in_user->company_logo}}"
                                                data-allowed-file-extensions="png jpg jpeg">
                                        </div>
                                    </a>

                                </div>
                                <h5 class="mb-1"><i
                                        class="feather icon-user mr-25"></i>{{ trans('backend.company_info') }}</h5>
                                <div class="row">
                                    <div class="col-12">



                                        <div class="form-group">
                                            <div class="controls">
                                                <label>{{ trans('backend.company_name_ar') }}</label>
                                                <input type="text" name="company_name_ar" class="form-control"
                                                    placeholder="{{ trans('backend.company_name_ar') }}"
                                                    value="{{$logged_in_user->company_name_ar}}" required
                                                    data-validation-required-message="{{ trans('backend.company_name_ar') }}">
                                            </div>
                                        </div>



                                        <div class="form-group">
                                            <div class="controls">
                                                <label>{{ trans('backend.company_name_en') }}</label>
                                                <input type="text" name="company_name_en" class="form-control"
                                                    placeholder="{{ trans('backend.company_name_en') }}"
                                                    value="{{$logged_in_user->company_name_en}}" required
                                                    data-validation-required-message="{{ trans('backend.company_name_en') }}">
                                            </div>
                                        </div>




                                        <div class="form-group">
                                            <div class="controls">
                                                <label>{{ trans('backend.company_name_tr') }}</label>
                                                <input type="text" name="company_name_tr" class="form-control"
                                                    placeholder="{{ trans('backend.company_name_tr') }}"
                                                    value="{{$logged_in_user->company_name_tr}}" required
                                                    data-validation-required-message="{{ trans('backend.company_name_tr') }}">
                                            </div>
                                        </div>



                                        <div class="form-group">
                                            <div class="controls">
                                                <label>{{ trans('backend.company_name_en') }}</label>
                                                <input type="text" name="company_name_en" class="form-control"
                                                    placeholder="{{ trans('backend.company_name_en') }}"
                                                    value="{{$logged_in_user->company_name_en}}" required
                                                    data-validation-required-message="{{ trans('backend.company_name_en') }}">
                                            </div>
                                        </div>



                                        <div class="form-group">
                                            <label>{{ trans('backend.company_sector') }}</label>

                                            <select name="sectors[]" class="select2 form-control" multiple="multiple">
                                                @foreach ($sectors as $sector)
                                                <option value="{{ $sector->id }}" @foreach ($logged_in_user->sectors as
                                                    $usersec)
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
                                                <option value="{{ $field->id }}" @foreach ($logged_in_user->fields as
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
                                        <input  name="year_founded" type="text" class="form-control"
                                            value="{{$logged_in_user->year_founded}}"
                                            placeholder="{{ trans('backend.year_founded') }}"
                                            data-validation-required-message="{{ trans('backend.year_founded') }}">
                                    </div>
                                </div>












                                <div class="form-group">
                                    <div class="controls">
                                        <label>{{ trans('backend.agency') }}</label>
                                        <input name="agency" type="text" class="form-control" value="{{$logged_in_user->agency}}"
                                            placeholder="{{ trans('backend.agency') }}"
                                            data-validation-required-message="{{ trans('backend.agency') }}">
                                    </div>
                                </div>



                                <div class="form-group">
                                    <div class="controls">
                                        <label>{{ trans('backend.number_of_employee') }}</label>

                                        <select name="number_of_employee" class="form-control">

                                            <option @if ($logged_in_user->number_of_employee == 1 ) selected @endif
                                                value="1">1 - 3</option>
                                            <option @if ($logged_in_user->number_of_employee ==  2 ) selected
                                                @endif value="2">3 - 10</option>
                                            <option @if ($logged_in_user->number_of_employee == 3  ) selected
                                                @endif value="3">10 - 50</option>

                                            <option @if ($logged_in_user->number_of_employee == 4 ) selected
                                                @endif value="4">50 - 500</option>
                                            <option @if ($logged_in_user->number_of_employee == 5  )
                                                selected @endif value="5">More than 500</option>

                                        </select><!-- End: .form-control -->

                                    </div>
                                </div>










                            </div>
                            <div class="col-12 col-sm-6">
                                <h5 class="mb-1 mt-2 mt-sm-0"><i class="feather icon-map-pin mr-25"></i>{{ trans('backend.adress_info') }}</h5>


                                <div class="form-group">
                                    <div class="controls">
                                        <label>{{ trans('backend.main_location_ar') }}</label>
                                        <input  name="main_location_ar" type="text" class="form-control" value="{{$logged_in_user->main_location_ar}}"
                                            placeholder="{{ trans('backend.main_location_ar') }}"
                                            data-validation-required-message="{{ trans('backend.main_location_ar') }}">
                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="controls">
                                        <label>{{ trans('backend.main_location_en') }}</label>
                                        <input  name="main_location_en" type="text" class="form-control" value="{{$logged_in_user->main_location_en}}"
                                            placeholder="{{ trans('backend.main_location_en') }}"
                                            data-validation-required-message="{{ trans('backend.main_location_en') }}">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="controls">
                                        <label>{{ trans('backend.main_location_tr') }}</label>
                                        <input  name="main_location_tr" type="text" class="form-control" value="{{$logged_in_user->main_location_tr}}"
                                            placeholder="{{ trans('backend.main_location_tr') }}"
                                            data-validation-required-message="{{ trans('backend.main_location_tr') }}">
                                    </div>
                                </div>

                              <div class="form-group">
                                <div class="controls">
                                    <label>{{ trans('backend.main_address_ar') }}</label>
                                    <input type="text"  name="main_address_ar" class="form-control" value="{{$logged_in_user->main_address_ar}}"
                                        placeholder="{{ trans('backend.main_address_ar') }}"
                                        data-validation-required-message="{{ trans('backend.main_address_ar') }}">
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="controls">
                                    <label>{{ trans('backend.main_address_en') }}</label>
                                    <input type="text" name="main_address_en" class="form-control" value="{{$logged_in_user->main_address_en}}"
                                        placeholder="{{ trans('backend.main_address_en') }}"
                                        data-validation-required-message="{{ trans('backend.main_address_en') }}">
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="controls">
                                    <label>{{ trans('backend.main_address_tr') }}</label>
                                    <input type="text"  name="main_address_tr" class="form-control" value="{{$logged_in_user->main_address_tr}}"
                                        placeholder="{{ trans('backend.main_address_tr') }}"
                                        data-validation-required-message="{{ trans('backend.main_address_tr') }}">
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="controls">
                                    <label>{{ trans('backend.branches_addresses') }}</label>
                                    <input type="text" name="branches_addresses" class="form-control" value="{{$logged_in_user->branches_addresses}}"
                                        placeholder="{{ trans('backend.branches_addresses') }}"
                                        data-validation-required-message="{{ trans('backend.branches_addresses') }}">
                                </div>
                            </div>


                            <h5 class="mb-1 mt-2 mt-sm-0"><i class="feather icon-map-pin mr-25"></i>{{ trans('backend.compnay_info') }}</h5>

                          <div class="form-group">
                            <div class="controls">
                                <label>{{ trans('backend.main_product') }}</label>
                                <input type="text" name="main_product" class="form-control" value="{{$logged_in_user->main_product}}"
                                    placeholder="{{ trans('backend.main_product') }}"
                                    data-validation-required-message="{{ trans('backend.main_product') }}">
                            </div>
                        </div>






                        <div class="form-group">
                            <div class="controls">
                                <label>{{ trans('backend.brief_description_ar') }}</label>
                                <input type="text"  name="brief_description_ar" class="form-control" value="{{$logged_in_user->brief_description_ar}}"
                                    placeholder="{{ trans('backend.brief_description_ar') }}"
                                    data-validation-required-message="{{ trans('backend.brief_description_ar') }}">
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="controls">
                                <label>{{ trans('backend.brief_description_en') }}</label>
                                <input type="text" name="brief_description_en" class="form-control" value="{{$logged_in_user->brief_description_en}}"
                                    placeholder="{{ trans('backend.brief_description_en') }}"
                                    data-validation-required-message="{{ trans('backend.brief_description_en') }}">
                            </div>
                        </div>



                        <div class="form-group">
                            <div class="controls">
                                <label>{{ trans('backend.partner_companies') }}</label>
                                <input type="text" name="partner_companies" class="form-control" value="{{$logged_in_user->partner_companies}}"
                                    placeholder="{{ trans('backend.partner_companies') }}"
                                    data-validation-required-message="{{ trans('backend.partner_companies') }}">
                            </div>
                        </div>




                            </div>
                            <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
                                <button type="submit" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1">Save
                                    Changes</button>
                                <button type="reset" class="btn btn-outline-warning">Reset</button>
                            </div>
                        </div>
                        {{ html()->closeModelForm() }}
                        <!-- users edit Info form ends -->
                    </div>
                    <div class="tab-pane" id="social" aria-labelledby="social-tab" role="tabpanel">
                        <!-- users edit socail form start -->

                            {{ html()->modelForm($logged_in_user, 'POST', route('frontend.user.profile.updateContactInfo'))->class('form-horizontal')->attribute('enctype', 'multipart/form-data')->open() }}
                                                    @method('PATCH')
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
                                                value="{{$logged_in_user->twitter_url}}"
                                                placeholder="https://www.twitter.com/" aria-describedby="basic-addon3">
                                        </div>

                                        <label>Facebook</label>
                                        <div class="input-group mb-75">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text feather icon-facebook"
                                                    id="basic-addon4"></span>
                                            </div>
                                            <input name="facebook_url" type="text" class="form-control"
                                                value="{{$logged_in_user->facebook_url}}"
                                                placeholder="https://www.facebook.com/" aria-describedby="basic-addon4">
                                        </div>
                                        <label>Instagram</label>
                                        <div class="input-group mb-75">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text feather icon-instagram"
                                                    id="basic-addon5"></span>
                                            </div>
                                            <input  name="instagram_url" type="text" class="form-control"
                                                value="{{$logged_in_user->instagram_url}}"
                                                placeholder="https://www.instagram.com/"
                                                aria-describedby="basic-addon5">
                                        </div>
                                    </fieldset>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <label>Linkedin</label>
                                    <div class="input-group mb-75">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text feather icon-linkedin" id="basic-addon9"></span>
                                        </div>
                                        <input name="linkedin_url" type="text" class="form-control" value="{{$logged_in_user->linkedin_url}}"
                                            placeholder="https://www.linkedin.com/" aria-describedby="basic-addon9">
                                    </div>

                                </div>
                                <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
                                    <button type="submit" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1">Save
                                        Changes</button>
                                    <button type="reset" class="btn btn-outline-warning">Reset</button>
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
