<?php

namespace App\Http\Requests\Backend\Auth\User;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class UpdateUserRequest.
 */
class UpdateUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return $this->user()->isAdmin();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            // 'full_name_ar' => ['required', 'string'],
            // 'phone' => ['required', 'string'],
            // 'company_name_ar' => ['required', 'string'],
            // 'year_founded' => ['required', 'string'],
            // 'main_location_ar' => ['required', 'string'],
            // 'email' => ['required', 'email'],
            // 'roles' => ['required', 'array'],
        ];
    }
}
