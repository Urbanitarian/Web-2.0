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
        $status = request()->input('status');

        if ($q) { 
            $masters = Masterplan::where('active', 1)->where('title','like','%' . $q . '%')->orWhere('tags', 'like', '%' . $q . '%')->orWhere('category', 'like', '%' . $q . '%')->orWhere('city', 'like', '%' . $q . '%')->orWhere('country', 'like', '%' . $q . '%')->get();
        }elseif ($tags) {
            $masters = Masterplan::where('active', 1)->where('tags','like','%' . $tags . '%')->get();
        }elseif ($size) {
            $masters = Masterplan::where('active', 1)->where('size','=', $size)->get();
        }elseif ($status) {
            $masters = Masterplan::where('active', 1)->where('status','like','%' . $status . '%')->get();
        } else {
            $masters = Masterplan::where('active', 1)->inRandomOrder()->get();
        }
        return response()->json($masters);
    }

}
