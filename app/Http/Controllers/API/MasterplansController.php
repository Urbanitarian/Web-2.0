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

        $query = Masterplan::where('active', 1);

        if ($q) { 
            $query->where(function($query) use ($q) {
                $query->where('title', 'like', '%' . $q . '%')
                      ->orWhere('tags', 'like', '%' . $q . '%')
                      ->orWhere('category', 'like', '%' . $q . '%')
                      ->orWhere('city', 'like', '%' . $q . '%')
                      ->orWhere('country', 'like', '%' . $q . '%');
            });
        }

        if ($tags) {
            $query->where('tags', 'like', '%' . $tags . '%');
        }
        
        if ($size) {
            $query->where('size', '=', $size);
        }
        
        if ($status) {
            $query->where('status', 'like', '%' . $status . '%');
        }
        
        $masters = $query->get();
        
        $responsejson = json_encode($masters);
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
