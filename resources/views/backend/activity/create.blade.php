
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




        <form role="form" action="{{ route('admin.activity.store') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
 <div class="row">
    <div class="col-4">

<div class="card main-sectionx">
        <div class="header">
            <h2>{{ trans('backend.image') }}</h2>
        </div>
        <div class="body">
            <input type="file" class="dropify" data-default-file="" data-allowed-file-extensions="png jpg jpeg"
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











            <br>
            <br>
            <div class="row clealfix">
                <div class="col-sm-4">
                    <div class="card">
                        <div class="header">
                            <h2>{{ trans('backend.title') }} [ AR ]</h2>
                        </div>
                        <div class="body">

                            <input type="text" class="form-control" id="title_ar" name="title_ar">

                        </div>
                    </div>
                </div>


                <div class="col-sm-4">
                    <div class="card">
                        <div class="header">
                            <h2>{{ trans('backend.title') }} [ EN ]</h2>
                        </div>
                        <div class="body">

                            <input type="text" class="form-control" id="title_en" name="title_en">

                        </div>
                    </div>
                </div>


                <div class="col-sm-4">
                    <div class="card">
                        <div class="header">
                            <h2>{{ trans('backend.title') }} [ TR ]</h2>
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
                            <h2>{{ trans('backend.text') }} [ AR ]</h2>
                        </div>
                        <div class="body">


                            <textarea id="ckeditor1" type="text" class="form-control" name="text_ar"></textarea>

                        </div>
                    </div>
                </div>


                <div class="col-sm-4">
                    <div class="card">
                        <div class="header">
                            <h2>{{ trans('backend.text') }} [ EN ]</h2>
                        </div>
                        <div class="body">
                            <textarea id="ckeditor2" type="text" class="form-control" name="text_en"></textarea>


                        </div>
                    </div>
                </div>


                <div class="col-sm-4">
                    <div class="card">
                        <div class="header">
                            <h2>{{ trans('backend.text') }} [ TR ]</h2>
                        </div>
                        <div class="body">

                            <textarea id="ckeditor3" type="text" class="form-control" name="text_tr"></textarea>


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


                                <input type='text' name="date" class="form-control  pickadate-months-year" />


                        </div>
                    </div>
                </div>


<script>

$(document).ready(function() {

$('.pickadate-months-year').pickadate({
selectMonths: true,
selectYears: 20
});


});

</script>


            </div>


<div class="row clealfix">
                <div class="col-sm-4">
                    <div class="card">
                        <div class="header">
                            <h2>{{ trans('backend.unit_type') }}</h2>
                        </div>
                        <div class="body">
                            <div class="multiselect_div">
                                <select id="single-selection" name="unit_type"  >
<option value="1"> {{ trans('backend.media_and_marketing_unit') }} </option>
<option value="2"> {{ trans('backend.investment_and_projects_unit') }} </option>
<option value="3"> {{ trans('backend.membership_and_resource_development_unit') }} </option>
<option value="4"> {{ trans('backend.relationship_unit') }} </option>
<option value="5"> {{ trans('backend.training_unit') }} </option>
                                </select>
                            </div>
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
                                    <option value="1"> {{ trans('backend.conferences') }} </option>
                                    <option value="2"> {{ trans('backend.seminars_and_workshops') }} </option>
                                    <option value="3"> {{ trans('backend.social_activities') }} </option>
                                    <option value="4"> {{ trans('backend.training_programs') }} </option>
                                    <option value="5"> {{ trans('backend.projects') }} </option>
                                    <option value="6"> {{ trans('backend.commercial_and_leisure_trips') }} </option>
                                    <option value="7"> {{ trans('backend.studies') }} </option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>




            </div>




{{--
            <div class="row clealfix">
                <div class="col-sm-4">
                    <div class="card">
                        <div class="header">
                            <h2>{{ trans('backend.category') }}</h2>
                        </div>
                        <div class="body">
                            <div class="multiselect_div">
                                <select id="single-selection" name="categories[]" class="multiselect multiselect-custom">
                                @foreach ($categories as $category)
                                <option value="{{ $category->id }}"> {{ $category->name_ar }} </option>

                                @endforeach

                                </select>
                            </div>
                        </div>
                    </div>
                </div>




            </div> --}}



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
