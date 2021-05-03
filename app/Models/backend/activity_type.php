<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\MultiLanguage;


class activity_type extends Model
{
    use MultiLanguage;

    protected $fillable = [
        'name_en', 'name_ar', 'name_tr',
        'text_ar', 'text_en', 'text_tr',
    ];

    /**
     * This array will have the attributes which you want it to support multi languages
     */
    protected $multi_lang = [
        'name',
        'text',
    ];



    public function activities()
    {
        return  $this->belongsToMany('App\Models\backend\activity', 'activity_type_activities')->paginate(5);
    }



    public function getRouteKeyName()
    {
        return 'slug';
    }


}
