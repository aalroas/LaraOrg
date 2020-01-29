@extends('backend.layouts.app')
@section('content')


<section id="basic-input">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">{{ trans('backend.site_settings') }}</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <div class="row">

<form role="form" action="{{ route('admin.setting.UpdateSiteInfo') }}" method="post"
                    enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="row clealfix">
                        <div class="col-sm-4">
                            <div class="card">
                                <div class="header">
                                    <h2>{{ trans('backend.logo') }} [ AR ]</h2>
                                </div>
                                <div class="body">

                                    <input type="file" class="dropify" data-default-file="{{ URL::to('uploads/settings', $Setting->site_logo_ar) }}"
                                        data-allowed-file-extensions="png jpg jpeg" name="site_logo_ar">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card">
                                <div class="header">
                                    <h2>{{ trans('backend.logo') }} [ EN ]</h2>
                                </div>
                                <div class="body">

                                    <input type="file" class="dropify" data-default-file="{{ URL::to('uploads/settings', $Setting->site_logo_tr) }}"
                                        data-allowed-file-extensions="png jpg jpeg" name="site_logo_en">
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="card">
                                <div class="header">
                                    <h2>{{ trans('backend.logo') }} [ TR ]</h2>
                                </div>
                                <div class="body">

                                    <input type="file" class="dropify" data-default-file="{{ URL::to('uploads/settings', $Setting->site_logo_tr) }}"
                                        data-allowed-file-extensions="png jpg jpeg" name="site_logo_tr">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row clealfix">
                        <div class="col-sm-4">
                            <div class="card">
                                <div class="header">
                                    <h2>{{ trans('backend.icon') }} [ AR ]</h2>
                                </div>
                                <div class="body">

                                    <input type="file" class="dropify" data-default-file="{{ URL::to('uploads/settings', $Setting->site_icon_ar) }}"
                                        data-allowed-file-extensions="png jpg jpeg" name="site_icon_ar">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card">
                                <div class="header">
                                    <h2>{{ trans('backend.icon') }} [ EN ]</h2>
                                </div>
                                <div class="body">

                                    <input type="file" class="dropify" data-default-file="{{ URL::to('uploads/settings', $Setting->site_icon_en) }}"
                                        data-allowed-file-extensions="png jpg jpeg" name="site_icon_en">
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="card">
                                <div class="header">
                                    <h2>{{ trans('backend.icon') }} [ TR ]</h2>
                                </div>
                                <div class="body">

                                    <input type="file" class="dropify" data-default-file="{{ URL::to('uploads/settings', $Setting->site_icon_tr) }}"
                                        data-allowed-file-extensions="png jpg jpeg" name="site_icon_tr">
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row clealfix">
                        <div class="col-sm-4">
                            <div class="card">
                                <div class="header">
                                    <h2>{{ trans('backend.site_title') }} [ AR ]</h2>
                                </div>
                                <div class="body">
                             <input type="text" class="form-control" name="site_title_ar" value="{{   $Setting->site_title_ar }}"   aria-required="true">
                                </div>
                            </div>
                        </div>
                       <div class="col-sm-4">
                            <div class="card">
                                <div class="header">
                                    <h2>{{ trans('backend.site_title') }} [ EN ]</h2>
                                </div>
                                <div class="body">

                                <input type="text" class="form-control" name="site_title_en"  value="{{   $Setting->site_title_en }}"  aria-required="true">
                                </div>
                            </div>
                        </div>

                       <div class="col-sm-4">
                            <div class="card">
                                <div class="header">
                                    <h2>{{ trans('backend.site_title') }} [ TR ]</h2>
                                </div>
                                <div class="body">
                         <input type="text" class="form-control" name="site_title_tr"  value="{{   $Setting->site_title_tr }}"  aria-required="true">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row clealfix">
                        <div class="col-sm-4">
                            <div class="card">
                                <div class="header">
                                    <h2>{{ trans('backend.site_url') }}</h2>
                                </div>
                                <div class="body">
                                    <input type="text" class="form-control" name="site_url" value="{{   $Setting->site_url }}"
                                        aria-required="true">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card">
                                <div class="header">
                                    <h2>{{ trans('backend.site_email') }}</h2>
                                </div>
                                <div class="body">

                                    <input type="text" class="form-control" name="site_email" value="{{   $Setting->site_email }}"
                                        aria-required="true">
                                </div>
                            </div>
                        </div>


                    </div>

