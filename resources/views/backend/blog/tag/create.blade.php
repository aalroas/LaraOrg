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

                        <form role="form" action="{{ route('admin.tag.store') }}" class="form form-horizontal"
                            method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-5">
                                        <div class="form-group row">
                                            <div class="col-md-4">
                                                <span>{{ trans('backend.name') }} [ {{trans('backend.arabic') }} ]</span>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="text" id="name_ar" class="form-control" name="name_ar"
                                                    placeholder="{{ trans('backend.name') }}">
                                            </div>
                                        </div>




                                        <div class="form-group row">
                                            <div class="col-md-4">
                                                <span>{{ trans('backend.name') }} [ {{trans('backend.english') }} ]</span>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="text" id="name_en" class="form-control" name="name_en"
                                                    placeholder="{{ trans('backend.name') }}">
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <div class="col-md-4">
                                                <span>{{ trans('backend.name') }} [ {{trans('backend.turkish') }} ]</span>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="text" id="name_tr" class="form-control" name="name_tr"
                                                    placeholder="{{ trans('backend.name') }}">
                                            </div>
                                        </div>


                                    </div>
                                    <div class="col-5">
                                        <div class="form-group row">
                                            <div class="col-md-4">
                                                <span>{{ trans('backend.slug') }}</span>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="text" id="slug" class="form-control" name="slug"
                                                    placeholder="{{ trans('backend.slug') }}">
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
