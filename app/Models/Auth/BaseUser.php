<?php

namespace App\Models\Auth;

use Altek\Accountant\Contracts\Recordable;
use Altek\Accountant\Recordable as RecordableTrait;
use Altek\Eventually\Eventually;
use App\Models\Auth\Traits\SendUserPasswordReset;
use App\Models\Traits\Uuid;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Lab404\Impersonate\Models\Impersonate;
use Spatie\Permission\Traits\HasRoles;
use Laravel\Passport\HasApiTokens;

/**
 * Class User.
 */
abstract class BaseUser extends Authenticatable implements Recordable
{
    use HasRoles,
        Eventually,
        Impersonate,
        Notifiable,
        HasApiTokens,
        RecordableTrait,
        SendUserPasswordReset,
        SoftDeletes,
        Uuid;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
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
        'linkedin_url' .
        'facebook_url',
        'twitter_url',
        'email',
        'avatar_type',
        'profile_image',
        'company_logo',
        'password',
        'password_changed_at',
        'active',
        'confirmation_code',
        'confirmed',
        'timezone',
        'last_login_at',
        'last_login_ip',
        'to_be_logged_out',
    ];

    /**
     * The dynamic attributes from mutators that should be returned with the user object.
     * @var array
     */
    protected $appends = [
        'full_name_ar',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'active' => 'boolean',
        'confirmed' => 'boolean',
        'to_be_logged_out' => 'boolean',
    ];

    /**
     * @var array
     */
    protected $dates = [
        'last_login_at',
        'password_changed_at',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Return true or false if the user can impersonate an other user.
     *
     * @param void
     * @return  bool
     */
    public function canImpersonate()
    {
        return $this->isAdmin();
    }

    /**
     * Return true or false if the user can be impersonate.
     *
     * @param void
     * @return  bool
     */
    public function canBeImpersonated()
    {
        return $this->id !== 1;
    }
}
