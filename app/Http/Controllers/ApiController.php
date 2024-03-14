<?php

namespace App\Http\Controllers;

use App\Library\BellaMaison;
use App\Managers\ApiManager;
use App\Models\Api;
use Illuminate\Http\Request;

class ApiController extends Controller
{

    public function updateProducts(Request $request)
    {
    
        $api = new ApiManager(new BellaMaison, $request);
      return  $api->updateProducts();

    }
}
