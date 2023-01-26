<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Neighbourhood;

class NeighbourhoodsController extends Controller
{
  
    public function index() 
    { 
        $neighbourhoods = neighbourhood::all();
        return response()->json($neighbourhoods);
    }

}
