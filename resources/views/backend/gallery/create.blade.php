@extends('backend.layouts.app')
@section('content')


<section id="basic-input">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">{{ trans('backend.galleries') }}</h4>
                    @include('includes.partials.messages')
                </div>
                <div class="card-content">
                    <div class="card-body">




        <form role="form" action="{{ route('admin.gallery.store') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
 <div class="row">

    <div class="col-8">

<div class="card">
    <div class="header">
        <h2>{{ trans('backend.images') }}</h2>
    </div>
    <div class="body">
        <div class="file-loading">
   <input id="file-1" type="file" name="gallery_images[]" multiple class="file" data-overwrite-initial="false"
        data-min-file-count="0">
        </div>
    </div>
</div>

<script type="text/javascript">
    $("#file-1").fileinput({
            rtl: true,
            showUpload: false,
            theme: 'fa',
            uploadUrl: "/image-view",
            uploadExtraData: function() {
                return {
                    _token: $("input[name='_token']").val(),
                };
            },
            allowedFileExtensions: ['jpg', 'png', 'jpeg'],
            overwriteInitial: false,
            maxFilesNum: 20,
            slugCallback: function (filename) {
                return filename.replace('(', '_').replace(']', '_');
            }
        });
</script>
    </div>

    <div class="col-4">

        <div class="card">
            <div class="header">
                <h2>{{ trans('backend.video_url') }}</h2>
            </div>
            <div class="body">

                    <input class="form-control"  type="text" name="video_url" >

            </div>
        </div>

    </div>


</div>
            <br>
            <br>
            <div class="row clealfix">
                <div class="col-sm-4">
                    <div class="card">
                        <div class="header">
                            <h2>{{ trans('backend.title') }} [ {{trans('backend.arabic') }} ]</h2>
                        </div>
                        <div class="body">

                            <input type="text" class="form-control" id="title_ar" name="title_ar">

                        </div>
                    </div>
                </div>


                <div class="col-sm-4">
                    <div class="card">
                        <div class="header">
                            <h2>{{ trans('backend.title') }} [ {{trans('backend.english') }} ]</h2>
                        </div>
                        <div class="body">

                            <input type="text" class="form-control" id="title_en" name="title_en">

                        </div>
                    </div>
                </div>


                <div class="col-sm-4">
                    <div class="card">
                        <div class="header">
                            <h2>{{ trans('backend.title') }} [ {{trans('backend.turkish') }} ]</h2>
                        </div>
                        <div class="body">

                            <input type="text" class="form-control" id="title_tr" name="title_tr">

                        </div>
                    </div>
                </div>

            </div>



<div class="row clealfix">
                <div class="col-sm-4">
                    <div class="card">
                        <div class="header">
                            <h2>{{ trans('backend.type') }}</h2>
                        </div>
                        <div class="body">
                            <div class="multiselect_div">
                                <select id="single-selection" name="type"  >
<option value="0"> {{ trans('backend.video') }} </option>
<option value="1"> {{ trans('backend.image') }} </option>
<option value="2"> {{ trans('backend.both') }} </option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="box-footer">
                <button type="submit" class="btn btn-primary">{{ trans('backend.save') }}</button>
                <a type="button" class="btn btn-warning"
                    href="{{   route('admin.gallery.index')   }}">{{ trans('backend.back') }}</a>
            </div>
 </form>


    </div>
    </div>
    </div>
    </div>
    </div>
    </section>

    @endsection