<div class="row clealfix">
    <div class="col-sm-4">
        <div class="card">
            <div class="header">
                <h2>{{ trans('backend.site_meta_description') }} [ AR ]</h2>
            </div>
            <div class="body">
                <textarea   type="text" class="form-control" name="site_meta_description_ar" >{{   $Setting->site_meta_description_ar }}
                    </textarea>
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="card">
            <div class="header">
                <h2>{{ trans('backend.site_meta_description') }} [ EN ]</h2>
            </div>
            <div class="body">

                <textarea   type="text" class="form-control" name="site_meta_description_en" >{{   $Setting->site_meta_description_en }}
                    </textarea>
            </div>
        </div>
    </div>

    <div class="col-sm-4">
        <div class="card">
            <div class="header">
                <h2>{{ trans('backend.site_meta_description') }} [ TR ]</h2>
            </div>
            <div class="body">

                <textarea   type="text" class="form-control" name="site_meta_description_tr" >{{   $Setting->site_meta_description_tr }}
                    </textarea>
            </div>
        </div>
    </div>
</div>

<div class="row clealfix">
    <div class="col-sm-4">
        <div class="card">
            <div class="header">
                <h2>{{ trans('backend.site_meta_keywords') }} [ AR ]</h2>
            </div>
            <div class="body">
                <textarea  type="text" class="form-control" name="site_meta_keywords_ar">{{   $Setting->site_meta_keywords_ar }}
                    </textarea>
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="card">
            <div class="header">
                <h2>{{ trans('backend.site_meta_keywords') }} [ EN ]</h2>
            </div>
            <div class="body">

                <textarea  type="text" class="form-control" name="site_meta_keywords_en">{{   $Setting->site_meta_keywords_en }}
                    </textarea>
            </div>
        </div>
    </div>

    <div class="col-sm-4">
        <div class="card">
            <div class="header">
                <h2>{{ trans('backend.site_meta_keywords') }} [ TR ]</h2>
            </div>
            <div class="body">

                <textarea  type="text" class="form-control" name="site_meta_keywords_tr">{{   $Setting->site_meta_keywords_tr }}
                    </textarea>
            </div>
        </div>
    </div>
</div>
<div class="row clealfix">
    <div class="col-sm-4">
        <div class="card">
            <div class="header">
                <h2>{{ trans('backend.copy_right') }} [ AR ]</h2>
            </div>
            <div class="body">
                <input type="text" class="form-control" name="copy_right_ar" value="{{   $Setting->copy_right_ar }}"
                    aria-required="true">
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="card">
            <div class="header">
                <h2>{{ trans('backend.copy_right') }} [ EN ]</h2>
            </div>
            <div class="body">

                <input type="text" class="form-control" name="copy_right_en" value="{{   $Setting->copy_right_en }}"
                    aria-required="true">
            </div>
        </div>
    </div>

    <div class="col-sm-4">
        <div class="card">
            <div class="header">
                <h2>{{ trans('backend.copy_right') }} [ TR ]</h2>
            </div>
            <div class="body">
                <input type="text" class="form-control" name="copy_right_tr" value="{{   $Setting->copy_right_tr }}"
                    aria-required="true">
            </div>
        </div>
    </div>
</div>

