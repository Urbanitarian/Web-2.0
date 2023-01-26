<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Masterplan;

class MasterplansController extends Controller
{
    public function index(Request $request) 
    { 
        $q = request()->input('q');
        $tags = request()->input('tags');
        $size = request()->input('size');

        if ($q) { 
            $masters = Masterplan::where('title','like','%' . $q . '%')->orWhere('tags', 'like', '%' . $q . '%')->orWhere('category', 'like', '%' . $q . '%')->orWhere('city', 'like', '%' . $q . '%')->orWhere('country', 'like', '%' . $q . '%')->get();
        }elseif ($tags) {
            $masters = Masterplan::where('tags','like','%' . $tags . '%')->get();
        }elseif ($size) {
            $masters = Masterplan::where('size','like','%' . $size . '%')->get();
        } else {
            $masters = Masterplan::all();
        }
        return response()->json($masters);
    }

}
