<p> @lang('backend.new_user_need_approval'): {{ $user->full_name_en }} </p>

<a href="{{route('admin.auth.user.deactivated')}}">@lang('backend.view')</a>
