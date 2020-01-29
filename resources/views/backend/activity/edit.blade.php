@extends('backend.layouts.app')
@section('content')


<section id="basic-input">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">{{ trans('backend.activities') }}</h4>
                    @include('includes.partials.messages')
                </div>
                <div class="card-content">
                    <div class="card-body">


<div class="col-12">
        @foreach ($activity->activity_images as $activity_images)
        <div class="card c_grid c_yellow">
            <div id="{{ $activity_images->id }}" class="body text-center">
                <img width="200" height="100" class="user-photo"
                    src="{{ URL::to('uploads/activities',$activity_images->activity_image_path) }}" alt="">
                <button class="deleteimage" data-id="{{ $activity_images->id }}"
                    data-token="{{ csrf_token() }}">{{ trans('backend.delete') }}</button>
            </div>
        </div>
        @endforeach
    </div>

                        <script>
                            $(".deleteimage").click(function(){
                                var id = $(this).data("id");
                                var token = $(this).data("token");
                                $.ajax(
                                {
                                url: "<?php echo url('admin/activity/image') ?>/"+id,
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


        <form role="form" action="{{ route('admin.activity.update',$activity->id) }}" method="post"
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
                            <input type="file" class="dropify" data-default-file="{{ URL::to('uploads/activities',$activity->f_image) }}" data-allowed-file-extensions="png jpg jpeg"
                                name="f_image" required>
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
                    <input id="file-1" type="file" name="activity_images[]" multiple class="file" data-overwrite-initial="false"
                        data-min-file-count="2">
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
                allowedFileExtensions: ['jpg', 'png', 'gif'],
                overwriteInitial: false,
                maxFilesNum: 20,
                slugCallback: function (filename) {
                    return filename.replace('(', '_').replace(']', '_');
                }
            });
        </script>



    </div>
            </div>









            <div class="row clealfix">
                <div class="col-sm-4">
                    <div class="card">
                        <div class="header">
                            <h2>{{ trans('backend.title') }} [ AR ]</h2>
                        </div>
                        <div class="body">

                            <input
                                value="@if (old('title_ar')){{ old('title_ar') }}@else{{ $activity->title_ar }}@endif"
                                type="text" class="form-control" id="title_ar" name="title_ar">

                        </div>
                    </div>
                </div>


                <div class="col-sm-4">
                    <div class="card">
                        <div class="header">
                            <h2>{{ trans('backend.title') }} [ EN ]</h2>
                        </div>
                        <div class="body">

                            <input
                                value="@if (old('title_en')){{ old('title_en') }}@else{{ $activity->title_en }}@endif"
                                type="text" class="form-control" id="title_en" name="title_en">

                        </div>
                    </div>
                </div>


                <div class="col-sm-4">
                    <div class="card">
                        <div class="header">
                            <h2>{{ trans('backend.title') }} [ TR ]</h2>
                        </div>
                        <div class="body">

                            <input
                                value="@if (old('title_tr')){{ old('title_tr') }}@else{{ $activity->title_tr }}@endif"
                                type="text" class="form-control" id="title_tr" name="title_tr">

                        </div>
                    </div>
                </div>

            </div>






            <div class="row clealfix">
                <div class="col-sm-4">
                    <div class="card">
                        <div class="header">
                            <h2>{{ trans('backend.text') }} [ AR ]</h2>
                        </div>
                        <div class="body">


                            <textarea id="ckeditor1" type="text" class="form-control"
                                name="text_ar">{{ $activity->text_ar }}</textarea>

                        </div>
                    </div>
                </div>


                <div class="col-sm-4">
                    <div class="card">
                        <div class="header">
                            <h2>{{ trans('backend.text') }} [ EN ]</h2>
                        </div>
                        <div class="body">
                            <textarea id="ckeditor2" type="text" class="form-control"
                                name="text_en">{{ $activity->text_en }}</textarea>


                        </div>
                    </div>
                </div>


                <div class="col-sm-4">
                    <div class="card">
                        <div class="header">
                            <h2>{{ trans('backend.text') }} [ TR ]</h2>
                        </div>
                        <div class="body">

                            <textarea id="ckeditor3" type="text" class="form-control"
                                name="text_tr">{{ $activity->text_tr }}</textarea>


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


                                <input type="text"  value="@if (old('date')){{ old('date') }}@else{{ $activity->date }}@endif " name="date" class="form-control  pickadate-months-year" />


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






            </div>





            <div class="row clealfix">
                <div class="col-sm-4">
                    <div class="card">
                        <div class="header">
                            <h2>{{ trans('backend.unit_type') }}</h2>
                        </div>
                        <div class="body">

<select id="single-selection" name="unit_type">
        <option @if ($activity->unit_type === 1 ) selected @endif value="1"> {{ trans('backend.media_and_marketing_unit') }} </option>
        <option @if ($activity->unit_type === 2 ) selected @endif value="2"> {{ trans('backend.investment_and_projects_unit') }} </option>
        <option @if ($activity->unit_type === 3 ) selected @endif value="3"> {{ trans('backend.membership_and_resource_development_unit') }} </option>
        <option @if ($activity->unit_type === 4 ) selected @endif value="4"> {{ trans('backend.relationship_unit') }} </option>
        <option @if ($activity->unit_type === 5 ) selected @endif value="5"> {{ trans('backend.training_unit') }} </option>
    </select>



                        </div>
                    </div>
                </div>







            </div>


<div class="row clealfix">
                <div class="col-sm-4">
                    <div class="card">
                        <div class="header">
                            <h2>{{ trans('backend.activity_type') }}</h2>
                        </div>
                        <div class="body">
                            <div class="multiselect_div">
                                <select id="single-selection" name="activity_type">
                                    <option @if ($activity->activity_type === 1 ) selected @endif value="1"> {{ trans('backend.conferences') }} </option>
                                    <option @if ($activity->activity_type === 2 ) selected @endif value="2"> {{ trans('backend.seminars_and_workshops') }} </option>
                                    <option @if ($activity->activity_type === 3 ) selected @endif value="3"> {{ trans('backend.social_activities') }} </option>
                                    <option @if ($activity->activity_type === 4 ) selected @endif value="4"> {{ trans('backend.training_programs') }} </option>
                                    <option @if ($activity->activity_type === 5 ) selected @endif value="5"> {{ trans('backend.projects') }} </option>
                                    <option @if ($activity->activity_type === 6 ) selected @endif value="6"> {{ trans('backend.commercial_and_leisure_trips') }} </option>
                                    <option @if ($activity->activity_type === 7 ) selected @endif value="7"> {{ trans('backend.studies') }} </option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>




            </div>





            <div class="box-footer">
                <button type="submit" class="btn btn-primary">{{ trans('backend.save') }}</button>
                <a type="button" class="btn btn-warning"
                    href="{{   route('admin.activity.index')   }}">{{ trans('backend.back') }}</a>
            </div>
</form>


</div>
</div>
</div>
</div>
</div>
</section>


@endsection
