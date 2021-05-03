@if ($role->id !== 1)
    <div class="btn-group btn-group-sm" role="group" aria-label="@lang('labels.backend.access.users.user_actions')">
        <a href="{{ route('admin.auth.role.edit', $role) }}" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="@lang('buttons.general.crud.edit')">
            <i class="feather icon-edit font-medium-5"></i>
        </a>

        <a href="{{ route('admin.auth.role.destroy', $role) }}"
           data-method="delete"
           data-trans-button-cancel="@lang('buttons.general.cancel')"
           data-trans-button-confirm="@lang('buttons.general.crud.delete')"
           data-trans-title="@lang('strings.backend.general.are_you_sure')"
           class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="@lang('buttons.general.crud.delete')">
            <i class="feather icon-trash  font-medium-5"></i>
        </a>
    </div>
@else
    N/A
@endif
