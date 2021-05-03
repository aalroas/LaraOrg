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
                                <div class="row">
                                    <div class="col-sm-6">
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
                                    <div class="col-sm-6">
                                        <div class="card">
                                            <div class="header">
                                                <h2>{{ trans('backend.counter') }}{{ trans('backend.image') }}</h2>
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


<div class="row">
    <div class="col-sm-12">
        <div class="card overflow-hidden">
            <div class="card-header">
                <h4 class="card-title">{{ trans('backend.url') }}</h4>
            </div>
<input type="text" class="form-control" name="url" value="{{   $about->url }}"
    aria-required="true">


            </div>
            </div>
            </div>




                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="card overflow-hidden">
                                            <div class="card-header">
                                                <h4 class="card-title">{{ trans('backend.about_title') }}</h4>
                                            </div>
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <ul class="nav nav-tabs nav-justified" id="myTab2" role="tablist">
                                                        <li class="nav-item">
                                                            <a class="nav-link active" id="home-tab-justified"
                                                                data-toggle="tab" href="#home-just" role="tab"
                                                                aria-controls="home-just" aria-selected="false">[ {{trans('backend.arabic') }} ]</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" id="profile-tab-justified"
                                                                data-toggle="tab" href="#profile-just" role="tab"
                                                                aria-controls="profile-just" aria-selected="true">[ {{trans('backend.english') }} ]</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" id="messages-tab-justified"
                                                                data-toggle="tab" href="#messages-just" role="tab"
                                                                aria-controls="messages-just"
                                                                aria-selected="false">{{trans('backend.turkish')}}</a>
                                                        </li>

                                                    </ul>
                                                    <!-- Tab panes -->
                                                    <div class="tab-content pt-1">
                                                        <div class="tab-pane active" id="home-just" role="tabpanel"
                                                            aria-labelledby="home-tab-justified">
                                                            <input type="text" class="form-control"
                                                                name="about_title_ar"
                                                                value="{{$about->about_title_ar }}"
                                                                aria-required="true">
                                                            <h4 class="card-title">{{ trans('backend.about_text') }}
                                                            </h4>
                                                            <textarea type="text" class="form-control"
                                                                name="about_text_ar">{!!$about->about_text_ar !!}</textarea>
                                                        </div>
                                                        <div class="tab-pane" id="profile-just" role="tabpanel"
                                                            aria-labelledby="profile-tab-justified">
                                                            <input type="text" class="form-control"
                                                                name="about_title_en"
                                                                value="{{   $about->about_title_en }}"
                                                                aria-required="true">
                                                            <h4 class="card-title">{{ trans('backend.about_text') }}
                                                            </h4>
                                                            <textarea type="text" class="form-control"
                                                                name="about_text_en">{!! $about->about_text_en !!}</textarea>
                                                        </div>
                                                        <div class="tab-pane" id="messages-just" role="tabpanel"
                                                            aria-labelledby="messages-tab-justified">
                                                            <input type="text" class="form-control"
                                                                name="about_title_tr"
                                                                value="{{   $about->about_title_tr }}" aria-required="true">
                                                            <h4 class="card-title">{{ trans('backend.about_text') }} </h4>
                                                            <textarea type="text" class="form-control"
                                                                name="about_text_tr">{!! $about->about_text_tr !!}</textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
