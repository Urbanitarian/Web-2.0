<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Masterplan;
use App\Models\Neighbourhood;
use App\Models\Streetscape;

class DataController extends Controller
{
    public function index() 
    { 
        $masters = Masterplan::all();
        $streets = Streetscape::all();
        $neighbs = Neighbourhood::all();
        $all_data = array_merge(
        $masters->toArray(),
        $streets->toArray(),
        $neighbs->toArray()
    );
        return response()->json($all_data);
    }

}
