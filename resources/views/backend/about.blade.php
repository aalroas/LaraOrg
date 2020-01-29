@extends('backend.layouts.app')
@section('content')


<section id="basic-input">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">{{ trans('backend.about_page_settings') }}</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <div class="row">
                            <form role="form" action="{{ route('admin.about.update') }}" method="post"
                                enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="row clealfix">
                                    <div class="col-sm-4">
                                        <div class="card">
                                            <div class="header">
                                                <h2>{{ trans('backend.about_image') }}</h2>
                                            </div>
                                            <div class="body">

                                                <input type="file" class="dropify"
                                                    data-default-file="{{ URL::to('uploads/about', $about->about_image) }}"
                                                    data-allowed-file-extensions="png jpg jpeg PNG JPG JPEG"
                                                    name="about_image">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="card">
                                            <div class="header">
                                                <h2>{{ trans('backend.counter_image') }}</h2>
                                            </div>
                                            <div class="body">

                                                <input type="file" class="dropify"
                                                    data-default-file="{{ URL::to('uploads/about', $about->counter_image) }}"
                                                    data-allowed-file-extensions="png jpg jpeg PNG JPG JPEG"
                                                    name="counter_image">
                                            </div>
                                        </div>
                                    </div>
                                </div>




                                <div class="row clealfix">
                                    <div class="col-sm-4">
                                        <div class="card">
                                            <div class="header">
                                                <h2>{{ trans('backend.about_title') }} AR</h2>
                                            </div>
                                            <div class="body">
                                                <input type="text" class="form-control" name="about_title_ar"
                                                    value="{{   $about->about_title_ar }}" aria-required="true">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="card">
                                            <div class="header">
                                                <h2>{{ trans('backend.about_title') }} EN</h2>
                                            </div>
                                            <div class="body">

                                                <input type="text" class="form-control" name="about_title_en"
                                                    value="{{   $about->about_title_en }}" aria-required="true">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="card">
                                            <div class="header">
                                                <h2>{{ trans('backend.about_title') }} TR</h2>
                                            </div>
                                            <div class="body">
                                                <input type="text" class="form-control" name="about_title_tr"
                                                    value="{{   $about->about_title_tr }}" aria-required="true">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row clealfix">
                                    <div class="col-sm-4">
                                        <div class="card">
                                            <div class="header">
                                                <h2>{{ trans('backend.about_text') }} AR</h2>
                                            </div>
                                            <div class="body">
                                                <textarea type="text" class="form-control" name="about_text_ar">{{   $about->about_text_ar }}
                    </textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="card">
                                            <div class="header">
                                                <h2>{{ trans('backend.about_text') }} EN</h2>
                                            </div>
                                            <div class="body">

                                                <textarea type="text" class="form-control" name="about_text_en">{{   $about->about_text_en }}
                    </textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="card">
                                            <div class="header">
                                                <h2>{{ trans('backend.about_text') }} TR</h2>
                                            </div>
                                            <div class="body">

                                                <textarea type="text" class="form-control" name="about_text_tr">{{   $about->about_text_tr }}
                    </textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row clealfix">
                                    <div class="col-sm-4">
                                        <div class="card">
                                            <div class="header">
                                                <h2>{{ trans('backend.mission_title') }} AR</h2>
                                            </div>
                                            <div class="body">
                                                <input type="text" class="form-control" name="mission_title_ar"
                                                    value="{{   $about->mission_title_ar }}" aria-required="true">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="card">
                                            <div class="header">
                                                <h2>{{ trans('backend.mission_title') }} EN</h2>
                                            </div>
                                            <div class="body">

                                                <input type="text" class="form-control" name="mission_title_en"
                                                    value="{{   $about->mission_title_en }}" aria-required="true">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="card">
                                            <div class="header">
                                                <h2>{{ trans('backend.mismission_text') }} TR</h2>
                                            </div>
                                            <div class="body">
                                                <input type="text" class="form-control" name="mismission_text_tr"
                                                    value="{{   $about->mismission_text_tr }}" aria-required="true">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row clealfix">
                                    <div class="col-sm-4">
                                        <div class="card">
                                            <div class="header">
                                                <h2>{{ trans('backend.mission_text') }} AR</h2>
                                            </div>
                                            <div class="body">
                                                <textarea type="text" class="form-control" name="mission_text_ar">{{   $about->mission_text_ar }}
                    </textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="card">
                                            <div class="header">
                                                <h2>{{ trans('backend.mission_text') }} EN</h2>
                                            </div>
                                            <div class="body">

                                                <textarea type="text" class="form-control" name="mission_text_en">{{   $about->mission_text_en }}
                    </textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="card">
                                            <div class="header">
                                                <h2>{{ trans('backend.mission_text') }} TR</h2>
                                            </div>
                                            <div class="body">

                                                <textarea type="text" class="form-control" name="mission_text_tr">{{   $about->mission_text_tr }}
                    </textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
        <div class="card">
            <div class="header">
                <h2>{{ trans('backend.about_url') }} </h2>
                                </div>
                                <div class="body">
                                    <input type="text" class="form-control" name="url" value="{{   $about->url }}"
                                        aria-required="true">
                                </div>
                        </div>
                    </div>


                </div>







                <div class="row clealfix">
                    <div class="col-sm-4">
                        <div class="card">
                            <div class="header">
                                <h2>{{ trans('backend.vision_title') }} AR</h2>
                            </div>
                            <div class="body">
                                <input type="text" class="form-control" name="vision_title_ar"
                                    value="{{   $about->vision_title_ar }}" aria-required="true">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card">
                            <div class="header">
                                <h2>{{ trans('backend.vision_title') }} EN</h2>
                            </div>
                            <div class="body">

                                <input type="text" class="form-control" name="vision_title_en"
                                    value="{{   $about->vision_title_en }}" aria-required="true">
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="card">
                            <div class="header">
                                <h2>{{ trans('backend.vision_title') }} TR</h2>
                            </div>
                            <div class="body">
                                <input type="text" class="form-control" name="vision_title_tr"
                                    value="{{   $about->vision_title_tr }}" aria-required="true">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row clealfix">
                    <div class="col-sm-4">
                        <div class="card">
                            <div class="header">
                                <h2>{{ trans('backend.vision_text') }} AR</h2>
                            </div>
                            <div class="body">
                                <textarea id="ckeditor1" type="text" class="form-control" name="vision_text_ar">{{   $about->vision_text_ar }}
                        </textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card">
                            <div class="header">
                                <h2>{{ trans('backend.vision_text') }} EN</h2>
                            </div>
                            <div class="body">

                                <textarea id="ckeditor2" type="text" class="form-control" name="vision_text_en">{{   $about->vision_text_en }}
                        </textarea>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="card">
                            <div class="header">
                                <h2>{{ trans('backend.vision_text') }} TR</h2>
                            </div>
                            <div class="body">

                                <textarea id="ckeditor3" type="text" class="form-control" name="vision_text_tr">{{   $about->vision_text_tr }}
                        </textarea>
                            </div>
                        </div>
                    </div>
                </div>