<div class="row">
    <div class="col-sm-12">
        <div class="card overflow-hidden">
            <div class="card-header">
                <h4 class="card-title">{{ trans('backend.mission_title') }}</h4>
            </div>
            <div class="card-content">
                <div class="card-body">
                    <ul class="nav nav-tabs nav-justified" id="myTabmission" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab-mission" data-toggle="tab" href="#home-mission"
                                role="tab" aria-controls="home-just" aria-selected="false">[ {{trans('backend.arabic') }} ]</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab-mission" data-toggle="tab" href="#profile-mission"
                                role="tab" aria-controls="profile-just" aria-selected="true">[ {{trans('backend.english') }} ]</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="messages-tab-mission" data-toggle="tab" href="#messages-mission"
                                role="tab" aria-controls="messages-just" aria-selected="false">{{trans('backend.turkish')}}</a>
                        </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content pt-1">
                        <div class="tab-pane active" id="home-mission" role="tabpanel"
                            aria-labelledby="home-tab-mission">
                            <input type="text" class="form-control" name="mission_title_ar"
                                value="{{ $about->mission_title_ar }}" aria-required="true">
                            <h4 class="card-title">
                                {{ trans('backend.mission_text') }}</h4>
                            <textarea type="text" class="form-control"
                                name="mission_text_ar">{!! $about->mission_text_ar !!}</textarea>
                        </div>
                        <div class="tab-pane" id="profile-mission" role="tabpanel"
                            aria-labelledby="profile-tab-mission">
                            <input type="text" class="form-control" name="mission_title_en"
                                value="{{   $about->mission_title_en }}" aria-required="true">
                            <h4 class="card-title">
                                {{ trans('backend.mission_text') }}</h4>
                            <textarea type="text" class="form-control"
                                name="mission_text_en">{!! $about->mission_text_en !!}</textarea>
                            </textarea>
                        </div>
                        <div class="tab-pane" id="messages-mission" role="tabpanel"
                            aria-labelledby="messages-tab-mission">

                            <input type="text"
                                class="form-control" name="mission_title_tr" value="{{   $about->mission_title_tr }}"
                                aria-required="true">
                            <h4 class="card-title">
                                {{ trans('backend.mission_text') }}</h4>
                            <textarea type="text" class="form-control"
                                name="mission_text_tr">{!! $about->mission_text_tr !!}</textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="card overflow-hidden">
            <div class="card-header">
                <h4 class="card-title">{{ trans('backend.vision_title') }}</h4>
            </div>
            <div class="card-content">
                <div class="card-body">
                    <ul class="nav nav-tabs nav-justified" id="myTabvision" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab-justified" data-toggle="tab" href="#home-vision"
                                role="tab" aria-controls="home-just" aria-selected="false">[ {{trans('backend.arabic') }} ]</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab-justified" data-toggle="tab" href="#profile-vision"
                                role="tab" aria-controls="profile-just" aria-selected="true">[ {{trans('backend.english') }} ]</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="messages-tab-justified" data-toggle="tab" href="#messages-vision"
                                role="tab" aria-controls="messages-just" aria-selected="false">{{trans('backend.turkish')}}</a>
                        </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content pt-1">
                        <div class="tab-pane active" id="home-vision" role="tabpanel"
                            aria-labelledby="home-tab-justified">
                            <input type="text" class="form-control" name="vision_title_ar"
                                value="{{ $about->vision_title_ar }}" aria-required="true">
                            <h4 class="card-title">
                                {{ trans('backend.vision_text') }}</h4>
                            <textarea type="text" class="form-control"
                                name="vision_text_ar">{!! $about->vision_text_ar !!}</textarea>
                        </div>
                        <div class="tab-pane" id="profile-vision" role="tabpanel"
                            aria-labelledby="profile-tab-justified">
                            <input type="text" class="form-control" name="vision_title_en"
                                value="{{   $about->vision_title_en }}" aria-required="true">
                            <h4 class="card-title">
                                {{ trans('backend.vision_text') }}</h4>
                            <textarea type="text" class="form-control"
                                name="vision_text_en">{!! $about->vision_text_en !!}</textarea>
                            </textarea>
                        </div>
                        <div class="tab-pane" id="messages-vision" role="tabpanel"
                            aria-labelledby="messages-tab-justified">
   <input type="text" class="form-control" name="vision_title_tr" value="{{   $about->vision_title_tr }}"
                                aria-required="true">
                            <h4 class="card-title">
                                {{ trans('backend.vision_text') }}</h4>
                            <textarea type="text" class="form-control"
                                name="vision_text_tr">{!! $about->vision_text_tr !!}</textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
 <div class="row">
    <div class="col-sm-12">
        <div class="card overflow-hidden">
            <div class="card-header">
                <h4 class="card-title">{{ trans('backend.objectives_title') }}</h4>
            </div>
            <div class="card-content">
                <div class="card-body">
                    <ul class="nav nav-tabs nav-justified" id="myTabobjectives" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab-justified" data-toggle="tab" href="#home-objectives"
                                role="tab" aria-controls="home-just" aria-selected="false">[ {{trans('backend.arabic') }} ]</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab-justified" data-toggle="tab" href="#profile-objectives"
                                role="tab" aria-controls="profile-just" aria-selected="true">[ {{trans('backend.english') }} ]</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="messages-tab-justified" data-toggle="tab"
                                href="#messages-objectives" role="tab" aria-controls="messages-just"
                                aria-selected="false">{{trans('backend.turkish')}}</a>
                        </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content pt-1">
                        <div class="tab-pane active" id="home-objectives" role="tabpanel"
                            aria-labelledby="home-tab-justified">
                            <input type="text" class="form-control" name="objectives_title_ar"
                                value="{{ $about->objectives_title_ar }}" aria-required="true">
                            <h4 class="card-title">
                                {{ trans('backend.objectives_text') }}</h4>
                            <textarea type="text" class="form-control"
                                name="objectives_text_ar">{!! $about->objectives_text_ar !!}</textarea>
                        </div>
                        <div class="tab-pane" id="profile-objectives" role="tabpanel"
                            aria-labelledby="profile-tab-justified">
                            <input type="text" class="form-control" name="objectives_title_en"
                                value="{{   $about->objectives_title_en }}" aria-required="true">
                            <h4 class="card-title">
                                {{ trans('backend.objectives_text') }}</h4>
                            <textarea type="text" class="form-control"
                                name="objectives_text_en">{!! $about->objectives_text_en !!}</textarea>
                            </textarea>
                        </div>
                        <div class="tab-pane" id="messages-objectives" role="tabpanel"
                            aria-labelledby="messages-tab-justified">
                             <input type="text" class="form-control" name="objectives_title_tr"
                                value="{{   $about->objectives_title_tr }}" aria-required="true">
                            <h4 class="card-title">
                                {{ trans('backend.objectives_text') }}</h4>
                            <textarea type="text" class="form-control"
                                name="objectives_text_tr">{!! $about->objectives_text_tr !!}</textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-12">
        <div class="card overflow-hidden">
            <div class="card-header">
                <h4 class="card-title">{{ trans('backend.counter_title') }}</h4>
            </div>
            <div class="card-content">
                <div class="card-body">
                    <ul class="nav nav-tabs nav-justified" id="myTabcounter" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab-counter" data-toggle="tab" href="#home-counter"
                                role="tab" aria-controls="home-just" aria-selected="false">[ {{trans('backend.arabic') }} ]</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab-counter" data-toggle="tab" href="#profile-counter"
                                role="tab" aria-controls="profile-just" aria-selected="true">[ {{trans('backend.english') }} ]</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="messages-tab-counter" data-toggle="tab" href="#messages-counter"
                                role="tab" aria-controls="messages-just" aria-selected="false">{{trans('backend.turkish')}}</a>
                        </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content pt-1">
                        <div class="tab-pane active" id="home-counter" role="tabpanel"
                            aria-labelledby="home-tab-counter">
                            <input type="text" class="form-control" name="counter_title_ar"
                                value="{{ $about->counter_title_ar }}" aria-required="true">
                            <h4 class="card-title">
                                {{ trans('backend.counter_text') }}</h4>
                            <textarea type="text" class="form-control"
                                name="counter_text_ar">{!! $about->counter_text_ar !!}</textarea>
                        </div>
                        <div class="tab-pane" id="profile-counter" role="tabpanel"
                            aria-labelledby="profile-tab-counter">
                            <input type="text" class="form-control" name="counter_title_en"
                                value="{{   $about->counter_title_en }}" aria-required="true">
                            <h4 class="card-title">
                                {{ trans('backend.counter_text') }}</h4>
                            <textarea type="text" class="form-control"
                                name="counter_text_en">{!! $about->counter_text_en !!}</textarea>
                            </textarea>
                        </div>
                        <div class="tab-pane" id="messages-counter" role="tabpanel"
                            aria-labelledby="messages-tab-counter">

                            <input type="text"
                                class="form-control" name="counter_title_tr" value="{{   $about->counter_title_tr }}"
                                aria-required="true">
                            <h4 class="card-title">
                                {{ trans('backend.counter_text') }}</h4>
                            <textarea type="text" class="form-control"
                                name="counter_text_tr">{!! $about->counter_text_tr !!}</textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="card overflow-hidden">

            <div class="card-content">
                <div class="card-body">
