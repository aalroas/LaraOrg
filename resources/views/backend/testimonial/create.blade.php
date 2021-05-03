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

              <form role="form" action="{{ route('admin.testimonial.store') }}" method="post" enctype="multipart/form-data">
                  {{ csrf_field() }}


                  <div class="row clealfix">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="header">
                                    <h2>{{ trans('backend.image') }}</h2>
                                </div>
                                <div class="body">
                                    <input type="file" class="dropify"
                                        data-default-file=""
                                        data-allowed-file-extensions="png jpg jpeg" name="image" required>
                                </div>
                            </div>
                        </div>
                  </div>


<div class="row">
    <div class="col-sm-12">
        <div class="card overflow-hidden">
            <div class="card-content">
                <div class="card-body">
                    <ul class="nav nav-tabs nav-justified" id="myTabtestimonial" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab-justified" data-toggle="tab" href="#home-testimonial"
                                role="tab" aria-controls="home-just" aria-selected="false">[ {{trans('backend.arabic') }} ]</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab-justified" data-toggle="tab" href="#profile-testimonial"
                                role="tab" aria-controls="profile-just" aria-selected="true">[ {{trans('backend.english') }} ]</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="messages-tab-justified" data-toggle="tab" href="#messages-testimonial"
                                role="tab" aria-controls="messages-just" aria-selected="false">{{trans('backend.turkish')}}</a>
                        </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content pt-1">
                        <div class="tab-pane active" id="home-testimonial" role="tabpanel"
                            aria-labelledby="home-tab-justified">
                            <h4 class="card-title">
                                {{ trans('backend.title') }}</h4>

                            <input type="text" class="form-control" name="title_ar" aria-required="true">
                            <h4 class="card-title">
                                {{ trans('backend.text') }}</h4>
                            <textarea type="text" class="form-control" name="text_ar"> </textarea>
                        </div>
                        <div class="tab-pane" id="profile-testimonial" role="tabpanel" aria-labelledby="profile-tab-justified">
                            <h4 class="card-title">
                                {{ trans('backend.title') }}</h4>

                            <input type="text" class="form-control" name="title_en" aria-required="true">
                            <h4 class="card-title">
                                {{ trans('backend.text') }}</h4>
                            <textarea type="text" class="form-control" name="text_en"> </textarea>
                            </textarea>
                        </div>
                        <div class="tab-pane" id="messages-testimonial" role="tabpanel"
                            aria-labelledby="messages-tab-justified">
                            <h4 class="card-title">
                                {{ trans('backend.title') }}</h4>

                            <input type="text" class="form-control" name="title_tr" aria-required="true">
                            <h4 class="card-title">
                                {{ trans('backend.text') }}</h4>
                            <textarea type="text" class="form-control" name="text_tr"> </textarea>
                        </div>
                    </div>
                </div>
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


                <input type="text" name="url" class="form-control">


            </div>
        </div>
    </div>




</div>



            <div class="box-footer">
              <button type="submit" class="btn btn-primary">{{ trans('backend.save') }}</button>
              <a  type="button"  class="btn btn-warning" href="{{   route('admin.testimonial.index')   }}">{{ trans('backend.back') }}</a>
            </div>
          </form>
</div>
</div>
</div>
</div>
</div>
</section>

@endsection
