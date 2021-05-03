@extends('backend.layouts.app')
@section('content')


<section id="basic-input">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">{{ trans('backend.sliders') }}</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">


            <form role="form" action="{{ route('admin.slider.update',$slider->id) }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}
<div class="row clealfix">
    <div class="col-sm-12">
        <div class="card">
            <div class="header">
                <h2>{{ trans('backend.image') }}</h2>
            </div>
            <div class="body">
                <input type="file" class="form-control dropify" id="image" data-default-file="{{ URL::to('uploads/sliders', $slider->image) }}"
                    data-allowed-file-extensions="png jpg jpeg" name="image">
            </div>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-sm-12">
        <div class="card overflow-hidden">
            <div class="card-content">
                <div class="card-body">
                    <ul class="nav nav-tabs nav-justified" id="myTabslider" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab-justified" data-toggle="tab" href="#home-slider"
                                role="tab" aria-controls="home-just" aria-selected="false">[ {{trans('backend.arabic') }} ]</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab-justified" data-toggle="tab" href="#profile-slider"
                                role="tab" aria-controls="profile-just" aria-selected="true">[ {{trans('backend.english') }} ]</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="messages-tab-justified" data-toggle="tab" href="#messages-slider"
                                role="tab" aria-controls="messages-just" aria-selected="false">{{trans('backend.turkish')}}</a>
                        </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content pt-1">
                        <div class="tab-pane active" id="home-slider" role="tabpanel"
                            aria-labelledby="home-tab-justified">
                            <h4 class="card-title">
                                {{ trans('backend.title') }}</h4>

                            <input type="text" class="form-control" name="title_ar" value="{{ $slider->title_ar }}"
                                aria-required="true">
                            <h4 class="card-title">
                                {{ trans('backend.text') }}</h4>
                            <textarea type="text" class="form-control" name="text_ar">{!!$slider->text_ar !!}</textarea>
                        </div>
                        <div class="tab-pane" id="profile-slider" role="tabpanel" aria-labelledby="profile-tab-justified">
                            <h4 class="card-title">
                                {{ trans('backend.title') }}</h4>

                            <input type="text" class="form-control" name="title_en" value="{{   $slider->title_en }}"
                                aria-required="true">
                            <h4 class="card-title">
                                {{ trans('backend.text') }}</h4>
                            <textarea type="text" class="form-control" name="text_en">{!! $slider->text_en !!}</textarea>
                            </textarea>
                        </div>
                        <div class="tab-pane" id="messages-slider" role="tabpanel"
                            aria-labelledby="messages-tab-justified">
                            <h4 class="card-title">
                                {{ trans('backend.title') }}</h4>

                            <input type="text" class="form-control" name="title_tr" value="{{   $slider->title_tr }}"
                                aria-required="true">
                            <h4 class="card-title">
                                {{ trans('backend.text') }}</h4>
                            <textarea type="text" class="form-control" name="text_tr">{!! $slider->text_tr !!}</textarea>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row clealfix">
                <div class="col-sm-6">
                    <div class="card">
                        <div class="header">
                            <h2>{{ trans('backend.url') }}</h2>
                        </div>
                        <div class="body">
                            <input value="@if (old('url')){{ old('url') }}@else{{ $slider->url }}@endif" type="text"
                                autocomplete="off" name="url" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card">
                        <div class="header">
                            <h2>{{ trans('backend.status') }}</h2>
                        </div>
                        <div class="body">
                            <div class="multiselect_div">
                                <select id="single-selection" name="status" class="multiselect multiselect-custom">
                                    <option @if($slider->status == 1) selected @endif value="1" >{{ trans('backend.yes') }}</option>
                                    <option @if($slider->status == 0) selected @endif value="0">{{ trans('backend.no') }}</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




<div class="box-footer">
    <button type="submit" class="btn btn-primary">{{ trans('backend.save') }}</button>
    <a type="button" class="btn btn-warning" href="{{   route('admin.slider.index')   }}">{{ trans('backend.back') }}</a>
</div>

            </form>
       </div>
    </div>
    </div>
    </div>
    </div>
    </section>

    @endsection
