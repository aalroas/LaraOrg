<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\MultiLanguage;

class StaticPages extends Model
{
    use MultiLanguage;


    protected $fillable =  [
        't_title_ar', 't_title_tr', 't_title_en',
        't_text_ar', 't_text_en', 't_text_tr',
        'p_title_ar', 'p_title_tr', 'p_title_en',
        'p_text_ar', 'p_text_en', 'p_text_tr',
        'o_title_ar', 'o_title_tr', 'o_title_en',
        'o_text_ar', 'o_text_en', 'o_text_tr',
        'g_title_ar', 'g_title_tr', 'g_title_en',
        'g_text_ar', 'g_text_en', 'g_text_tr',
    ];


    protected $multi_lang  =  [
        't_title',
        't_text',
        'p_title',
        'p_text',
        'o_title',
        'o_text',
        'g_title',
        'g_text',
    ];
}
