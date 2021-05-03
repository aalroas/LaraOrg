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




        <form role="form" action="{{ route('admin.activitytype.store') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}

            <div class="row clealfix">
                <div class="col-sm-4">
                    <div class="card">
                        <div class="header">
                            <h2>{{ trans('backend.name') }} [ {{trans('backend.arabic') }} ]</h2>
                        </div>
                        <div class="body">

                            <input type="text" class="form-control" id="name_ar" name="name_ar">

                        </div>
                    </div>
                </div>


                <div class="col-sm-4">
                    <div class="card">
                        <div class="header">
                            <h2>{{ trans('backend.name') }} [ {{trans('backend.english') }} ]</h2>
                        </div>
                        <div class="body">

                            <input type="text" class="form-control" id="name_en" name="name_en">

                        </div>
                    </div>
                </div>


                <div class="col-sm-4">
                    <div class="card">
                        <div class="header">
                            <h2>{{ trans('backend.name') }} [ {{trans('backend.turkish') }} ]</h2>
                        </div>
                        <div class="body">

                            <input type="text" class="form-control" id="name_tr" name="name_tr">

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


                        <textarea id="ckeditor1" type="text" class="form-control"
                            name="text_ar"></textarea>


                    </div>
                </div>
            </div>


            <div class="col-sm-4">
                <div class="card">
                    <div class="header">
                        <h2>{{ trans('backend.text') }} [ {{trans('backend.english') }} ]</h2>
                    </div>
                    <div class="body">

                        <textarea id="ckeditor1" type="text" class="form-control"
                            name="text_en"></textarea>
                    </div>
                </div>
            </div>


            <div class="col-sm-4">
                <div class="card">
                    <div class="header">
                        <h2>{{ trans('backend.text') }} [ {{trans('backend.turkish') }} ]</h2>
                    </div>
                    <div class="body">

                        <textarea id="ckeditor1" type="text" class="form-control"
                            name="text_tr"></textarea>
                    </div>
                </div>
            </div>

            </div>



            <div class="box-footer">
                <button type="submit" class="btn btn-primary">{{ trans('backend.save') }}</button>
                <a type="button" class="btn btn-warning"
                    href="{{   route('admin.field.index')   }}">{{ trans('backend.back') }}</a>
            </div>
 </form>


    </div>
    </div>
    </div>
    </div>
    </div>
    </section>

    @endsection
