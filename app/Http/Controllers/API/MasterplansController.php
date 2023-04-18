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
        $city = request()->input('city');
        $country = request()->input('country');

        $masters = Masterplan::where('active', 1)->get();
        $all_data = $masters->toArray();
        

        if ($q) {
            $all_data = Masterplan::where('active', 1)
                ->where(function ($query) use ($request) {
                    $query
                        ->where(
                            'title',
                            'like',
                            '%' . $request->input('q') . '%'
                        )
                        ->orWhere(
                            'city',
                            'like',
                            '%' . $request->input('q') . '%'
                        )
                        ->orWhere(
                            'country',
                            'like',
                            '%' . $request->input('q') . '%'
                        );
                })
                ->get();
        }

        if ($request->filled('tags')) {
            $all_data = Masterplan::where('active', 1)
                ->where('tags', 'like', '%' . $tags . '%')
                ->get();
        }

        if ($request->filled('status')) {
            $all_data = Masterplan::where('active', 1)
                ->where('status', 'like', '%' . $status . '%')
                ->get();
        }

        if ($request->filled('size')) {
            $all_data = Masterplan::where('active', 1)
                ->where('size', '=', $size)
                ->get();
        }

        if ($request->filled('city')) {
            $all_data = Masterplan::where('active', 1)
                ->where('city', '=', $city)
                ->get();
        }

        if ($request->filled('country')) {
            $all_data = Masterplan::where('active', 1)
                ->where('country', '=', $country)
                ->get();
        }

        $responsejson = json_encode($all_data);
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
