@extends('backend.layouts.app')
@section('content')


<section id="basic-input">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">{{ trans('backend.testimonials') }}</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">


            <form role="form" action="{{ route('admin.testimonial.update',$testimonial->id) }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}
<div class="row clealfix">
    <div class="col-sm-12">
        <div class="card">
            <div class="header">
                <h2>{{ trans('backend.image') }}</h2>
            </div>
            <div class="body">
                <input type="file" class="form-control dropify" id="image" data-default-file="{{ URL::to('uploads/testimonials', $testimonial->image) }}"
                    data-allowed-file-extensions="png jpg jpeg" name="image">
            </div>
        </div>
    </div>
</div>



<div class="row clealfix">
    <div class="col-sm-4">
        <div class="card">
            <div class="header">
                <h2>{{ trans('backend.title') }} [ AR ]</h2>
            </div>
            <div class="body">

                <input  value="@if (old('title_ar')){{ old('title_ar') }}@else{{ $testimonial->title_ar }}@endif" type="text" class="form-control" id="title_ar" name="title_ar">

            </div>
        </div>
    </div>


    <div class="col-sm-4">
        <div class="card">
            <div class="header">
                <h2>{{ trans('backend.title') }} [ EN ]</h2>
            </div>
            <div class="body">

                <input value="@if (old('title_en')){{ old('title_en') }}@else{{ $testimonial->title_en }}@endif" type="text" class="form-control" id="title_en" name="title_en">

            </div>
        </div>
    </div>


    <div class="col-sm-4">
        <div class="card">
            <div class="header">
                <h2>{{ trans('backend.title') }} [ TR ]</h2>
            </div>
            <div class="body">

                <input value="@if (old('title_tr')){{ old('title_tr') }}@else{{ $testimonial->title_tr }}@endif" type="text" class="form-control" id="title_tr" name="title_tr">

            </div>
        </div>
    </div>

</div>


<div class="row clealfix">
    <div class="col-sm-4">
        <div class="card">
            <div class="header">
                <h2>{{ trans('backend.text') }} [ AR ]</h2>
            </div>
            <div class="body">


                <textarea  type="text" class="form-control" name="text_ar">{{ $testimonial->text_ar }}</textarea>

            </div>
        </div>
    </div>


    <div class="col-sm-4">
        <div class="card">
            <div class="header">
                <h2>{{ trans('backend.text') }} [ EN ]</h2>
            </div>
            <div class="body">
                <textarea  type="text" class="form-control" name="text_en">{{ $testimonial->text_en }}</textarea>


            </div>
        </div>
    </div>


    <div class="col-sm-4">
        <div class="card">
            <div class="header">
                <h2>{{ trans('backend.text') }} [ TR ]</h2>
            </div>
            <div class="body">

                <textarea  type="text" class="form-control" name="text_tr">{{ $testimonial->text_tr }}</textarea>


            </div>
        </div>
    </div>

</div>

<div class="row clealfix">
    <div class="col-sm-12">
        <div class="card">
            <div class="header">
                <h2>{{ trans('backend.url') }}</h2>
            </div>
            <div class="body">


                <input type="text" name="url" class="form-control" value="{{ $testimonial->url }}">


            </div>
        </div>
    </div>




</div>




<div class="box-footer">
    <button type="submit" class="btn btn-primary">{{ trans('backend.save') }}</button>
    <a type="button" class="btn btn-warning" href="{{   route('admin.testimonial.index')   }}">{{ trans('backend.back') }}</a>
</div>

            </form>
   </div>
</div>
</div>
</div>
</div>
</section>

@endsection