<div class="row clealfix">
    <div class="col-sm-4">
        <div class="card">
            <div class="header">
                <h2>{{ trans('backend.objectives_title') }} AR</h2>
            </div>
            <div class="body">
                <input type="text" class="form-control" name="objectives_title_ar" value="{{   $about->objectives_title_ar }}"
                    aria-required="true">
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="card">
            <div class="header">
                <h2>{{ trans('backend.objectives_title') }} EN</h2>
            </div>
            <div class="body">

                <input type="text" class="form-control" name="objectives_title_en" value="{{   $about->objectives_title_en }}"
                    aria-required="true">
            </div>
        </div>
    </div>

    <div class="col-sm-4">
        <div class="card">
            <div class="header">
                <h2>{{ trans('backend.objectives_title') }} TR</h2>
            </div>
            <div class="body">
                <input type="text" class="form-control" name="objectives_title_tr" value="{{   $about->objectives_title_tr }}"
                    aria-required="true">
            </div>
        </div>
    </div>
</div>

<div class="row clealfix">
    <div class="col-sm-4">
        <div class="card">
            <div class="header">
                <h2>{{ trans('backend.objectives_text') }} AR</h2>
            </div>
            <div class="body">
                <textarea id="ckeditor1" type="text" class="form-control" name="objectives_text_ar">{{   $about->objectives_text_ar }}
                        </textarea>
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="card">
            <div class="header">
                <h2>{{ trans('backend.objectives_text') }} EN</h2>
            </div>
            <div class="body">

                <textarea id="ckeditor2" type="text" class="form-control" name="objectives_text_en">{{   $about->objectives_text_en }}
                        </textarea>
            </div>
        </div>
    </div>

    <div class="col-sm-4">
        <div class="card">
            <div class="header">
                <h2>{{ trans('backend.objectives_text') }} TR</h2>
            </div>
            <div class="body">

                <textarea id="ckeditor3" type="text" class="form-control" name="objectives_text_tr">{{   $about->objectives_text_tr }}
                        </textarea>
            </div>
        </div>
    </div>
