<?php


namespace App\Models\backend;

use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\MultiLanguage;

class Gallery extends Model
{

    use MultiLanguage;

    protected $fillable = [
        'title_en', 'title_ar', 'title_tr',

    ];

    /**
     * This array will have the attributes which you want it to support multi languages
     */
    protected $multi_lang = [
        'title',

    ];

    public function gallery_images()
    {
        return $this->hasMany('App\Models\frontend\gallery_images');
    }




}
