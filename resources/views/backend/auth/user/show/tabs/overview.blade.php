
              <div class="col-12">

                        <div class="btn-toolbar float-right" role="toolbar" aria-label="@lang('labels.general.toolbar_btn_groups')">
                            @if ($user->id !== auth()->id())
                            @switch($user->active)
                            @case(0)
                            <a href="{{ route('admin.auth.user.mark', [$user, 1,]) }}" class="btn btn-success ml-1" data-toggle="tooltip"><i
                                    class="feather icon-plus font-medium-5"></i>@lang('buttons.backend.access.users.activate')</a>
                            @break

                            @case(1)
                            <a href="{{ route('admin.auth.user.mark', [$user, 0]) }}" class="btn btn-success ml-1" data-toggle="tooltip"><i
                                    class="feather icon-plus font-medium-5"></i>@lang('buttons.backend.access.users.deactivate')</a>
                            @break
                            @endswitch
                            @endif
                        </div>
                    </div>
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


                        <div class="media mb-2">
                            <a class="mr-2 my-15" href="#">
                                <div class="form-group">
                                    <input readonly class="dropify"
                                        data-default-file="{{ asset('storage')}}/{{ $user->profile_image }}"
                                        data-allowed-file-extensions="png jpg jpeg" disabled name="profile_image">
                                </div>
                            </a>

                            <div class="media-body mt-100">
                                <h4 class="media-heading">{{ $user->full_name}}</h4>
                            </div>
                        </div>
                        <!-- users edit media object ends -->
                        <!-- users edit account form start -->

                        <div class="row">
                            <div class="col-12 col-sm-4">


                                <div class="form-group">
                                    <div class="controls">
                                        <label>{{ trans('backend.full_name') }} [ {{trans('backend.arabic') }} ]</label>
                                        <input readonly type="text" name="full_name_ar" class="form-control"
                                            placeholder="{{ trans('backend.full_name') }}"
                                            value="{{ $user->full_name_ar}}" required
                                            data-validation-required-message="This username field is required">
                                    </div>
                                </div>



                                <div class="form-group">
                                    <div class="controls">
                                        <label>{{ trans('backend.full_name') }} [ {{trans('backend.english') }} ]</label>
                                        <input readonly type="text" name="full_name_en" class="form-control"
                                            placeholder="{{ trans('backend.full_name') }}"
                                            value="{{ $user->full_name_en}}" required
                                            data-validation-required-message="This username field is required">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="controls">
                                        <label>{{ trans('backend.full_name') }} [ {{trans('backend.turkish') }} ]</label>
                                        <input readonly type="text" name="full_name_tr" class="form-control"
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
                                        <input readonly type="text" name="phone" class="form-control"
                                            placeholder="{{ trans('backend.phone') }}" value="{{ $user->phone}}"
                                            required data-validation-required-message="This username field is required">
                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="controls">
                                        <label>{{ trans('backend.email') }}</label>
                                        <input readonly type="text" name="email" class="form-control"
                                            placeholder="{{ trans('backend.email') }}" value="{{ $user->email}}"
                                            required data-validation-required-message="This username field is required">
                                    </div>
                                </div>



                                <div class="form-group">
                                    <div class="controls">
                                        <label>{{ trans('backend.gender') }}</label>

                                        <select disabled name="gender" class="form-control">
                                            <option  disabled @if ($user->gender == 0) selected @endif
                                                value="0">{{ trans('frontend.female') }}</option>
                                            <option disabled  @if ($user->gender == 1) selected @endif
                                                value="1">{{ trans('frontend.male') }}</option>
                                        </select>
                                    </div>
                                </div>

                            </div>


                            <div class="col-12 col-sm-4">

                                <div class="form-group">
                                    <div class="controls">
                                        <label>{{ trans('backend.country') }}</label>
                                        <input readonly type="text" name="country" class="form-control"
                                            placeholder="{{ trans('backend.country') }}" value="{{ $user->country}}"
                                            required data-validation-required-message="This username field is required">
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

                                        <select disabled  name="is_board" onchange="yesnoCheck(this);" class="form-control">
                                            <option disabled @if ($user->is_board == 1 ) selected @endif
                                                value="1">{{ trans('backend.yes') }}</option>
                                            <option disabled @if ($user->is_board == 0 ) selected
                                                @endif value="0">{{ trans('backend.no') }}</option>
                                        </select>
                                    </div>
                                </div>
                            </div>



                            @if ($user->is_board == 1)
                            <div class="form-group">
                                <div class="controls">
                                    <label>{{ trans('backend.position') }} [ {{trans('backend.arabic') }} ]</label>
                                    <input readonly type="text" name="position_ar" class="form-control"
                                        placeholder="{{ trans('backend.position') }}" value="{{ $user->position_ar}}">
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="controls">
                                    <label>{{ trans('backend.position') }} [ {{trans('backend.english') }} ]</label>
                                    <input readonly type="text" name="position_en" class="form-control"
                                        placeholder="{{ trans('backend.position') }}" value="{{ $user->position_en}}">
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="controls">
                                    <label>{{ trans('backend.position') }} [ {{trans('backend.turkish') }} ]</label>
                                    <input readonly type="text" name="position_tr" class="form-control"
                                        placeholder="{{ trans('backend.position') }}" value="{{ $user->position_tr}}">
                                </div>
                            </div>

                            @endif


                            </div>

                        </div>

                        <br>


                    <div class="tab-pane" id="information" aria-labelledby="information-tab" role="tabpanel">
                        <!-- users edit Info form start -->
                        <div class="row mt-1">
                            <div class="col-12 col-sm-6">
                                <div class="col-4 col-sm-4">
                                    <a class="mr-2 my-15" href="#">
                                        <div class="form-group">
                                            <input readonly type="file"  disabled name="company_logo" class="dropify"
                                                data-default-file="{{asset('storage')}}/{{  $user->company_logo}}"
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
                                                <label>{{ trans('backend.company_name') }} [ {{trans('backend.arabic') }} ]</label>
                                                <input readonly type="text" name="company_name_ar" class="form-control"
                                                    placeholder="{{ trans('backend.company_name') }}"
                                                    value="{{ $user->company_name_ar}}" required
                                                    data-validation-required-message="{{ trans('backend.company_name') }}">
                                            </div>
                                        </div>



                                        <div class="form-group">
                                            <div class="controls">
                                                <label>{{ trans('backend.company_name') }} [ {{trans('backend.english') }} ]</label>
                                                <input readonly type="text" name="company_name_en" class="form-control"
                                                    placeholder="{{ trans('backend.company_name') }}"
                                                    value="{{ $user->company_name_en}}" required
                                                    data-validation-required-message="{{ trans('backend.company_name') }}">
                                            </div>
                                        </div>




                                        <div class="form-group">
                                            <div class="controls">
                                                <label>{{ trans('backend.company_name') }} [ {{trans('backend.turkish') }} ]</label>
                                                <input readonly type="text" name="company_name_tr" class="form-control"
                                                    placeholder="{{ trans('backend. company_name') }}"
                                                    value="{{ $user->company_name_tr}}" required
                                                    data-validation-required-message="{{ trans('backend.company_name') }}">
                                            </div>
                                        </div>




                                        <div class="form-group">
                                            <div class="controls">
                                                <label>{{ trans('frontend.sicil_no') }}</label>
                                                <input readonly type="text" name="sicil_no" class="form-control"
                                                    placeholder="{{ trans('frontend.sicil_no') }}"
                                                    value="{{ $user->sicil_no}}" required
                                                    data-validation-required-message="{{ trans('frontend.sicil_no') }}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>{{ trans('backend.company_sectors') }}</label>
                                             @foreach ($user->sectors as $sector => $value)
                                                <li class="mt-0">{{    $user->sectors[$sector]->name }}</li>
                                                @endforeach
                                        </div>
                                        <div class="form-group">
                                            <label>{{ trans('backend.company_fields') }}</label>

                                            @foreach ($user->fields as $field => $value)
                                            <li class="mt-0">{{    $user->fields[$field]->name }}</li>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="controls">
                                        <label>{{ trans('backend.year_founded') }}</label>
                                        <input readonly name="year_founded" type="text" class="form-control"
                                            value="{{ $user->year_founded}}"
                                            placeholder="{{ trans('backend.year_founded') }}"
                                            data-validation-required-message="{{ trans('backend.year_founded') }}">
                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="controls">
                                        <label>{{ trans('backend.agency') }}</label>
                                        <input readonly name="agency" type="text" class="form-control" value="{{ $user->agency}}"
                                            placeholder="{{ trans('backend.agency') }}"
                                            data-validation-required-message="{{ trans('backend.agency') }}">
                                    </div>
                                </div>



                                <div class="form-group">
                                    <div class="controls">
                                        <label>{{ trans('backend.number_of_employee') }}</label>


                                           <p> {{$user->number_of_employee}}</p>

                                    </div>
                                </div>

                            </div>
                            <div class="col-12 col-sm-6">
                                <h5 class="mb-1 mt-2 mt-sm-0"><i
                                        class="feather icon-map-pin mr-25"></i>{{ trans('backend.address_info') }}</h5>


                                <div class="form-group">
                                    <div class="controls">
                                        <label>{{ trans('backend.main_location') }} [ {{trans('backend.arabic') }} ]</label>
                                        <input readonly name="main_location_ar" type="text" class="form-control"
                                            value="{{ $user->main_location_ar}}"
                                            placeholder="{{ trans('backend.main_location') }}"
                                            data-validation-required-message="{{ trans('backend.main_location') }}">
                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="controls">
                                        <label>{{ trans('backend.main_location') }} [ {{trans('backend.english') }} ]</label>
                                        <input readonly name="main_location_en" type="text" class="form-control"
                                            value="{{ $user->main_location_en}}"
                                            placeholder="{{ trans('backend.main_location') }}"
                                            data-validation-required-message="{{ trans('backend.main_location') }}">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="controls">
                                        <label>{{ trans('backend.main_location') }} [ {{trans('backend.turkish') }} ] </label>
                                        <input readonly name="main_location_tr" type="text" class="form-control"
                                            value="{{ $user->main_location_tr}}"
                                            placeholder="{{ trans('backend.main_location') }}"
                                            data-validation-required-message="{{ trans('backend.main_location') }}">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="controls">
                                        <label>{{ trans('backend.main_address') }} [ {{trans('backend.arabic') }} ]</label>
                                        <input readonly type="text" name="main_address_ar" class="form-control"
                                            value="{{ $user->main_address_ar}}"
                                            placeholder="{{ trans('backend.main_address') }}"
                                            data-validation-required-message="{{ trans('backend.main_address') }}">
                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="controls">
                                        <label>{{ trans('backend.main_address') }} [ {{trans('backend.english') }} ] </label>
                                        <input readonly type="text" name="main_address_en" class="form-control"
                                            value="{{ $user->main_address_en}}"
                                            placeholder="{{ trans('backend.main_address') }}"
                                            data-validation-required-message="{{ trans('backend.main_address') }}">
                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="controls">
                                        <label>{{ trans('backend.main_address') }} [ {{trans('backend.turkish') }} ]</label>
                                        <input readonly type="text" name="main_address_tr" class="form-control"
                                            value="{{ $user->main_address_tr}}"
                                            placeholder="{{ trans('backend.main_address') }}"
                                            data-validation-required-message="{{ trans('backend.main_address') }}">
                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="controls">
                                        <label>{{ trans('backend.branches_addresses') }}</label>
                                        <input readonly type="text" name="branches_addresses" class="form-control"
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
                                        <input readonly type="text" name="main_product" class="form-control"
                                            value="{{ $user->main_product}}"
                                            placeholder="{{ trans('backend.main_product') }}"
                                            data-validation-required-message="{{ trans('backend.main_product') }}">
                                    </div>
                                </div>






                                <div class="form-group">
                                    <div class="controls">
                                        <label>{{ trans('backend.brief_description') }} [ {{trans('backend.arabic') }} ]</label>
                                        <input readonly type="text" name="brief_description_ar" class="form-control"
                                            value="{{ $user->brief_description_ar}}"
                                            placeholder="{{ trans('backend.brief_description') }}"
                                            data-validation-required-message="{{ trans('backend.brief_description') }}">
                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="controls">
                                        <label>{{ trans('backend.brief_description') }} [ {{trans('backend.english') }} ]</label>
                                        <input readonly type="text" name="brief_description_en" class="form-control"
                                            value="{{ $user->brief_description_en}}"
                                            placeholder="{{ trans('backend.brief_description') }}"
                                            data-validation-required-message="{{ trans('backend.brief_description') }}">
                                    </div>
                                </div>



                                <div class="form-group">
                                    <div class="controls">
                                        <label>{{ trans('backend.partner_companies') }}</label>
                                        <input readonly type="text" name="partner_companies" class="form-control"
                                            value="{{ $user->partner_companies}}"
                                            placeholder="{{ trans('backend.partner_companies') }}"
                                            data-validation-required-message="{{ trans('backend.partner_companies') }}">
                                    </div>
                                </div>




                            </div>

                        </div>

                        <!-- users edit Info form ends -->
                    </div>
                    <div class="tab-pane" id="social" aria-labelledby="social-tab" role="tabpanel">
                        <!-- users edit socail form start -->

                         <div class="row">
                            <div class="col-12 col-sm-6">

                                <fieldset>
                                    <label>Twitter</label>
                                    <div class="input-group mb-75">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text feather icon-twitter"
                                                id="basic-addon3"></span>
                                        </div>
                                        <input readonly name="twitter_url" type="text" class="form-control"
                                            value="{{ $user->twitter_url}}" placeholder="https://www.twitter.com/"
                                            aria-describedby="basic-addon3">
                                    </div>

                                    <label>Facebook</label>
                                    <div class="input-group mb-75">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text feather icon-facebook"
                                                id="basic-addon4"></span>
                                        </div>
                                        <input readonly name="facebook_url" type="text" class="form-control"
                                            value="{{ $user->facebook_url}}" placeholder="https://www.facebook.com/"
                                            aria-describedby="basic-addon4">
                                    </div>
                                    <label>Instagram</label>
                                    <div class="input-group mb-75">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text feather icon-instagram"
                                                id="basic-addon5"></span>
                                        </div>
                                        <input readonly name="instagram_url" type="text" class="form-control"
                                            value="{{ $user->instagram_url}}" placeholder="https://www.instagram.com/"
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
                                    <input readonly name="linkedin_url" type="text" class="form-control"
                                        value="{{ $user->linkedin_url}}" placeholder="https://www.linkedin.com/"
                                        aria-describedby="basic-addon9">
                                </div>

                            </div>

                        </div>
                        </div>
</div>
<!-- users edit ends -->

