<?php

namespace App\Models\frontend;

use Illuminate\Database\Eloquent\Model;

class post_images extends Model
{
    protected $fillable = ['post_id', 'post_image_path'];
    public function post()
    {
        return $this->belongsTo('App\Models\frontend\Post');
    }
}
