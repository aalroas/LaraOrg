<?php

namespace App\Http\Controllers\Frontend;

use App\Models\backend\activity_type;
use App\Models\backend\unit_type;
use Illuminate\Support\Facades\View;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

/**
 * Class Controller.
 */
class BaseFrontendController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function __construct()
    {
        //its just a dummy data object.
        $headerunit_types = unit_type::all();
        $headeractivity_types = activity_type::all();
        // Sharing is caring

        View::share('headerunit_types', $headerunit_types);
        View::share('headeractivity_types', $headeractivity_types);

    }

}
