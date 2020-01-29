<?php

namespace App\Models\frontend;

use Illuminate\Database\Eloquent\Model;

class gallery_images extends Model
{
    protected $fillable = ['gallery_id', 'gallery_image_path'];

    public function gallery()
    {
        return $this->belongsTo('App\Models\backend\gallery');
    }
}
