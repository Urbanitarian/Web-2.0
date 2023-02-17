<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Neighbourhood;

class NeighbourhoodsController extends Controller
{
  
    public function index(Request $request) 
    { 
        $q = request()->input('q');
        $tags = request()->input('tags');
        $size = request()->input('size');

        if ($q) { 
            $neighbourhoods = Neighbourhood::where('title','like','%' . $q . '%')->orWhere('tags', 'like', '%' . $q . '%')->orWhere('category', 'like', '%' . $q . '%')->orWhere('city', 'like', '%' . $q . '%')->orWhere('country', 'like', '%' . $q . '%')->get();
        }elseif ($tags) {
            $neighbourhoods = Neighbourhood::where('tags','like','%' . $tags . '%')->get();
        }elseif ($size) {
            $neighbourhoods = Neighbourhood::where('size','=', $size)->get();
        } else {
            $neighbourhoods = Neighbourhood::all();
        }
        return response()->json($neighbourhoods);
    }

}
