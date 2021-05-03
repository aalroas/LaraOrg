{{-- @extends('backend.layouts.app')
@section('content')
<!-- Basic Horizontal form layout section start -->
<section id="basic-horizontal-layouts">
    <div class="row match-height">
        <div class="col-md-12 col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"> {{ trans('backend.new') }}</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form role="form" action="{{ route('admin.tag.update',$tag->id) }}"
                            class="form form-horizontal" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            {{ method_field('PATCH') }}



                            <div class="form-body">
                                <div class="row">
                                    <div class="col-5">
                                        <div class="form-group row">
                                            <div class="col-md-4">
                                                <span>{{ trans('backend.name') }} [ {{trans('backend.arabic') }} ]</span>
                                            </div>
                                            <div class="col-md-8">
                                                <input
                                                    value="@if (old('name_ar')){{ old('name_ar') }}@else{{ $tag->name_ar }}@endif"
                                                    type="text" class="form-control" id="name_ar" name="name_ar">
                                            </div>
                                        </div>




                                        <div class="form-group row">
                                            <div class="col-md-4">
                                                <span>{{ trans('backend.name') }} [ {{trans('backend.english') }} ]</span>
                                            </div>
                                            <div class="col-md-8">
                                                <input
                                                    value="@if (old('name_en')){{ old('name_en') }}@else{{ $tag->name_en }}@endif"
                                                    type="text" class="form-control" id="name_en" name="name_en">
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <div class="col-md-4">
                                                <span>{{ trans('backend.name') }} [ {{trans('backend.turkish') }} ]</span>
                                            </div>
                                            <div class="col-md-8">
                                                <input
                                                    value="@if (old('name_tr')){{ old('name_tr') }}@else{{ $tag->name_tr }}@endif"
                                                    type="text" class="form-control" id="name_tr" name="name_tr">
                                            </div>
                                        </div>


                                    </div>
                                    <div class="col-5">
                                        <div class="form-group row">
                                            <div class="col-md-4">
                                                <span>{{ trans('backend.slug') }}</span>
                                            </div>
                                            <div class="col-md-8">
                                                <input
                                                    value="@if (old('slug')){{ old('slug') }}@else{{ $tag->slug }}@endif"
                                                    type="text" autocomplete="off" name="slug" class="form-control">
                                            </div>
                                        </div>
                                    </div>



                                    <div class="col-md-12 offset-md-4">

                                        <button type="submit"
                                            class="btn btn-primary mr-1 mb-1">{{ trans('backend.save') }}</button>
                                        <button type="reset"
                                            class="btn btn-outline-warning mr-1 mb-1">{{ trans('backend.reset') }}</button>
                                        <button type="button" class="btn btn-outline-warning mr-1 mb-1"> <a
                                                href="{{   route('admin.tag.index')   }}">{{ trans('backend.back') }}</a></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- // Basic Horizontal form layout section end -->





@endsection --}}
