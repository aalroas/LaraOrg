<?php

namespace App\Models\frontend;

use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\MultiLanguage;
class tag extends Model
{


    use MultiLanguage;

    protected $fillable = [
        'name_en', 'name_ar', 'name_tr',
    ];

    /**
     * This array will have the attributes which you want it to support multi languages
     */
    protected $multi_lang = [
        'name',
    ];




  public function posts()
  {
     return $this->belongsToMany('App\Models\frontend\post','post_tags')->paginate(5);
  }
  public function getRouteKeyName()
  {
    return 'slug';
  }

}
