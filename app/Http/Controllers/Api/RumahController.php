<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Rumah;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;

class RumahController extends Controller
{
    use ApiResponse;

    public function index()
    {
        $rumah = Rumah::all();
        //return json response dari traits Api response
        return $this->responseCollection('Data Rumah',$rumah);
    }
}
