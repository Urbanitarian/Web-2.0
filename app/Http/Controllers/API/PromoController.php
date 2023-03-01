<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Streetscape;
use App\Models\Masterplan;
use App\Models\Neighbourhood;

class PromoController extends Controller
{
    public function index() 
    { 
        $masters = Masterplan::where('active', 1)->take(1)->get();
        $streets = Streetscape::where('active', 1)->take(1)->get();
        $neighbs = Neighbourhood::where('active', 1)->take(1)->get();

        $datas = array_merge(
            $masters->toArray(),
            $streets->toArray(),
            $neighbs->toArray()
        );

        // shuffle the array
        shuffle($datas);

        return response()->json($datas);
    }
}
