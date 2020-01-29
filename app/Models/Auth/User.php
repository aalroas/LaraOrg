<?php

namespace App\Models\Auth;

use App\Models\Auth\Traits\Attribute\UserAttribute;
use App\Models\Auth\Traits\Method\UserMethod;
use App\Models\Auth\Traits\Relationship\UserRelationship;
use App\Models\Auth\Traits\Scope\UserScope;
use App\Models\Traits\MultiLanguage;


/**
 * Class User.
 */
class User extends BaseUser
{
    use UserAttribute,
        MultiLanguage,
        UserMethod,
        UserRelationship,
        UserScope;

    protected $fillable = [
        'full_name_ar',
        'full_name_en',
        'full_name_tr',
        'phone',
        'gender',
        'company_name_en',
        'company_name_ar',
        'company_name_tr',




        'year_founded',
        'country',
        'main_location_ar',
        'main_location_en',
        'main_location_tr',
        'agency',
        'number_of_employee',
        'main_address_ar',
        'main_address_en',
        'main_address_tr',
        'branches_addresses',
        'main_product',
        'brief_description_ar',
        'brief_description_en',
        'partner_companies',
        'instagram_url',
        'linkedin_url',
        'facebook_url',
        'twitter_url',
        'profile_image',
        'company_logo',
        'email',
        'password',



    ];
    /**
     * This array will have the attributes which you want it to support multi languages
     */
    protected $multi_lang = [
        'full_name',
        'company_name',
        'main_location',
        'main_address',
        'brief_description',
    ];


    public function fields()
    {
        return  $this->belongsToMany('App\Models\frontend\field', 'user_fields')->withTimestamps();
    }


    public function sectors()
    {
        return  $this->belongsToMany('App\Models\frontend\sector', 'user_sectors')->withTimestamps();
    }



}
