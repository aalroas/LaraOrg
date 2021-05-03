@extends('backend.layouts.app')
@section('content')


<section id="basic-input">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">{{ trans('backend.teams') }}</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">


                        <form role="form" action="{{ route('admin.team.update',$team->id) }}" method="post"
                            enctype="multipart/form-data">
                            {{ csrf_field() }}
                            {{ method_field('PATCH') }}
                            <div class="row clealfix">
                                <div class="col-sm-12">
                                    <div class="card">
                                        <div class="header">
                                            <h2>{{ trans('backend.image') }}</h2>
                                        </div>
                                        <div class="body">
                                            <input type="file" class="form-control dropify" id="image"
                                                data-default-file="{{ URL::to('uploads/teams', $team->image) }}"
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
                                                <ul class="nav nav-tabs nav-justified" id="myTabteam" role="tablist">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" id="home-tab-justified"
                                                            data-toggle="tab" href="#home-team" role="tab"
                                                            aria-controls="home-just" aria-selected="false">[ {{trans('backend.arabic') }} ]</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" id="profile-tab-justified" data-toggle="tab"
                                                            href="#profile-team" role="tab"
                                                            aria-controls="profile-just" aria-selected="true">[ {{trans('backend.english') }} ]</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" id="messages-tab-justified"
                                                            data-toggle="tab" href="#messages-team" role="tab"
                                                            aria-controls="messages-just" aria-selected="false">{{trans('backend.turkish')}}</a>
                                                    </li>
                                                </ul>
                                                <!-- Tab panes -->
                                                <div class="tab-content pt-1">
                                                    <div class="tab-pane active" id="home-team" role="tabpanel"
                                                        aria-labelledby="home-tab-justified">
                                                        <h4 class="card-title">
                                                            {{ trans('backend.name') }}</h4>

                                                        <input type="text" class="form-control" name="name_ar"
                                                            value="{{ $team->name_ar }}" aria-required="true">

                                                       <h4 class="card-title">
                                                            {{ trans('backend.position') }}</h4>

                                                        <input type="text" class="form-control" name="position_ar" value="{{ $team->position_ar }}" aria-required="true">



                                                            <h4 class="card-title">
                                                            {{ trans('backend.text') }}</h4>
                                                        <textarea type="text" class="form-control"
                                                            name="text_ar">{!!$team->text_ar !!}</textarea>
                                                    </div>
                                                    <div class="tab-pane" id="profile-team" role="tabpanel"
                                                        aria-labelledby="profile-tab-justified">
                                                        <h4 class="card-title">
                                                            {{ trans('backend.name') }}</h4>

                                                        <input type="text" class="form-control" name="name_en"
                                                            value="{{   $team->name_en }}" aria-required="true">

                                                            <h4 class="card-title">
                                                                                {{ trans('backend.position') }}</h4>

                                                                            <input type="text" class="form-control" name="position_en" value="{{ $team->position_en }}" aria-required="true">



                                                        <h4 class="card-title">
                                                            {{ trans('backend.text') }}</h4>
                                                        <textarea type="text" class="form-control"
                                                            name="text_en">{!! $team->text_en !!}</textarea>
                                                        </textarea>
                                                    </div>
                                                    <div class="tab-pane" id="messages-team" role="tabpanel"
                                                        aria-labelledby="messages-tab-justified">
                                                        <h4 class="card-title">
                                                            {{ trans('backend.name') }}</h4>

                                                        <input type="text" class="form-control" name="name_tr"
                                                            value="{{   $team->name_tr }}" aria-required="true">
                                                            <h4 class="card-title">
                                                                                {{ trans('backend.position') }}</h4>

                                                                            <input type="text" class="form-control" name="position_tr" value="{{ $team->position_tr }}" aria-required="true">


                                                        <h4 class="card-title">
                                                            {{ trans('backend.text') }}</h4>
                                                        <textarea type="text" class="form-control"
                                                            name="text_tr">{!! $team->text_tr !!}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

<div class="row clealfix">
    <div class="col-sm-12">
        <div class="card">
            <div class="header">
                <h2>{{ trans('backend.email') }}</h2>
            </div>
            <div class="body">

                <input type="text" autocomplete="off" name="e_mail"  value="{{ $team->e_mail }}" class="form-control">

            </div>
        </div>
    </div>

</div>

<div class="row clealfix">
    <div class="col-sm-6">
        <div class="card">
            <div class="header">
                <h2>{{ trans('backend.twitter') }}</h2>
            </div>
            <div class="body">

                <input type="text" autocomplete="off" name="twitter"  value="{{ $team->twitter }}" class="form-control">

            </div>
        </div>
    </div>

    <div class="col-sm-6">
        <div class="card">
            <div class="header">
                <h2>{{ trans('backend.facebook') }}</h2>
            </div>
            <div class="body">

                <input type="text" autocomplete="off" name="facebook" value="{{ $team->facebook }}" class="form-control">

            </div>
        </div>
    </div>


</div>


<div class="row clealfix">
    <div class="col-sm-6">
        <div class="card">
            <div class="header">
                <h2>{{ trans('backend.instagram') }}</h2>
            </div>
            <div class="body">

                <input type="text" autocomplete="off" name="instagram" value="{{ $team->instagram }}"  class="form-control">

            </div>
        </div>
    </div>

    <div class="col-sm-6">
        <div class="card">
            <div class="header">
                <h2>{{ trans('backend.linkedin') }}</h2>
            </div>
            <div class="body">

                <input type="text" autocomplete="off" name="linkedin"  value="{{ $team->linkedin }}" class="form-control">

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
                                    href="{{   route('admin.team.index')   }}">{{ trans('backend.back') }}</a>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
