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
            $neighbourhoods = Neighbourhood::where('active', 1)->where('title','like','%' . $q . '%')->orWhere('tags', 'like', '%' . $q . '%')->orWhere('category', 'like', '%' . $q . '%')->orWhere('city', 'like', '%' . $q . '%')->orWhere('country', 'like', '%' . $q . '%')->get();
        }elseif ($tags) {
            $neighbourhoods = Neighbourhood::where('active', 1)->where('tags','like','%' . $tags . '%')->get();
        }elseif ($size) {
            $neighbourhoods = Neighbourhood::where('active', 1)->where('size','=', $size)->get();
        } else {
            $neighbourhoods = Neighbourhood::where('active', 1)->inRandomOrder()->get();
        }
        $responsejson = json_encode($neighbourhoods);
        $data = gzencode($responsejson, 5);
        return response($data)->withHeaders([
            'Access-Control-Allow-Origin' => '*',
            'Access-Control-Allow-Methods' => 'GET',
            'Content-type' => 'application/json; charset=utf-8',
            'Content-Length' => strlen($data),
            'Content-Encoding' => 'gzip',
        ]);
    }

}
