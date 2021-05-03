@extends('backend.layouts.app')
@section('content')


<section id="basic-input">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">{{ trans('backend.activity_type') }}</h4>
                    @include('includes.partials.messages')
                </div>
                <div class="card-content">
                    <div class="card-body">


        <form role="form" action="{{ route('admin.activitytype.update',$activity_type->id) }}" method="post"
            enctype="multipart/form-data">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}


            <div class="row clealfix">
                <div class="col-sm-4">
                    <div class="card">
                        <div class="header">
                            <h2>{{ trans('backend.title') }} [ {{trans('backend.arabic') }} ]</h2>
                        </div>
                        <div class="body">

                            <input
                                value="@if (old('name_ar')){{ old('name_ar') }}@else{{ $activity_type->name_ar }}@endif"
                                type="text" class="form-control" id="name_ar" name="name_ar">

                        </div>
                    </div>
                </div>


                <div class="col-sm-4">
                    <div class="card">
                        <div class="header">
                            <h2>{{ trans('backend.title') }} [ {{trans('backend.english') }} ]</h2>
                        </div>
                        <div class="body">

                            <input
                                value="@if (old('name_en')){{ old('name_en') }}@else{{ $activity_type->name_en }}@endif"
                                type="text" class="form-control" id="name_en" name="name_en">

                        </div>
                    </div>
                </div>


                <div class="col-sm-4">
                    <div class="card">
                        <div class="header">
                            <h2>{{ trans('backend.title') }} [ {{trans('backend.turkish') }} ]</h2>
                        </div>
                        <div class="body">

                            <input
                                value="@if (old('name_tr')){{ old('name_tr') }}@else{{ $activity_type->name_tr }}@endif"
                                type="text" class="form-control" id="name_tr" name="name_tr">

                        </div>
                    </div>
                </div>

            </div>


            <div class="row clealfix">
            <div class="col-sm-4">
                <div class="card">
                    <div class="header">
                        <h2>{{ trans('backend.text') }} [ {{trans('backend.arabic') }} ]</h2>
                    </div>
                    <div class="body">


                        <textarea id="ckeditor1" type="text" class="form-control" name="text_ar">{!! $activity_type->text_ar !!}</textarea>


                    </div>
                </div>
            </div>


            <div class="col-sm-4">
                <div class="card">
                    <div class="header">
                        <h2>{{ trans('backend.text') }} [ {{trans('backend.english') }} ]</h2>
                    </div>
                    <div class="body">

                     <textarea id="ckeditor1" type="text" class="form-control" name="text_en">{!! $activity_type->text_en !!}</textarea>
                    </div>
                </div>
            </div>


            <div class="col-sm-4">
                <div class="card">
                    <div class="header">
                        <h2>{{ trans('backend.text') }} [ {{trans('backend.turkish') }} ]</h2>
                    </div>
                    <div class="body">

                    <textarea id="ckeditor1" type="text" class="form-control" name="text_tr">{!! $activity_type->text_tr !!}</textarea>
                    </div>
                </div>
            </div>

            </div>







            <div class="box-footer">
                <button type="submit" class="btn btn-primary">{{ trans('backend.save') }}</button>
                <a type="button" class="btn btn-warning"
                    href="{{   route('admin.activitytype.index')   }}">{{ trans('backend.back') }}</a>
            </div>
</form>


</div>
</div>
</div>
</div>
</div>
</section>


@endsection
