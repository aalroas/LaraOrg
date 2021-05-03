@extends('backend.layouts.app')


@section('content')
<!-- Add rows table -->
<section id="add-row">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">


                </div>
                <div class="card-content">
                    <div class="card-body">

                        <a href="{{route('admin.category.create')}}"   class="btn btn-primary mb-2"><i
                                class="feather icon-plus"></i>&nbsp;
                            {{ trans('backend.new') }}
                        </a>
                        <div class="table-responsive">
                            <table class="table add-rows">
                                <thead>
                                    <tr>
                                        <th>S. NO</th>
                                        <th>{{ trans('backend.name') }}</th>
                                        <th>{{ trans('backend.order') }}</th>
                                        <th>{{ trans('backend.color') }}</th>
                                    </tr>
                                </thead>
                                <tbody>


                                    @foreach ($categories as $category)
                                    <tr>
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td>{{ $category->name }}</td>
                                        <td>{{ $category->order }}</td>


                                       <td style="color:{{ $category->color }}">
                                           {{ $category->color }}
                                   </td>




                                        <td>
                                            <a href="{{   route('admin.category.edit',$category->id) }}"> <i
                                                    class="feather icon-edit font-medium-5"></i> </a>
                                            <a href=""
                                                onclick="if(confirm('Are You sure you want to delete this')){event.preventDefault();document.getElementById('delete-form-{{ $category->id }}').submit();}else{event.preventDefault();}">
                                                <i class="feather icon-trash  font-medium-5"> </i></a>
                                            <form id="delete-form-{{ $category->id }}" method="post"
                                                action="{{ route('admin.category.destroy',$category->id) }}">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}
                                            </form>

                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>S. NO</th>

                                        <th>{{ trans('backend.name') }}</th>
                                            <th>{{ trans('backend.order') }}</th>

                                            <th>{{ trans('backend.color') }}</th>


                                        <th>{{ trans('backend.action') }}</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ Add rows table -->



@endsection
