<?php


namespace App\Models\backend;

use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\MultiLanguage;

class activity extends Model
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

    public function activity_images()
    {
        return $this->hasMany('App\Models\frontend\activity_images');
    }


    public function activity_types()
    {
        return $this->belongsToMany('App\Models\backend\activity_type', 'activity_type_activities')->withTimestamps();
    }


    public function unit_types()
    {
        return $this->belongsToMany('App\Models\backend\unit_type', 'unit_type_activities')->withTimestamps();
    }




    public function getRouteKeyName()
    {
        return  'slug';
    }
}
