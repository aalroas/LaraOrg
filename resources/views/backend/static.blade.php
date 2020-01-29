@extends('backend.layouts.app')

@section('title', __('labels.backend.access.users.management') . ' | ' . __('labels.backend.access.users.edit'))

@section('breadcrumb-links')
@include('backend.auth.user.includes.breadcrumb-links')
@endsection


@section('content')

<!-- account setting page start -->
<section id="page-account-settings">
    <div class="row">
        <!-- left menu section -->
        <div class="col-md-3 mb-2 mb-md-0">
            <ul class="nav nav-pills flex-column mt-md-0 mt-1">
                <li class="nav-item">
                    <a class="nav-link d-flex py-75 active" id="account-pill-general" data-toggle="pill"
                        href="#bylaws" aria-expanded="true">
                        <i class="feather icon-globe mr-50 font-medium-3"></i>
                        {{ trans('backend.bylaws') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex py-75" id="account-pill-password" data-toggle="pill"
                        href="#organizational_structure" aria-expanded="false">
                        <i class="feather icon-lock mr-50 font-medium-3"></i>
                        {{ trans('backend.organizational_structure') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex py-75" id="account-pill-info" data-toggle="pill"
                        href="#terims_of_use" aria-expanded="false">
                        <i class="feather icon-info mr-50 font-medium-3"></i>
                        {{ trans('backend.terims_of_use') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex py-75" id="account-pill-social" data-toggle="pill"
                        href="#privacy_policy" aria-expanded="false">
                        <i class="feather icon-camera mr-50 font-medium-3"></i>
                        {{ trans('backend.privacy_policy') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex py-75" id="account-pill-connections" data-toggle="pill"
                        href="#account-vertical-connections" aria-expanded="false">
                        <i class="feather icon-feather mr-50 font-medium-3"></i>
                        Connections
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex py-75" id="account-pill-notifications" data-toggle="pill"
                        href="#account-vertical-notifications" aria-expanded="false">
                        <i class="feather icon-message-circle mr-50 font-medium-3"></i>
                        Notifications
                    </a>
                </li>
            </ul>
        </div>
        <!-- right content section -->
        <div class="col-md-9">
            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="bylaws"
                                aria-labelledby="account-pill-general" aria-expanded="true">


                                <form role="form" action="{{route('admin.static.updategeneral')}}" method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}

                                    <div class="media">

                                        <input type="file" class="dropify" data-default-file="{{ URL::to('uploads/static', $static->g_pdf) }}"
                                            data-allowed-file-extensions="pdf doc docx" name="g_pdf">

                                        <div class="media-body mt-75">
                                            <div class="col-12 px-0 d-flex flex-sm-row flex-column justify-content-start">

                                            </div>
                                            <p class="text-muted ml-75 mt-50"><small>PDF, DOC or DOCX.
                                                </small></p>
                                        </div>
                                    </div>
                                    <hr>


                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <div class="controls">
                                                    <label for="account-username">{{ trans('backend.g_title_ar') }}</label>
                                                    <input type="text" value="{{   $static->g_title_ar }}" class="form-control" name="g_title_ar"
                                                        id="{{ trans('backend.g_title_ar') }}" placeholder="{{ trans('backend.g_title_ar') }}"
                                                        data-validation-required-message="{{ trans('backend.g_title_ar') }}">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-group">
                                                <div class="controls">
                                                    <label for="account-username">{{ trans('backend.g_title_en') }}</label>
                                                    <input type="text" value="{{   $static->g_title_en }}" class="form-control" name="g_title_en"
                                                        id="{{ trans('backend.g_title_en') }}" placeholder="{{ trans('backend.g_title_en') }}"
                                                        data-validation-required-message="{{ trans('backend.g_title_en') }}">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-group">
                                                <div class="controls">
                                                    <label for="account-username">{{ trans('backend.g_title_tr') }}</label>
                                                    <input type="text" value="{{   $static->g_title_tr }}" class="form-control" name="g_title_tr"
                                                        id="{{ trans('backend.g_title_tr') }}" placeholder="{{ trans('backend.g_title_tr') }}"
                                                        data-validation-required-message="{{ trans('backend.g_title_tr') }}">
                                                </div>
                                            </div>
                                        </div>



                                        <div class="col-12">
                                            <div class="form-group">
                                                <div class="controls">
                                                    <label for="account-username">{{ trans('backend.g_text_ar') }}</label>


                                                    <textarea name="g_text_ar" id="g_text_ar" style="width:100%">
                                                                                {!! $static->g_text_ar !!}
                                                                                                                                    </textarea>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-12">
                                            <div class="form-group">
                                                <div class="controls">
                                                    <label for="account-username">{{ trans('backend.g_text_en') }}</label>


                                                    <textarea name="g_text_en" id="g_text_en" style="width:100%">
                                                                                {!! $static->g_text_en !!}
                                                                                                                                    </textarea>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-12">
                                            <div class="form-group">
                                                <div class="controls">
                                                    <label for="account-username">{{ trans('backend.g_text_tr') }}</label>


                                                    <textarea name="g_text_tr" id="g_text_tr" style="width:100%">
                                                                                    {!! $static->g_text_tr !!}
                                                                                    </textarea>
                                                </div>
                                            </div>
                                        </div>



                                        <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                            <button type="submit" class="btn btn-primary mr-sm-1 mb-1 mb-sm-0">Save
                                                changes</button>
                                            <button type="reset" class="btn btn-outline-warning">Cancel</button>
                                        </div>
                                    </div>
                                </form>

                            </div>




                            <div class="tab-pane fade " id="organizational_structure" role="tabpanel"
                                aria-labelledby="account-pill-password" aria-expanded="false">

                                <form role="form" action="{{route('admin.static.updateorg')}}" method="post" enctype="multipart/form-data">
                                        {{ csrf_field() }}

                                        <div class="media">

                                            <input type="file" class="dropify" data-default-file="{{ URL::to('uploads/static', $static->o_image) }}"
                                                data-allowed-file-extensions="png  jpeg jpg" name="o_image">

                                            <div class="media-body mt-75">
                                                <div class="col-12 px-0 d-flex flex-sm-row flex-column justify-content-start">

                                                </div>
                                                <p class="text-muted ml-75 mt-50"><small>PNG, JPEsaG, JPG.
                                                    </small></p>
                                            </div>
                                        </div>
                                        <hr>


                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label for="account-username">{{ trans('backend.o_title_ar') }}</label>
                                                        <input type="text" value="{{   $static->o_title_ar }}" class="form-control" name="o_title_ar"
                                                            id="{{ trans('backend.o_title_ar') }}" placeholder="{{ trans('backend.o_title_ar') }}"
                                                            data-validation-required-message="{{ trans('backend.o_title_ar') }}">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label for="account-username">{{ trans('backend.o_title_en') }}</label>
                                                        <input type="text" value="{{   $static->o_title_en }}" class="form-control" name="o_title_en"
                                                            id="{{ trans('backend.o_title_en') }}" placeholder="{{ trans('backend.o_title_en') }}"
                                                            data-validation-required-message="{{ trans('backend.o_title_en') }}">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label for="account-username">{{ trans('backend.o_title_tr') }}</label>
                                                        <input type="text" value="{{   $static->o_title_tr }}" class="form-control" name="o_title_tr"
                                                            id="{{ trans('backend.o_title_tr') }}" placeholder="{{ trans('backend.o_title_tr') }}"
                                                            data-validation-required-message="{{ trans('backend.o_title_tr') }}">
                                                    </div>
                                                </div>
                                            </div>



                                            <div class="col-12">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label for="account-username">{{ trans('backend.o_text_ar') }}</label>


                                                        <textarea name="o_text_ar" id="o_text_ar" style="width:100%">
                                                                                    {!! $static->o_text_ar !!}
                                                                                                                                        </textarea>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="col-12">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label for="account-username">{{ trans('backend.o_text_en') }}</label>


                                                        <textarea name="o_text_en" id="t_text_en" style="width:100%">
                                                                                    {!! $static->o_text_en !!}
                                                                                                                                        </textarea>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="col-12">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label for="account-username">{{ trans('backend.o_text_tr') }}</label>


                                                        <textarea name="o_text_tr" id="o_text_tr" style="width:100%">
                                                                                        {!! $static->o_text_tr !!}
                                                                                        </textarea>
                                                    </div>
                                                </div>
                                            </div>



                                            <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                                <button type="submit" class="btn btn-primary mr-sm-1 mb-1 mb-sm-0">Save
                                                    changes</button>
                                                <button type="reset" class="btn btn-outline-warning">Cancel</button>
                                            </div>
                                        </div>
                                    </form>


                            </div>
                            <div class="tab-pane fade" id="privacy_policy" role="tabpanel"
                                aria-labelledby="account-pill-info" aria-expanded="false">

<form role="form" action="{{route('admin.static.updateprivacy')}}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}


    <hr>


    <div class="row">
        <div class="col-12">
            <div class="form-group">
                <div class="controls">
                    <label for="account-username">{{ trans('backend.p_title_ar') }}</label>
                    <input type="text" value="{{   $static->p_title_ar }}" class="form-control" name="p_title_ar"
                        id="{{ trans('backend.p_title_ar') }}" placeholder="{{ trans('backend.p_title_ar') }}"
                        data-validation-required-message="{{ trans('backend.p_title_ar') }}">
                </div>
            </div>
        </div>

        <div class="col-12">
            <div class="form-group">
                <div class="controls">
                    <label for="account-username">{{ trans('backend.p_title_en') }}</label>
                    <input type="text" value="{{   $static->p_title_en }}" class="form-control" name="p_title_en"
                        id="{{ trans('backend.p_title_en') }}" placeholder="{{ trans('backend.p_title_en') }}"
                        data-validation-required-message="{{ trans('backend.p_title_en') }}">
                </div>
            </div>
        </div>

        <div class="col-12">
            <div class="form-group">
                <div class="controls">
                    <label for="account-username">{{ trans('backend.p_title_tr') }}</label>
                    <input type="text" value="{{   $static->p_title_tr }}" class="form-control" name="p_title_tr"
                        id="{{ trans('backend.p_title_tr') }}" placeholder="{{ trans('backend.p_title_tr') }}"
                        data-validation-required-message="{{ trans('backend.p_title_tr') }}">
                </div>
            </div>
        </div>



        <div class="col-12">
            <div class="form-group">
                <div class="controls">
                    <label for="account-username">{{ trans('backend.p_text_ar') }}</label>


                    <textarea name="p_text_ar" id="p_text_ar" style="width:100%">
                                                                                    {!! $static->p_text_ar !!}
                                                                                                                                        </textarea>
                </div>
            </div>
        </div>


        <div class="col-12">
            <div class="form-group">
                <div class="controls">
                    <label for="account-username">{{ trans('backend.p_text_en') }}</label>


                    <textarea name="p_text_en" id="p_text_en" style="width:100%">
                                                                                    {!! $static->p_text_en !!}
                                                                                                                                        </textarea>
                </div>
            </div>
        </div>


        <div class="col-12">
            <div class="form-group">
                <div class="controls">
                    <label for="account-username">{{ trans('backend.p_text_tr') }}</label>


                    <textarea name="p_text_tr" id="p_text_tr" style="width:100%">
                                                                                        {!! $static->p_text_tr !!}
                                                                                        </textarea>
                </div>
            </div>
        </div>



        <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
            <button type="submit" class="btn btn-primary mr-sm-1 mb-1 mb-sm-0">Save
                changes</button>
            <button type="reset" class="btn btn-outline-warning">Cancel</button>
        </div>
    </div>
</form>






                            </div>
                            <div class="tab-pane fade " id="terims_of_use" role="tabpanel"
                                aria-labelledby="account-pill-social" aria-expanded="false">

                                <form role="form" action="{{route('admin.static.updateterims')}}" method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}


                                    <hr>


                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <div class="controls">
                                                    <label for="account-username">{{ trans('backend.t_title_ar') }}</label>
                                                    <input type="text" value="{{   $static->t_title_ar }}" class="form-control" name="t_title_ar"
                                                        id="{{ trans('backend.t_title_ar') }}" placeholder="{{ trans('backend.t_title_ar') }}"
                                                        data-validation-required-message="{{ trans('backend.t_title_ar') }}">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-group">
                                                <div class="controls">
                                                    <label for="account-username">{{ trans('backend.t_title_en') }}</label>
                                                    <input type="text" value="{{   $static->t_title_en }}" class="form-control" name="t_title_en"
                                                        id="{{ trans('backend.t_title_en') }}" placeholder="{{ trans('backend.t_title_en') }}"
                                                        data-validation-required-message="{{ trans('backend.t_title_en') }}">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-group">
                                                <div class="controls">
                                                    <label for="account-username">{{ trans('backend.t_title_tr') }}</label>
                                                    <input type="text" value="{{   $static->t_title_tr }}" class="form-control" name="t_title_tr"
                                                        id="{{ trans('backend.t_title_tr') }}" placeholder="{{ trans('backend.t_title_tr') }}"
                                                        data-validation-required-message="{{ trans('backend.t_title_tr') }}">
                                                </div>
                                            </div>
                                        </div>



                                        <div class="col-12">
                                            <div class="form-group">
                                                <div class="controls">
                                                    <label for="account-username">{{ trans('backend.t_text_ar') }}</label>


                                                    <textarea name="t_text_ar" id="t_text_ar" style="width:100%">
                                                                                                                    {!! $static->t_text_ar !!}
                                                                                                                                                                        </textarea>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-12">
                                            <div class="form-group">
                                                <div class="controls">
                                                    <label for="account-username">{{ trans('backend.t_text_en') }}</label>


                                                    <textarea name="t_text_en" id="t_text_en" style="width:100%">
                                                                                                                    {!! $static->t_text_en !!}
                                                                                                                                                                        </textarea>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-12">
                                            <div class="form-group">
                                                <div class="controls">
                                                    <label for="account-username">{{ trans('backend.t_text_tr') }}</label>


                                                    <textarea name="t_text_tr" id="t_text_tr" style="width:100%">
                                                                                                                        {!! $static->t_text_tr !!}
                                                                                                                        </textarea>
                                                </div>
                                            </div>
                                        </div>



                                        <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                            <button type="submit" class="btn btn-primary mr-sm-1 mb-1 mb-sm-0">Save
                                                changes</button>
                                            <button type="reset" class="btn btn-outline-warning">Cancel</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="account-vertical-connections" role="tabpanel"
                                aria-labelledby="account-pill-connections" aria-expanded="false">
                                <div class="row">
                                    <div class="col-12 mb-3">
                                        <a href="javascript: void(0);" class="btn btn-info">Connect to
                                            <strong>Twitter</strong></a>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <button class=" btn btn-sm btn-secondary float-right">edit</button>
                                        <h6>You are connected to facebook.</h6>
                                        <span>Johndoe@gmail.com</span>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <a href="javascript: void(0);" class="btn btn-danger">Connect to
                                            <strong>Google</strong>
                                        </a>
                                    </div>
                                    <div class="col-12 mb-2">
                                        <button class=" btn btn-sm btn-secondary float-right">edit</button>
                                        <h6>You are connected to Instagram.</h6>
                                        <span>Johndoe@gmail.com</span>
                                    </div>
                                    <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                        <button type="submit" class="btn btn-primary mr-sm-1 mb-1 mb-sm-0">Save
                                            changes</button>
                                        <button type="reset" class="btn btn-outline-warning">Cancel</button>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="account-vertical-notifications" role="tabpanel"
                                aria-labelledby="account-pill-notifications" aria-expanded="false">
                                <div class="row">
                                    <h6 class="m-1">Activity</h6>
                                    <div class="col-12 mb-1">
                                        <div class="custom-control custom-switch custom-control-inline">
                                            <input type="checkbox" class="custom-control-input" checked
                                                id="accountSwitch1">
                                            <label class="custom-control-label mr-1" for="accountSwitch1"></label>
                                            <span class="switch-label w-100">Email me when someone comments
                                                onmy
                                                article</span>
                                        </div>
                                    </div>
                                    <div class="col-12 mb-1">
                                        <div class="custom-control custom-switch custom-control-inline">
                                            <input type="checkbox" class="custom-control-input" checked
                                                id="accountSwitch2">
                                            <label class="custom-control-label mr-1" for="accountSwitch2"></label>
                                            <span class="switch-label w-100">Email me when someone answers
                                                on
                                                my
                                                form</span>
                                        </div>
                                    </div>
                                    <div class="col-12 mb-1">
                                        <div class="custom-control custom-switch custom-control-inline">
                                            <input type="checkbox" class="custom-control-input" id="accountSwitch3">
                                            <label class="custom-control-label mr-1" for="accountSwitch3"></label>
                                            <span class="switch-label w-100">Email me hen someone follows
                                                me</span>
                                        </div>
                                    </div>
                                    <h6 class="m-1">Application</h6>
                                    <div class="col-12 mb-1">
                                        <div class="custom-control custom-switch custom-control-inline">
                                            <input type="checkbox" class="custom-control-input" checked
                                                id="accountSwitch4">
                                            <label class="custom-control-label mr-1" for="accountSwitch4"></label>
                                            <span class="switch-label w-100">News and announcements</span>
                                        </div>
                                    </div>
                                    <div class="col-12 mb-1">
                                        <div class="custom-control custom-switch custom-control-inline">
                                            <input type="checkbox" class="custom-control-input" id="accountSwitch5">
                                            <label class="custom-control-label mr-1" for="accountSwitch5"></label>
                                            <span class="switch-label w-100">Weekly product updates</span>
                                        </div>
                                    </div>
                                    <div class="col-12 mb-1">
                                        <div class="custom-control custom-switch custom-control-inline">
                                            <input type="checkbox" class="custom-control-input" checked
                                                id="accountSwitch6">
                                            <label class="custom-control-label mr-1" for="accountSwitch6"></label>
                                            <span class="switch-label w-100">Weekly blog digest</span>
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                        <button type="submit" class="btn btn-primary mr-sm-1 mb-1 mb-sm-0">Save
                                            changes</button>
                                        <button type="reset" class="btn btn-outline-warning">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection

