<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\MultiLanguage;
class unit_type extends Model
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
        return  $this->belongsToMany('App\Models\backend\activity', 'unit_type_activities')->paginate(5);
    }



    public function posts()
    {
        return  $this->belongsToMany('App\Models\frontend\post', 'unit_type_posts')->paginate(5);
    }




    public function getRouteKeyName()
    {
        return  'slug';
    }


}
