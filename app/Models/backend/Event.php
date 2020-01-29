<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\MultiLanguage;

class Event extends Model
{
    use MultiLanguage;

    protected $fillable = [
        'name_tr', 'name_ar', 'name_en',
        'text_ar', 'text_en', 'text_tr',
        'location_ar', 'location_tr', 'location_en',
    ];

    /**
     * This array will have the attributes which you want it to support multi languages
     */
    protected $multi_lang = [
        'name',
        'text',
        'location',
    ];

}
