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
                        <div class="table-responsive"><table class="table table-hover js-basic-example dataTable table-custom spacing5">
                                <thead>
                        <tr>
                            <th>S. NO</th>
                            <th> {{ trans('backend.Name') }} </th>

                            <th> {{ trans('backend.Subject') }}</th>
                            <th> {{ trans('backend.Email') }}</th>
                            <th> {{ trans('backend.Phone') }}</th>
                            <th> {{ trans('backend.form_type') }}</th>
                            <th>{{ trans('backend.Show') }}</th>
                            <th>{{ trans('backend.Delete') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($contacts as $contact)
                        <tr>
                            <td>{{ $loop->index + 1 }}</td>


                            <td>{{ $contact->name }}</td>

                            <td>{{ $contact->subject }}</td>
                            <td>{{ $contact->email }}</td>
                            <td>{{ $contact->phone }}</td>
                            <td>{{ $contact->form_type }}</td>
                            <td> <a href="{{   URL('admin/contact_forms/show',$contact->id) }}"> <span class="fa fa-eye">
                                    </span></a></td>
                            <td>
                                <form id="delete-form-{{ $contact->id }}" method="post"
                                    action="{{ URL('contact_forms',$contact->id) }}" style="display: none">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                </form>
                                <a href=""
                                    onclick="if(confirm('Are You sure you want to delete this')){event.preventDefault();document.getElementById('delete-form-{{ $contact->id }}').submit();}else{event.preventDefault();}"><span
                                        class="icon-trash">
                                    </span></a>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                  <tfoot>
                    <tr>
                        <th>S. NO</th>
                        <th>{{ trans('backend.name') }} </th>
                        <th>{{ trans('backend.subject') }} </th>
                        <th>{{ trans('backend.email') }} </th>
                        <th>{{ trans('backend.phone') }}</th>
                        <th>{{ trans('backend.form_type') }}</th>
                        <th>{{ trans('backend.show') }}</th>
                        <th>{{ trans('backend.delete') }}</th>
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
