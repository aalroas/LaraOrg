@if($breadcrumbs)
<div class="content-header row">
        <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    {{-- <h2 class="content-header-title float-left mb-0">Home</h2> --}}
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                        @foreach($breadcrumbs as $breadcrumb)
                            @if($breadcrumb->url && !$loop->last)
                            <li class="breadcrumb-item"><a href="{{ $breadcrumb->url }}">{{ $breadcrumb->title }}</a></li>
                            @else
                            <li class="breadcrumb-item active">{{ $breadcrumb->title }}</li>
                            @endif
                            @endforeach
                            @yield('breadcrumb-links')
                        </ol>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endif
<!-- Default Breadcrumb Ends -->