<div class="row">
    <div class="col">
        <div class="card">
            <div class="header">
                <h2>{{ trans('backend.counter') }} 1</h2>
            </div>
            <div class="body">
                <input type="text" class="form-control" name="counter1" value="{{   $about->counter1 }}"
                    aria-required="true">
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card">
            <div class="header">
                <h2>{{ trans('backend.counter') }} 2</h2>
            </div>
            <div class="body">

                <input type="text" class="form-control" name="counter2" value="{{   $about->counter2 }}"
                    aria-required="true">
            </div>
        </div>
    </div>

    <div class="col">
        <div class="card">
            <div class="header">
                <h2>{{ trans('backend.counter') }} 3 </h2>
            </div>
            <div class="body">
                <input type="text" class="form-control" name="counter3" value="{{   $about->counter3 }}"
                    aria-required="true">
            </div>
        </div>
    </div>

    <div class="col">
        <div class="card">
            <div class="header">
                <h2>{{ trans('backend.counter') }} 4</h2>
            </div>
            <div class="body">
                <input type="text" class="form-control" name="counter4" value="{{   $about->counter4 }}"
                    aria-required="true">
            </div>
        </div>
    </div>
</div>

                </div>
            </div>
        </div>
    </div>
</div>





<div class="row">
    <div class="col-sm-12">
        <div class="card overflow-hidden">

            <div class="card-content">
                <div class="card-body">

    <button type="submit" class="btn btn-primary btn-round">{{ trans('backend.save') }}</button>
    <a type="button" class="btn btn-warning" href="{{   route('admin.dashboard')   }}">{{ trans('backend.back') }}</a>


                </div>
            </div>
        </div>
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
