<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Streetscape;

class StreetscapesController extends Controller
{

        public function index(Request $request) 
        { 
            $q = request()->input('q');
            $tags = request()->input('tags');
            $size = request()->input('size');
    
            if ($q) { 
                $streets = Streetscape::where('active', 1)->where('title','like','%' . $q . '%')->orWhere('tags', 'like', '%' . $q . '%')->orWhere('category', 'like', '%' . $q . '%')->orWhere('city', 'like', '%' . $q . '%')->orWhere('country', 'like', '%' . $q . '%')->get();
            }elseif ($tags) {
                $streets = Streetscape::where('active', 1)->where('tags','like','%' . $tags . '%')->get();
            }elseif ($size) {
                $streets = Streetscape::where('active', 1)->where('size','=', $size)->get();
            } else {
                $streets = Streetscape::where('active', 1)->inRandomOrder()->get();
            }
            $responsejson = json_encode($streets);
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
