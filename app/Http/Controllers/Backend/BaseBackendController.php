<?php

namespace App\Http\Controllers\Backend;


use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;



/**
 * Class Controller.
 */
class BaseBackendController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


}
