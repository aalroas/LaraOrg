<?php

namespace App\Models\frontend;

use Illuminate\Database\Eloquent\Model;

class activity_images extends Model
{
    protected $fillable = ['activity_id', 'activity_image_path'];

    public function activity()
    {
        return $this->belongsTo('App\Models\backend\activity');
    }
}
