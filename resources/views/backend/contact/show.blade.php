@extends('backend.layouts.app')
@section('content')


<section id="basic-input">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">{{ trans('backend.contacts_forms') }}</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">


                    <div class="row clealfix">
                        <div class="col-sm-4">
                            <div class="card">
                                <div class="header">
                                    <h2>{{ trans('backend.name') }}</h2>
                                </div>
                                <div class="body">

                                    <input readonly
                                        value="@if (old('name')){{ old('name') }}@else{{ $contact->name }}@endif"
                                        type="text" class="form-control" id="name" name="name">

                                </div>
                            </div>
                        </div>


                        <div class="col-sm-4">
                            <div class="card">
                                <div class="header">
                                    <h2>{{ trans('backend.subject') }} </h2>
                                </div>
                                <div class="body">

                                    <input readonly
                                        value="@if (old('subject')){{ old('subject') }}@else{{ $contact->subject }}@endif"
                                        type="text" class="form-control" id="subject" name="subject">

                                </div>
                            </div>
                        </div>


                        <div class="col-sm-4">
                            <div class="card">
                                <div class="header">
                                    <h2>{{ trans('backend.phone') }}</h2>
                                </div>
                                <div class="body">

                                    <input readonly
                                        value="@if (old('phone')){{ old('phone') }}@else{{ $contact->phone }}@endif"
                                        type="text" class="form-control" id="phone" name="phone">

                                </div>
                            </div>
                        </div>
<div class="col-sm-4">
    <div class="card">
        <div class="header">
            <h2>{{ trans('backend.email') }}</h2>
        </div>
        <div class="body">
            <input readonly value="@if (old('email')){{ old('email') }}@else{{ $contact->email }}@endif" type="text"
                class="form-control" id="email" name="email">
        </div>
    </div>
</div>
                    </div>
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="header">
                                <h2>{{ trans('backend.Message') }}</h2>
                            </div>
                            <div class="body">
                                   <p>{!! $contact->message !!}</p>
                            </div>
                        </div>
                    </div>
            </div>


<div class="box-footer">

        <a type="button" class="btn btn-warning" href="{{   route('admin.contact_forms.index')   }}">{{ trans('backend.back') }}</a>
    </div>
<br>
    </div>
    </div>
    </div>
    </div>
    </div>
    </section>
@endsection

