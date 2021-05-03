@extends('backend.layouts.app')
@section('content')


<section id="basic-input">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">{{ trans('backend.posts') }}</h4>
                    @include('includes.partials.messages')
                </div>
                <div class="card-content">
                    <div class="card-body">



    <section id="statistics-card">
        <div class="row">
      @foreach ($post->post_images as $post_images)
            <div  id="{{ $post_images->id }}"  class="col-xl-2 col-md-4 col-sm-6">
                <div class="card text-center">
                    <div class="card-content">
                        <div class="card-body">

                                <img width="200" height="100" class="user-photo" src="{{ URL::to('uploads/posts',$post_images->post_image_path) }}"
                                    alt="">


                            <br>
                           <button class="deleteimage" data-id="{{ $post_images->id }}"
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
                                url: "<?php echo url('admin/post/image') ?>/"+id,
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


        <form role="form" action="{{ route('admin.post.update',$post->id) }}" method="post"
            enctype="multipart/form-data">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}


            <div class="row">
                <div class="col-4">

                    <div class="card main-sectionx">
                        <div class="header">
                            <h2>{{ trans('backend.image') }}</h2>
                        </div>
                        <div class="body">
                            <input type="file" class="dropify" data-default-file="{{ URL::to('uploads/posts',$post->f_image) }}" data-allowed-file-extensions="png jpg jpeg"
                                name="f_image" >
                        </div>
                    </div>

                </div>
      <div class="col-8">

        <div class="card">
            <div class="header">
                <h2>{{ trans('backend.images') }}</h2>
            </div>
            <div class="body">
                <div class="file-loading">
                    <input id="file-1" type="file" name="post_images[]" multiple class="file" data-overwrite-initial="false"
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
            </div>









          <div class="row">
            <div class="col-sm-12">
                <div class="card overflow-hidden">
                    <div class="card-content">
                        <div class="card-body">
                            <ul class="nav nav-tabs nav-justified" id="myTabpost" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab-justified" data-toggle="tab"
                                        href="#home-post" role="tab" aria-controls="home-just"
                                        aria-selected="false">[ {{trans('backend.arabic') }} ]</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab-justified" data-toggle="tab" href="#profile-post"
                                        role="tab" aria-controls="profile-just" aria-selected="true">[ {{trans('backend.english') }} ]</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="messages-tab-justified" data-toggle="tab"
                                        href="#messages-post" role="tab" aria-controls="messages-just"
                                        aria-selected="false">{{trans('backend.turkish')}}</a>
                                </li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content pt-1">
                                <div class="tab-pane active" id="home-post" role="tabpanel"
                                    aria-labelledby="home-tab-justified">
                                    <h4 class="card-title">
                                        {{ trans('backend.title') }}</h4>

                                    <input type="text" class="form-control" name="title_ar" value="{{ $post->title_ar }}"
                                        aria-required="true">
                                    <h4 class="card-title">
                                        {{ trans('backend.text') }}</h4>
                                    <textarea type="text" class="form-control"
                                        name="text_ar">{!!$post->text_ar !!}</textarea>
                                </div>
                                <div class="tab-pane" id="profile-post" role="tabpanel"
                                    aria-labelledby="profile-tab-justified">
                                    <h4 class="card-title">
                                        {{ trans('backend.title') }}</h4>

                                    <input type="text" class="form-control" name="title_en"
                                        value="{{   $post->title_en }}" aria-required="true">
                                    <h4 class="card-title">
                                        {{ trans('backend.text') }}</h4>
                                    <textarea type="text" class="form-control"
                                        name="text_en">{!!$post->text_en !!}</textarea>
                                    </textarea>
                                </div>
                                <div class="tab-pane" id="messages-post" role="tabpanel"
                                    aria-labelledby="messages-tab-justified">
                                    <h4 class="card-title">
                                        {{ trans('backend.title') }}</h4>

                                    <input type="text" class="form-control" name="title_tr"
                                        value="{{   $post->title_tr }}" aria-required="true">
                                    <h4 class="card-title">
                                        {{ trans('backend.text') }}</h4>
                                    <textarea type="text" class="form-control"
                                        name="text_tr">{!! $post->text_tr !!}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

            <div class="row clealfix">
                <div class="col-sm-4">
                    <div class="card">
                        <div class="header">
                            <h2>{{ trans('backend.date') }}</h2>
                        </div>
                        <div class="body">


                                <input type="text"  value="@if (old('date')){{ old('date') }}@else{{ $post->date }}@endif " name="date" class="form-control  pickadate-months-year" />


<script>
    $(document).ready(function() {

$('.pickadate-months-year').pickadate({
selectMonths: true,
selectYears: 20
});


});

</script>
                        </div>
                    </div>
                </div>









                <div class="col-sm-4">
                    <div class="card">
                        <div class="header">
                            <h2>{{ trans('backend.unit_type') }}</h2>
                        </div>
                <div class="body">
<select id="single-selection" name="unit_type">

@foreach ($unit_types as $unit_type)
<option value="{{ $unit_type->id }}"
    @foreach ($post->unit_types as $postu)
    @if ($postu->id == $unit_type->id)
    selected
    @endif
    @endforeach
    > {{ $unit_type->name }} </option>
@endforeach
</select>



                        </div>
                    </div>
                </div>







            </div>



            <div class="box-footer">
                <button type="submit" class="btn btn-primary">{{ trans('backend.save') }}</button>
                <a type="button" class="btn btn-warning"
                    href="{{   route('admin.post.index')   }}">{{ trans('backend.back') }}</a>
            </div>
</form>


</div>
</div>
</div>
</div>
</div>
</section>


@endsection
