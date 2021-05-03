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


    <section id="statistics-card">
        <div class="row">
         @foreach ($gallery->gallery_images as $gallery_images)
            <div   id="{{ $gallery_images->id }}" class="col-xl-2 col-md-4 col-sm-6">
                <div class="card text-center">
                    <div class="card-content">
                        <div class="card-body">

                                <img width="200" height="100" class="user-photo"
                                    src="{{ URL::to('uploads/galleries',$gallery_images->gallery_image_path) }}" alt="">


                            <br>
                           <button class="deleteimage" data-id="{{ $gallery_images->id }}"
                                data-token="{{ csrf_token() }}">{{ trans('backend.delete') }}</button>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>


                        <script>
                            $(".deleteimage").click(function(){
                                var id = $(this).data("id");
                                var token = $(this).data("token");
                                $.ajax(
                                {
                                url: "<?php echo url('admin/gallery/image') ?>/"+id,
                                type: 'delete',
                                dataType: "JSON",
                                data: {
                                "id": id,
                                "_method": 'delete',
                                "_token": token,
                                },
                                success: function ()
                                {

                                console.log("it Work");
                                $('#'+id).hide();
                                }
                                });

                                });

                        </script>
        <form role="form" action="{{ route('admin.gallery.update',$gallery->id) }}" method="post"
            enctype="multipart/form-data">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}


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

          <input value="@if (old('video_url')){{ old('video_url') }}@else{{ $gallery->video_url }}@endif" type="text"
            class="form-control" id="video_url" name="video_url">

                </div>
            </div>

        </div>


            </div>









            <div class="row clealfix">
                <div class="col-sm-4">
                    <div class="card">
                        <div class="header">
                            <h2>{{ trans('backend.title') }} [ {{trans('backend.arabic') }} ]</h2>
                        </div>
                        <div class="body">

                            <input
                                value="@if (old('title_ar')){{ old('title_ar') }}@else{{ $gallery->title_ar }}@endif"
                                type="text" class="form-control" id="title_ar" name="title_ar">

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
                                value="@if (old('title_en')){{ old('title_en') }}@else{{ $gallery->title_en }}@endif"
                                type="text" class="form-control" id="title_en" name="title_en">

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
                                value="@if (old('title_tr')){{ old('title_tr') }}@else{{ $gallery->title_tr }}@endif"
                                type="text" class="form-control" id="title_tr" name="title_tr">

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

<select id="single-selection" name="type">
        <option @if ($gallery->type === 0 ) selected @endif value="0"> {{ trans('backend.video') }} </option>
        <option @if ($gallery->type === 1 ) selected @endif value="1"> {{ trans('backend.image') }} </option>
        <option @if ($gallery->type === 2 ) selected @endif value="2"> {{ trans('backend.both') }} </option>
    </select>



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
