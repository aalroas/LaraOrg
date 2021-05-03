@extends('backend.layouts.app')
@section('content')


<section id="basic-input">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">{{ trans('frontend.units') }}</h4>
                    @include('includes.partials.messages')
                </div>
                <div class="card-content">
                    <div class="card-body">


        <form role="form" action="{{ route('admin.unittype.update',$unittype->id) }}" method="post"
            enctype="multipart/form-data">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}
<div class="row">
    <div class="col-sm-12">
        <div class="card overflow-hidden">
            <div class="card-content">
                <div class="card-body">
                    <ul class="nav nav-tabs nav-justified" id="myTabunit" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab-justified" data-toggle="tab" href="#home-unit"
                                role="tab" aria-controls="home-just" aria-selected="false">[ {{trans('backend.arabic') }} ]</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab-justified" data-toggle="tab" href="#profile-unit"
                                role="tab" aria-controls="profile-just" aria-selected="true">[ {{trans('backend.english') }} ]</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="messages-tab-justified" data-toggle="tab" href="#messages-unit"
                                role="tab" aria-controls="messages-just" aria-selected="false">{{trans('backend.turkish')}}</a>
                        </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content pt-1">
                        <div class="tab-pane active" id="home-unit" role="tabpanel"
                            aria-labelledby="home-tab-justified">
                             <h4 class="card-title">
                                {{ trans('backend.title') }}</h4>

                            <input type="text" class="form-control" name="name_ar"
                                value="{{ $unittype->name_ar }}" aria-required="true">
                            <h4 class="card-title">
                                {{ trans('backend.text') }}</h4>
                            <textarea type="text" class="form-control"
                                name="text_ar">{!! $unittype->text_ar !!}</textarea>
                        </div>
                        <div class="tab-pane" id="profile-unit" role="tabpanel"
                            aria-labelledby="profile-tab-justified">
                             <h4 class="card-title">
                                {{ trans('backend.title') }}</h4>

                            <input type="text" class="form-control" name="name_en"
                                value="{{   $unittype->name_en }}" aria-required="true">
                            <h4 class="card-title">
                                {{ trans('backend.text') }}</h4>
                            <textarea type="text" class="form-control"
                                name="text_en">{!! $unittype->text_en !!}</textarea>
                            </textarea>
                        </div>
                        <div class="tab-pane" id="messages-unit" role="tabpanel"
                            aria-labelledby="messages-tab-justified">
                             <h4 class="card-title">
                                {{ trans('backend.title') }}</h4>

                              <input type="text"
                                class="form-control" name="name_tr" value="{{   $unittype->name_tr }}"
                                aria-required="true">
                            <h4 class="card-title">
                                {{ trans('backend.text') }}</h4>
                            <textarea type="text" class="form-control"
                                name="text_tr">{!! $unittype->text_tr !!}</textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

            <div class="box-footer">
                <button type="submit" class="btn btn-primary">{{ trans('backend.save') }}</button>
                <a type="button" class="btn btn-warning"
                    href="{{   route('admin.unittype.index')   }}">{{ trans('backend.back') }}</a>
            </div>
</form>


</div>
</div>
</div>
</div>
</div>
</section>


@endsection