</div>





























                <div class="row clealfix">
                    <div class="col-sm-4">
                        <div class="card">
                            <div class="header">
                                <h2>{{ trans('backend.counter1') }}</h2>
                            </div>
                            <div class="body">
                                <input type="text" class="form-control" name="counter1" value="{{   $about->counter1 }}"
                                    aria-required="true">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card">
                            <div class="header">
                                <h2>{{ trans('backend.counter2') }} </h2>
                            </div>
                            <div class="body">

                                <input type="text" class="form-control" name="counter2"
                                    value="{{   $about->counter2 }}" aria-required="true">
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="card">
                            <div class="header">
                                <h2>{{ trans('backend.counter3') }} </h2>
                            </div>
                            <div class="body">
                                <input type="text" class="form-control" name="counter3" value="{{   $about->counter3 }}"
                                    aria-required="true">
                            </div>
                        </div>
                    </div>



                    <div class="col-sm-4">
                        <div class="card">
                            <div class="header">
                                <h2>{{ trans('backend.counter4') }} </h2>
                            </div>
                            <div class="body">
                                <input type="text" class="form-control" name="counter4" value="{{   $about->counter4 }}"
                                    aria-required="true">
                            </div>
                        </div>
                    </div>


                </div>











                <div class="row clealfix">
                    <div class="col-sm-4">
                        <div class="card">
                            <div class="header">
                                <h2>{{ trans('backend.counter_title') }} AR</h2>
                            </div>
                            <div class="body">
                                <input type="text" class="form-control" name="counter_title_ar"
                                    value="{{   $about->counter_title_ar }}" aria-required="true">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card">
                            <div class="header">
                                <h2>{{ trans('backend.counter_title') }} EN</h2>
                            </div>
                            <div class="body">

                                <input type="text" class="form-control" name="counter_title_en"
                                    value="{{   $about->counter_title_en }}" aria-required="true">
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="card">
                            <div class="header">
                                <h2>{{ trans('backend.counter_title') }} TR</h2>
                            </div>
                            <div class="body">
                                <input type="text" class="form-control" name="counter_title_tr"
                                    value="{{   $about->counter_title_tr }}" aria-required="true">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row clealfix">
                    <div class="col-sm-4">
                        <div class="card">
                            <div class="header">
                                <h2>{{ trans('backend.counter_text') }} AR</h2>
                            </div>
                            <div class="body">
                                <textarea type="text" class="form-control" name="counter_text_ar">{{   $about->counter_text_ar }}
                        </textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card">
                            <div class="header">
                                <h2>{{ trans('backend.counter_text') }} EN</h2>
                            </div>
                            <div class="body">

                                <textarea type="text" class="form-control" name="counter_text_en">{{   $about->counter_text_en }}
                        </textarea>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="card">
                            <div class="header">
                                <h2>{{ trans('backend.counter_text') }} TR</h2>
                            </div>
                            <div class="body">

                                <textarea type="text" class="form-control" name="counter_text_tr">{{   $about->counter_text_tr }}
                        </textarea>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="col-sm-4">


                    <div class="body">
                        <button type="submit" class="btn btn-primary btn-round">{{ trans('backend.save') }}</button>
                        <a type="button" class="btn btn-warning"
                            href="{{   route('admin.dashboard')   }}">{{ trans('backend.back') }}</a>

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
