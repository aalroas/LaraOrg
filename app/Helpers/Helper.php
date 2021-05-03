<?php

// This file is for GeneralSiteSettings also i added it in
//    "autoload": {
//         "files": ["app/Helpers/Helper.php"]
//     },
use Illuminate\Support\Str;
use App\Models\backend\Setting;

function GeneralSiteSettings($var)
{
        $Setting = Setting::find(1);
        return $Setting->$var;
}
