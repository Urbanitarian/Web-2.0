<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Webresource;

class WebresourcesController extends Controller
{
    public function index(Request $request) 
    { 
        $q = request()->input('q');
        $type = request()->input('type');
        $country = request()->input('country');

        if ($q) { 
            $webresource = Webresource::where('name','like','%' . $q . '%')->orWhere('type', 'like', '%' . $q . '%')->orWhere('category', 'like', '%' . $q . '%')->orWhere('city', 'like', '%' . $q . '%')->orWhere('country', 'like', '%' . $q . '%')->get();
        }elseif ($type) {
            $webresource = Webresource::where('type','like','%' . $type . '%')->get();
        }elseif ($country) {
            $webresource = Webresource::where('country','like','%' . $country . '%')->get();
        } else {
            $webresource = Webresource::all();
        }
        return response()->json($webresource);
    }
}
