<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;


/**
 * @OA\OpenApi(
 *    @OA\Info(
 *        title="My API",
 *        version="1.0.0",
 *        description="This is a sample server for a pet store.",
 *        @OA\Contact(
 *            email="support@example.com"
 *        ),
 *        @OA\License(
 *            name="Apache 2.0",
 *            url="http://www.apache.org/licenses/LICENSE-2.0.html"
 *        )
 *    )
 * )
 */

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
