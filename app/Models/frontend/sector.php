<?php

namespace App\Models\frontend;

use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\MultiLanguage;
class sector extends Model
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

  public function users()
  {
     return $this->belongsToMany('App\Models\Auth\User', 'user_sectors')->paginate(5);
  }
}
