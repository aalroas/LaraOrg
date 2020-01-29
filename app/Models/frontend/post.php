<?php

namespace App\Models\frontend;

use Illuminate\Database\Eloquent\Model;

use App\Models\Traits\MultiLanguage;
class post extends Model
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

    public function post_images()
    {
        return $this->hasMany('App\Models\frontend\post_images');
    }



    // public function categories()
    // {
    //    return  $this->belongsToMany('App\Models\frontend\category','category_posts')->withTimestamps();
    // }

    public function getRouteKeyName()
    {
       return  'slug';
    }
}
