<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\MultiLanguage;
class about extends Model
{
    use MultiLanguage;

    protected $fillable = [
        'about_title_en', 'about_title_ar', 'about_title_tr',
        'about_text_ar', 'about_text_tr', 'about_text_en',


        'mission_title_ar', 'mission_title_en', 'mission_title_tr',
        'mission_text_ar', 'mission_text_en', 'mission_text_tr',

        'vision_title_ar', 'vision_title_en', 'vision_title_tr',
        'vision_text_ar', 'vision_text_en', 'vision_text_tr',


        'objectives_title_ar', 'objectives_title_en', 'objectives_title_tr',
        'objectives_text_ar', 'objectives_text_en', 'objectives_text_tr',


        'counter_title_ar', 'counter_title_en', 'counter_title_tr',
        'counter_text_ar', 'counter_text_en', 'counter_text_tr',
    ];

    /**
     * This array will have the attributes which you want it to support multi languages
     */
    protected $multi_lang = [
        'about_title',
        'about_text',
        'mission_title',
        'mission_text',
        'vision_title',
        'vision_text',
        'objectives_title',
        'objectives_text',
        'counter_title',
        'counter_text',
    ];
}


