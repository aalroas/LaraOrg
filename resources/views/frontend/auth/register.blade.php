@extends('frontend.layouts.app')

@section('title', GeneralSiteSettings('site_title') . ' | ' . __('labels.frontend.auth.register_box_title'))
@section('head')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<link rel="stylesheet" href="{{asset('frontend/c_build/css/countrySelect.css')}}">
<link rel="stylesheet" href="{{asset('frontend/c_build/css/demo.css')}}">
<link rel="stylesheet" href="{{asset('backend/dropify/css/dropify.min.css') }}">
@show
@section('content')
<!-- Section: inner-header -->
    <section class="inner-header divider layer-overlay overlay-dark" data-bg-img="{{asset('frontend/images/bg/bg6.jpg')}}">
        <div class="container pt-10 pb-10">
            <!-- Section Content -->
            <div class="section-content">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h3 class="font-28 text-white">{{trans('labels.frontend.auth.register_box_title')}}</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>


<section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">



<form id="register-form" role="form" action="{{route('frontend.auth.register.post')}}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    <h4 class="border-bottom p-bottom-25 m-bottom-50 m-top-70">{{ trans('frontend.personal_information') }}
    </h4>
                <div class="form-group">
                    <label>{{ trans('frontend.full_name') }} [ {{trans('backend.arabic') }} ]<span class="sup" style="color:red;">*</span></label>
                    <input type="text" class="form-control" name="full_name_ar"
                        placeholder="{{ trans('frontend.full_name') }}   [ {{trans('backend.arabic') }} ]" required="required" aria-required="true">
                </div><!-- ends: .form-group -->
                <div class="form-group">
                    <label>{{ trans('frontend.full_name') }} [ {{trans('backend.english') }} ]<span class="sup" style="color:red;">*</span></label>
                    <input type="text" class="form-control" name="full_name_en"
                        placeholder="{{ trans('frontend.full_name') }}   [ {{trans('backend.english') }} ]">
                </div><!-- ends: .form-group -->

                <div class="form-group">
                    <label>{{ trans('frontend.email') }}<span class="sup" style="color:red;">*</span></label>
                    <input type="email" class="form-control" name="email" placeholder="{{ trans('frontend.email') }}" required="required" aria-required="true">
                </div><!-- ends: .form-group -->

                <div class="form-group">
                    <label>{{ trans('frontend.password') }}<span class="sup" style="color:red;">*</span></label>
                    <input type="password" id="password" class="form-control" name="password"
                        placeholder="{{ trans('frontend.password') }}" required="required" aria-required="true">
                </div><!-- ends: .form-group -->

                <div class="form-group">

                    <label>{{ trans('frontend.password_confirmation') }}<span class="sup" style="color:red;">*</span></label>
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
                    <label>{{ trans('frontend.phone') }}<span class="sup" style="color:red;">*</span></label>
                    <input type="text" class="form-control" name="phone" placeholder="{{ trans('frontend.phone') }}" required="required" aria-required="true" >
                </div><!-- ends: .form-group -->


                <div class="form-group">
                    <label>{{ trans('frontend.gender') }}<span class="sup" style="color:red;">*</span></label>
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

                <label>{{ trans('frontend.company_name') }} [ {{trans('backend.arabic') }} ]<span class="sup" style="color:red;">*</span></label>
                <div class="form-group">

                    <input type="text" class="form-control" name="company_name_ar"
                        placeholder="{{ trans('frontend.company_name') }}   [ {{trans('backend.arabic') }} ]" required="required" aria-required="true">
                </div><!-- ends: .form-group -->
                <label>{{ trans('frontend.company_name') }} [ {{trans('backend.english') }} ]<span class="sup" style="color:red;">*</span></label>
                <div class="form-group">

                    <input type="text" class="form-control" name="company_name_en"
                        placeholder="{{ trans('frontend.company_name') }}   [ {{trans('backend.english') }} ]">
                </div><!-- ends: .form-group -->
                <label>{{ trans('frontend.company_name') }} [ {{trans('backend.turkish')}} ]<span class="sup" style="color:red;">*</span></label>
                <div class="form-group">

                    <input type="text" class="form-control" name="company_name_tr"
                        placeholder="{{ trans('frontend.company_name') }}   [ {{trans('backend.turkish')}} ]">
                </div><!-- ends: .form-group -->

                <label>{{ trans('frontend.sicil_no') }}<span class="sup" style="color:red;">*</span></label>
                <div class="form-group">

                    <input type="text" class="form-control" name="sicil_no"
                        placeholder="{{ trans('frontend.sicil_no') }}">
                </div><!-- ends: .form-group -->


                <label>{{ trans('frontend.select_company_sector') }}</label>
                <div class="form-group">


                    <select   class="select2 form-control" multiple="multiple" required="required" aria-required="true"  name="sectors[]">


                        @foreach ($sectors as $sector)
                            <option value="{{ $sector->id }}"> {{ $sector->name }} </option>
                            @endforeach


                    </select><!-- End: .form-control -->

                </div><!-- ends: .form-group -->
                <label>{{ trans('frontend.select_company_fields') }}</label>
                <div class="form-group">

                    <select class="select2 form-control"  multiple="multiple"  required="required" aria-required="true" name="fields[]">

               @foreach ($fields as $field)
                <option value="{{ $field->id }}"> {{ $field->name }} </option>
                @endforeach
                    </select><!-- End: .form-control -->

                </div><!-- ends: .form-group -->
                <label>{{ trans('frontend.year_founded') }}<span class="sup" style="color:red;">*</span></label>
                <div class="form-group">

                    <input name="year_founded" type="date" class="form-control" required="required" aria-required="true">



                </div><!-- ends: .form-group -->

                <label>{{ trans('frontend.country') }}</label>


                <div class="form-control">

                    <input      autocomplete="off"   id="country_selector" type="text">
                    <label     for="country_selector" style="display:none;"></label>

                </div>

                <div class="form-control" style="display:none;">
                    <input    autocomplete="off" type="text" id="country_selector_code"  data-countrycodeinput="55"
                        readonly="readonly" placeholder="{{ trans('frontend.country') }}" />
                    <label    readonly="readonly" for="country_selector_code"></label>
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



                <label>{{ trans('frontend.main_company_location') }} [ {{trans('backend.arabic') }} ] <span class="sup" style="color:red;">*</span> </label>
                <div class="form-group">

                    <input type="text" name="main_location_ar" class="form-control"
                        placeholder="{{ trans('frontend.main_company_location') }}  [ {{trans('backend.arabic') }} ]" required="required" aria-required="true">
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
                    <textarea name="agency" id="agency" class="form-control" cols="20" rows="3"></textarea>
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



                <label>{{ trans('frontend.main_address') }} [ {{trans('backend.arabic') }} ]  <span class="sup" style="color:red;">*</span> </label>
                <div class="form-group">
                    <textarea name="main_address_ar" id="main_address_ar" class="form-control" cols="20"
                        rows="3" required="required" aria-required="true"></textarea>
                </div><!-- ends: .form-group -->

                <label>{{ trans('frontend.main_address') }} [ {{trans('backend.english') }} ]</label>
                <div class="form-group">
                    <textarea name="main_address_en" id="main_address_en" class="form-control" cols="20"
                        rows="3"></textarea>
                </div><!-- ends: .form-group -->

                <label>{{ trans('frontend.main_address') }} [ {{trans('backend.turkish') }} ]</label>
                <div class="form-group">
                    <textarea name="main_address_tr" id="main_address_tr" class="form-control" cols="20"
                        rows="3"></textarea>
                </div><!-- ends: .form-group -->





                <label>{{ trans('frontend.branches_addresses') }}</label>
                <div class="form-group">
                    <textarea name="branches_addresses" id="branches_addresses" class="form-control" cols="20"
                        rows="3"></textarea>
                </div><!-- ends: .form-group -->





                <label>{{ trans('frontend.main_product') }}</label>
                <div class="form-group">
                    <textarea name="main_product" id="main_product" class="form-control" cols="20" rows="3"></textarea>
                </div><!-- ends: .form-group -->





                <label>{{ trans('frontend.brief_description_about_the_company') }} [ {{trans('backend.arabic') }} ]</label>
                <div class="form-group">
                    <textarea name="brief_description_ar" id="brief_description_ar" class="form-control" cols="20"
                        rows="3"></textarea>
                </div><!-- ends: .form-group -->

                <label>{{ trans('frontend.brief_description_about_the_company') }} [ {{trans('backend.english') }} ]</label>
                <div class="form-group">
                    <textarea name="brief_description_en" id="brief_description_en" class="form-control" cols="20"
                        rows="3"></textarea>
                </div><!-- ends: .form-group -->

                <label>{{ trans('frontend.brief_description_about_the_company') }} [ {{trans('backend.turkish') }} ]</label>
                <div class="form-group">
                    <textarea name="brief_description_tr" id="brief_description_tr" class="form-control" cols="20"
                        rows="3"></textarea>
                </div><!-- ends: .form-group -->





                <label>{{ trans('frontend.partner_companies') }}</label>
                <div class="form-group">
                    <textarea name="partner_companies" id="partner_companies" class="form-control" cols="20"
                        rows="3"></textarea>
                </div><!-- ends: .form-group -->



