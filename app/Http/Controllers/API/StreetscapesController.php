<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Streetscape;

class StreetscapesController extends Controller
{
    public function index() 
    { 
        public function index(Request $request) 
        { 
            $q = request()->input('q');
            $tags = request()->input('tags');
            $size = request()->input('size');
    
            if ($q) { 
                $streets = Streetscape::where('title','like','%' . $q . '%')->orWhere('tags', 'like', '%' . $q . '%')->orWhere('category', 'like', '%' . $q . '%')->orWhere('city', 'like', '%' . $q . '%')->orWhere('country', 'like', '%' . $q . '%')->get();
            }elseif ($tags) {
                $streets = Streetscape::where('tags','like','%' . $tags . '%')->get();
            }elseif ($size) {
                $streets = Streetscape::where('size','like','%' . $size . '%')->get();
            } else {
                $streets = Streetscape::all();
            }
            return response()->json($streets);
        }
    }
}
