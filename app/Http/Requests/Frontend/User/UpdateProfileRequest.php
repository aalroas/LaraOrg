<?php

namespace App\Http\Requests\Frontend\User;

use App\Helpers\Auth\SocialiteHelper;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

/**
 * Class UpdateProfileRequest.
 */
class UpdateProfileRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
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

            'email' => ['sometimes', 'required', 'email'],
            // 'avatar_type' => ['required', Rule::in(array_merge(['gravatar', 'storage'], (new SocialiteHelper)->getAcceptedProviders()))],
            // 'profile_image' => ['sometimes', 'image'],
        ];
    }
}