<br>
<br>
<div class="row">
<div class="col-md-6">
    <label for="{{trans('frontend.profile_image')}}">{{trans('frontend.profile_image')}} <span class="sup" style="color:red;">*</span></label>
<div class="form-group">
    <input type="file" name="profile_image" class="dropify" data-default-file=""
        data-allowed-file-extensions="png jpg jpeg" required="required" aria-required="true" >
</div>
</div>
<div class="col-md-6">

    <label for="{{trans('frontend.company_logo')}}">{{trans('frontend.company_logo')}} <span class="sup" style="color:red;">*</span></label>
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

                    <input type="text" name="facebook_url" class="form-control"
                        placeholder="{{ trans('frontend.facebook') }}">
                </div><!-- ends: .form-group -->
                <label>{{ trans('frontend.instagram') }} </label>
                <div class="form-group">

                    <input type="text" name="instagram_url" class="form-control"
                        placeholder="{{ trans('frontend.instagram') }} ">
                </div><!-- ends: .form-group -->
                <label>{{ trans('frontend.twitter') }} </label>
                <div class="form-group">
                    <input type="text" name="twitter_url" class="form-control"
                        placeholder="{{ trans('frontend.twitter') }}">
                </div><!-- ends: .form-group -->


                <label>{{ trans('frontend.linkedin') }} </label>
                <div class="form-group">
                    <input type="text" name="linkedin_url" class="form-control"
                        placeholder="{{ trans('frontend.linkedin') }}">
                </div><!-- ends: .form-group -->

<br>
                <div class="custom-control custom-checkbox checkbox-secondary">
                    <input   type="checkbox" class="custom-control-input" id="customCheck3" required="required" aria-required="true">
                    <label class="custom-control-label"
                        for="customCheck3">{{ trans('frontend.i_agree_with_the_all_additional') }}
                <a style="color:red"   data-toggle="modal" data-target="#myModal"  >{{ trans('frontend.membership_conditions') }}</a>
                        </label>
                </div>






                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                        aria-hidden="true">&times;</span></button>
                                <h4 style="color:red" class="modal-title" id="myModalLabel">{{ trans('frontend.membership_conditions') }}</h4>
                            </div>
                            <div class="modal-body">
                               <p style="padding: 20px;">
                                    {!! trans('frontend.membership_conditions_text') !!}
                                </p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">{{ trans('frontend.close') }}</button>
                            </div>
                        </div>
                    </div>
                </div>



<br>


                <div class="btns m-top-50">

                   <button type="submit" class="btn btn-primary m-right-25">{{ trans('frontend.apply_now') }}</button>
                </div>
              </form>
            </div>
        </div>
        </div>
        </section>






@endsection




@push('after-scripts')
@if(config('access.captcha.registration'))
@captchaScripts
@endif
@endpush
