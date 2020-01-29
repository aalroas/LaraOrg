@extends('frontend.layouts.app')

@section('title', GeneralSiteSettings('site_title') . ' | ' . __('labels.frontend.auth.register_box_title'))

@section('head')
<!-- register -->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

<link rel="stylesheet" href="{{asset('backend/select_country/css/bootstrap-select-country.min.css') }}"
    type="text/css" />

<script src="{{asset('backend/select_country/js/bootstrap-select-country.min.js') }}"></script>
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
                            <ol class="breadcrumb text-center text-black mt-10">
                            <li><a href="{{route('frontend.index')}}">Home</a></li>
                                <li class="active text-theme-colored">{{trans('labels.frontend.auth.register_box_title')}}</li>
                            </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>


<section>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-push-3">



<form role="form" action="{{route('frontend.auth.register.post')}}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    <h4 class="border-bottom p-bottom-25 m-bottom-50 m-top-70">{{ trans('frontend.PersonalInformation') }}
    </h4>
                <div class="form-group">
                    <label>{{ trans('frontend.full_name') }} [AR]<span class="sup">*</span></label>
                    <input type="text" class="form-control" name="full_name_ar"
                        placeholder="{{ trans('frontend.full_name') }}   [AR]">
                </div><!-- ends: .form-group -->
                <div class="form-group">
                    <label>{{ trans('frontend.full_name') }} [EN]<span class="sup">*</span></label>
                    <input type="text" class="form-control" name="full_name_en"
                        placeholder="{{ trans('frontend.full_name') }}   [EN]">
                </div><!-- ends: .form-group -->

                <div class="form-group">
                    <label>{{ trans('frontend.email') }}<span class="sup">*</span></label>
                    <input type="email" class="form-control" name="email" placeholder="{{ trans('frontend.email') }}">
                </div><!-- ends: .form-group -->

                <div class="form-group">
                    <label>{{ trans('frontend.password') }}<span class="sup">*</span></label>
                    <input type="password" class="form-control" name="password"
                        placeholder="{{ trans('frontend.password') }}">
                </div><!-- ends: .form-group -->

                <div class="form-group">
                    <label>{{ trans('frontend.password_confirmation') }}<span class="sup">*</span></label>
                    <input type="password" name="password_confirmation" class="form-control"
                        placeholder="{{ trans('frontend.password_confirmation') }}">
                </div><!-- ends: .form-group -->




                <div class="form-group">
                    <label>{{ trans('frontend.phone') }}</label>
                    <input type="text" class="form-control" name="phone" placeholder="{{ trans('frontend.phone') }}">
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


                <h4 class="border-bottom p-bottom-25 m-bottom-50 m-top-70">{{ trans('frontend.Companyinformation') }}
                </h4>
                <label>{{ trans('frontend.company_name') }} [AR]<span class="sup">*</span></label>
                <div class="form-group">

                    <input type="text" class="form-control" name="company_name_ar"
                        placeholder="{{ trans('frontend.company_name') }}   [AR]">
                </div><!-- ends: .form-group -->
                <label>{{ trans('frontend.company_name') }} [EN]<span class="sup">*</span></label>
                <div class="form-group">

                    <input type="text" class="form-control" name="company_name_en"
                        placeholder="{{ trans('frontend.company_name') }}   [EN]">
                </div><!-- ends: .form-group -->
                <label>{{ trans('frontend.company_name') }} [TR]<span class="sup">*</span></label>
                <div class="form-group">

                    <input type="text" class="form-control" name="company_name_tr"
                        placeholder="{{ trans('frontend.company_name') }}   [TR]">
                </div><!-- ends: .form-group -->
                <label>{{ trans('frontend.SelectCompanysector') }}</label>
                <div class="form-group">


                    <select class="select2_tagged form-control" name="sectors[]">


                        @foreach ($sectors as $sector)
                            <option value="{{ $sector->id }}"> {{ $sector->name }} </option>
                            @endforeach


                    </select><!-- End: .form-control -->

                </div><!-- ends: .form-group -->
                <label>{{ trans('frontend.SelectCompanyFields') }}</label>
                <div class="form-group">

                    <select class="select2_tagged form-control" name="fields[]">
               @foreach ($fields as $field)
                <option value="{{ $field->id }}"> {{ $field->name }} </option>
                @endforeach
                    </select><!-- End: .form-control -->

                </div><!-- ends: .form-group -->
                <label>{{ trans('frontend.YearFounded') }}</label>
                <div class="form-group">

                    <input name="year_founded" type="date" class="form-control">



                </div><!-- ends: .form-group -->

                <label>{{ trans('frontend.country') }}</label>
                <div class="form-group">

                    <select  name="country" class="selectpicker countrypicker form-control" data-flag="false"> </select>
                    <script>
                        $('.countrypicker').countrypicker();
                    </script>
                </div><!-- ends: .form-group -->


                <label>{{ trans('frontend.MaincompanyLocation') }} [ AR ]</label>
                <div class="form-group">

                    <input type="text" name="main_location_ar" class="form-control"
                        placeholder="{{ trans('frontend.MaincompanyLocation') }}  [ AR ]">
                </div><!-- ends: .form-group -->
                <label>{{ trans('frontend.MaincompanyLocation') }} [ EN ]</label>
                <div class="form-group">

                    <input type="text" name="main_location_en" class="form-control"
                        placeholder="{{ trans('frontend.MaincompanyLocation') }}  [ EN ]">
                </div><!-- ends: .form-group -->
                <label>{{ trans('frontend.MaincompanyLocation') }} [ TR ]</label>
                <div class="form-group">

                    <input type="text" name="main_location_tr" class="form-control"
                        placeholder="{{ trans('frontend.MaincompanyLocation') }}  [ TR ]">
                </div><!-- ends: .form-group -->




                <label>{{ trans('frontend.Doyouhaveanyagency?pleasementionthem:') }}</label>
                <div class="form-group">
                    <textarea name="agency" id="agency" class="form-control" cols="20" rows="3"></textarea>
                </div><!-- ends: .form-group -->



                <label>{{ trans('frontend.Pleaseselecthenumberofyourcompanyemployee') }}</label>
                <div class="form-group">


                    <select name="number_of_employee" class="form-control">

                        <option value="1">1 - 3</option>
                        <option value="2">3 - 10</option>
                        <option value="3">10 - 50</option>
                        <option value="4">50 - 500</option>
                        <option value="5">More than 500</option>

                    </select><!-- End: .form-control -->

                </div><!-- ends: .form-group -->



                <label>{{ trans('frontend.Mainaddress:') }} [ AR ]</label>
                <div class="form-group">
                    <textarea name="main_address_ar" id="main_address_ar" class="form-control" cols="20"
                        rows="3"></textarea>
                </div><!-- ends: .form-group -->

                <label>{{ trans('frontend.Mainaddress:') }} [ EN ]</label>
                <div class="form-group">
                    <textarea name="main_address_en" id="main_address_en" class="form-control" cols="20"
                        rows="3"></textarea>
                </div><!-- ends: .form-group -->

                <label>{{ trans('frontend.Mainaddress:') }} [ TR ]</label>
                <div class="form-group">
                    <textarea name="main_address_tr" id="main_address_tr" class="form-control" cols="20"
                        rows="3"></textarea>
                </div><!-- ends: .form-group -->





                <label>{{ trans('frontend.BranchesAddresses:') }}</label>
                <div class="form-group">
                    <textarea name="branches_addresses" id="branches_addresses" class="form-control" cols="20"
                        rows="3"></textarea>
                </div><!-- ends: .form-group -->





                <label>{{ trans('frontend.Mainproduct:') }}</label>
                <div class="form-group">
                    <textarea name="main_product" id="main_product" class="form-control" cols="20" rows="3"></textarea>
                </div><!-- ends: .form-group -->





                <label>{{ trans('frontend.BriefDescriptionaboutthecompany') }} [ AR ]</label>
                <div class="form-group">
                    <textarea name="brief_description_ar" id="brief_description_ar" class="form-control" cols="20"
                        rows="3"></textarea>
                </div><!-- ends: .form-group -->

                <label>{{ trans('frontend.BriefDescriptionaboutthecompany') }} [ EN ]</label>
                <div class="form-group">
                    <textarea name="brief_description_en" id="brief_description_en" class="form-control" cols="20"
                        rows="3"></textarea>
                </div><!-- ends: .form-group -->

                <label>{{ trans('frontend.BriefDescriptionaboutthecompany') }} [ TR ]</label>
                <div class="form-group">
                    <textarea name="brief_description_tr" id="brief_description_tr" class="form-control" cols="20"
                        rows="3"></textarea>
                </div><!-- ends: .form-group -->





                <label>{{ trans('frontend.partner_companies:') }}</label>
                <div class="form-group">
                    <textarea name="partner_companies" id="partner_companies" class="form-control" cols="20"
                        rows="3"></textarea>
                </div><!-- ends: .form-group -->




                <label>{{ trans('frontend.CompanyLogo') }} </label>

                <div class="form-group">

                    <div class="custom-photo-upload1">
                        <input type="file" name="company_logo" class="custom-upload1">
                        <div class="custom-upload-box d-flex">
                            <div class="image-box">

                                <span><i class="la la-plus"></i>
                                    {{ trans('frontend.AddImage') }}</span>
                            </div>

                        </div>
                    </div>
                </div><!-- ends: .form-group -->

                <label>{{ trans('frontend.ProfileImage') }} </label>
                <div class="form-group">

                    <div class="custom-photo-upload2">
                        <input type="file" name="profile_image" class="custom-upload2">
                        <div class="custom-upload-box d-flex">
                            <div class="image-box">

                                <span><i class="la la-plus"></i>
                                    {{ trans('frontend.AddImage') }}</span>
                            </div>

                        </div>
                    </div>
                </div><!-- ends: .form-group -->



                <h4 class="border-bottom p-bottom-25 m-bottom-50 m-top-70">{{ trans('frontend.SocialProfiles') }} </h4>

                <label>{{ trans('frontend.facebook_url') }} </label>
                <div class="form-group">

                    <input type="text" name="facebook_url" class="form-control"
                        placeholder="{{ trans('frontend.facebook_url') }}">
                </div><!-- ends: .form-group -->
                <label>{{ trans('frontend.instagram_url') }} </label>
                <div class="form-group">

                    <input type="text" name="instagram_url" class="form-control"
                        placeholder="{{ trans('frontend.instagram_url') }} ">
                </div><!-- ends: .form-group -->
                <label>{{ trans('frontend.twitter_url') }} </label>
                <div class="form-group">
                    <input type="text" name="twitter_url" class="form-control"
                        placeholder="{{ trans('frontend.twitter_url') }}">
                </div><!-- ends: .form-group -->


                <label>{{ trans('frontend.linkedin_url') }} </label>
                <div class="form-group">
                    <input type="text" name="linkedin_url" class="form-control"
                        placeholder="{{ trans('frontend.linkedin_url') }}">
                </div><!-- ends: .form-group -->

                <div class="custom-control custom-checkbox checkbox-secondary">
                    <input   type="checkbox" class="custom-control-input" id="customCheck3" required>
                    <label class="custom-control-label"
                        for="customCheck3">{{ trans('frontend.Iagreewiththealladditional') }} <a
                            href="#">{{ trans('frontend.TermsandConditions') }}</a></label>
                </div>


                <div class="btns m-top-50">
<button type="submit" class="btn btn-primary m-right-25">{{ trans('frontend.ApplyNow') }}</button>



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