<div class="row clealfix">
    <div class="col-sm-4">
        <div class="card">
            <div class="header">
                <h2>{{ trans('backend.site_address') }} [ AR ]</h2>
            </div>
            <div class="body">
                <input type="text" class="form-control" name="site_address_ar" value="{{   $Setting->site_address_ar }}"
                    aria-required="true">
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="card">
            <div class="header">
                <h2>{{ trans('backend.site_address') }} [ EN ]</h2>
            </div>
            <div class="body">

                <input type="text" class="form-control" name="site_address_en" value="{{   $Setting->site_address_en }}"
                    aria-required="true">
            </div>
        </div>
    </div>

    <div class="col-sm-4">
        <div class="card">
            <div class="header">
                <h2>{{ trans('backend.site_address') }} [ TR ]</h2>
            </div>
            <div class="body">
                <input type="text" class="form-control" name="site_address_tr" value="{{   $Setting->site_address_tr }}"
                    aria-required="true">
            </div>
        </div>
    </div>
</div>

<div class="row clealfix">
    <div class="col-sm-4">
        <div class="card">
            <div class="header">
                <h2>{{ trans('backend.site_mobile') }} </h2>
            </div>
            <div class="body">
                <input type="text" class="form-control" name="site_mobile" value="{{   $Setting->site_mobile }}"
                    aria-required="true">
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="card">
            <div class="header">
                <h2>{{ trans('backend.site_phone') }} </h2>
            </div>
            <div class="body">

                <input type="text" class="form-control" name="site_phone" value="{{   $Setting->site_phone }}"
                    aria-required="true">
            </div>
        </div>
    </div>

    <div class="col-sm-4">
        <div class="card">
            <div class="header">
                <h2>{{ trans('backend.site_fax') }}</h2>
            </div>
            <div class="body">
                <input type="text" class="form-control" name="site_fax" value="{{   $Setting->site_fax }}"
                    aria-required="true">
            </div>
        </div>
    </div>
</div>



<div class="row clealfix">
    <div class="col-sm-4">
        <div class="card">
            <div class="header">
                <h2>{{ trans('backend.site_whatsapp_url') }} </h2>
            </div>
            <div class="body">
                <input type="text" class="form-control" name="site_whatsapp_url" value="{{   $Setting->site_whatsapp_url }}"
                    aria-required="true">
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="card">
            <div class="header">
                <h2>{{ trans('backend.site_instagram_url') }} </h2>
            </div>
            <div class="body">

                <input type="text" class="form-control" name="site_instagram_url" value="{{   $Setting->site_instagram_url }}"
                    aria-required="true">
            </div>
        </div>
    </div>

    <div class="col-sm-4">
        <div class="card">
            <div class="header">
                <h2>{{ trans('backend.site_facebook_url') }}</h2>
            </div>
            <div class="body">
                <input type="text" class="form-control" name="site_facebook_url" value="{{   $Setting->site_facebook_url }}"
                    aria-required="true">
            </div>
        </div>
    </div>
</div>


<div class="row clealfix">
    <div class="col-sm-4">
        <div class="card">
            <div class="header">
                <h2>{{ trans('backend.site_twitter_url') }} </h2>
            </div>
            <div class="body">
                <input type="text" class="form-control" name="site_twitter_url"
                    value="{{   $Setting->site_twitter_url }}" aria-required="true">
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="card">
            <div class="header">
                <h2>{{ trans('backend.site_linkedin_url') }} </h2>
            </div>
            <div class="body">

                <input type="text" class="form-control" name="site_linkedin_url"
                    value="{{   $Setting->site_linkedin_url }}" aria-required="true">
            </div>
        </div>
    </div>

    <div class="col-sm-4">
        <div class="card">
            <div class="header">
                <h2>{{ trans('backend.site_youtube_url') }}</h2>
            </div>
            <div class="body">
                <input type="text" class="form-control" name="site_youtube_url"
                    value="{{   $Setting->site_youtube_url }}" aria-required="true">
            </div>
        </div>
    </div>
</div>

<div class="col-sm-4">


        <div class="body">
        <button type="submit" class="btn btn-primary btn-round">{{ trans('backend.save') }}</button>
        <a type="button" class="btn btn-warning" href="{{   route('admin.dashboard')   }}">{{ trans('backend.back') }}</a>

    </div>
</div>



                </form>

</div>
</div>
</div>
</div>
</div>
</div>
</section>

@endsection
