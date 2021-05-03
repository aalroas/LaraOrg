<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\MultiLanguage;
class testimonial extends Model
{
    use MultiLanguage;

    protected $fillable = [
        'title_en', 'title_ar', 'title_tr',
        'text_ar', 'text_en', 'text_tr',
    ];

    /**
     * This array will have the attributes which you want it to support multi languages
     */
    protected $multi_lang = [
        'title',
        'text',
    ];

}


