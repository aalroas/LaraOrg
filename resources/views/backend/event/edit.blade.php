@extends('backend.layouts.app')
@section('content')


<section id="basic-input">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">{{ trans('backend.events') }}</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">

                <form method="post" class="validate" autocomplete="off" action="{{route('admin.events.update', $id)}}"
                    enctype="multipart/form-data">
                    {{ csrf_field()}}
                    {{ method_field('PATCH') }}
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="control-label">{{ trans('Event image') }}</label>
                                            <input type="file" class="form-control dropify"   name="image"
                                                data-max-file-size="8M"
                                                data-allowed-file-extensions="png jpg jpeg PNG JPG JPEG"
                                        data-default-file="{{asset('uploads/events')}}/{{$event->image}}">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="control-label">{{ trans('Start Date') }}</label>
                                            <input type="text" class="form-control datetimepicker" value="{{ $event->start_date}}" name="start_date"
                                                 required>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="control-label">{{ trans('End Date') }}</label>
                                            <input type="text" class="form-control datetimepicker" value="{{ $event->end_date}}" name="end_date"
                                                value="{{ old('end_date') }}" required>
                                        </div>
                                    </div>
                                </div>
                            </div>




                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="control-label">{{ trans('Name') }} [ AR ]</label>
                                            <input type="text" class="form-control" value="{{ $event->name_ar}}" name="name_ar"
                                                value="{{ old('name_ar') }}" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="control-label">{{ trans('text') }} [ AR ] </label>
                                            <textarea class="form-control summernote"  name="text_ar"
                                                required>{{ $event->text_ar}}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="control-label">{{ trans('Location') }} [ AR ]</label>
                                            <input type="text" class="form-control" value="{{ $event->location_ar}}" name="location_ar"
                                                  required>
                                        </div>
                                    </div>
                                </div>
                            </div>






                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="control-label">{{ trans('Name') }} [ EN ]</label>
                                            <input type="text" class="form-control" value="{{ $event->name_en}}" name="name_en"
                                                value="{{ old('name_en') }}" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="control-label">{{ trans('Text') }} [ EN ] </label>
                                            <textarea class="form-control summernote"   name="text_en"
                                                required>{{ $event->text_en }}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="control-label">{{ trans('Location') }} [ EN ]</label>
                                            <input type="text" class="form-control" value="{{ $event->location_en}}" name="location_en"
                                               required>
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="control-label">{{ trans('Name') }} [ TR ]</label>
                                            <input type="text" class="form-control" value="{{ $event->name_tr}}" name="name_tr"
                                              required>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="control-label">{{ trans('Text') }} [ TR ]</label>
                                            <textarea class="form-control summernote"  name="text_tr"
                                                required>{{ $event->text_tr}}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="control-label">{{ trans('Location') }} [ TR ]</label>
                                            <input type="text" class="form-control" value="{{ $event->location_tr}}" name="location_tr"
                                             required>
                                        </div>
                                    </div>
                                </div>
                            </div>




                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">{{ trans('backend.save') }}</button>
                                <a type="button" class="btn btn-warning"
                                    href="{{   route('admin.events.index')   }}">{{ trans('backend.back') }}</a>
                            </div>
                        </form>

  </div>
</div>
</div>
</div>
</div>
</section>

@endsection
