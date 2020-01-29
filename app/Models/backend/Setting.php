<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\MultiLanguage;
class Setting extends Model
{
    use MultiLanguage;


    protected $fillable = [
    'site_title_en', 'site_title_tr', 'site_title_ar',
    'site_meta_description_ar', 'site_meta_description_en', 'site_meta_description_tr',
    'site_meta_keywords_en', 'site_meta_keywords_tr', 'site_meta_keywords_ar',
    'copy_right_en', 'copy_right_tr', 'copy_right_ar',
    'site_logo_ar', 'site_logo_en', 'site_logo_tr',
    'site_icon_ar', 'site_icon_en', 'site_icon_tr',

    ];

    /**
     * This array will have the attributes which you want it to support multi languages
     */
    protected $multi_lang = [
        'site_title',
        'site_meta_description',
        'site_meta_keywords',
        'copy_right',
        'site_address',
        'site_logo',
        'site_icon',
    ];
}
