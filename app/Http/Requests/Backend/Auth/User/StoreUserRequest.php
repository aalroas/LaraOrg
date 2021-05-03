<?php

namespace App\Http\Requests\Backend\Auth\User;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use LangleyFoxall\LaravelNISTPasswordRules\PasswordRules;

/**
 * Class StoreUserRequest.
 */
class StoreUserRequest extends FormRequest
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

            // 'email' => ['required', 'email', Rule::unique('users')],
            // 'password' => PasswordRules::register($this->email),
            // 'roles' => ['required', 'array'],
        ];
    }
}
