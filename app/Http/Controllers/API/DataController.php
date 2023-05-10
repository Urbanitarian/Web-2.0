<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Masterplan;
use App\Models\Neighbourhood;
use App\Models\Streetscape;

class DataController extends Controller
{
    public function index()
    {
        $request = request();
        $q = request()->input('q');
        $tags = request()->input('tags');
        $size = request()->input('size');
        $category = request()->input('category');
        $cat = request()->input('cat');
        $status = request()->input('status');
        $pop = request()->input('pop');
        $city = request()->input('city');
        $country = request()->input('country');

        if ($request->filled('q')) {
            $all_data = null;

            if ($cat == 'masterplans') {
                $all_data = Masterplan::where('active', 1)
                    ->where(function ($query) use ($request) {
                        $query->where('title', 'like', '%' . $request->input('q') . '%')
                            ->orWhere('city', 'like', '%' . $request->input('q') . '%')
                            ->orWhere('country', 'like', '%' . $request->input('q') . '%');
                    })->get();
            }
            if ($cat == 'streetscapes') {
                $all_data = Streetscape::where('active', 1)
                    ->where(function ($query) use ($request) {
                        $query->where('title', 'like', '%' . $request->input('q') . '%')
                            ->orWhere('city', 'like', '%' . $request->input('q') . '%')
                            ->orWhere('country', 'like', '%' . $request->input('q') . '%');
                    })->get();
            }
            if ($cat == 'urbanscapes') {
                $all_data = Neighbourhood::where('active', 1)
                    ->where(function ($query) use ($request) {
                        $query->where('title', 'like', '%' . $request->input('q') . '%')
                            ->orWhere('city', 'like', '%' . $request->input('q') . '%')
                            ->orWhere('country', 'like', '%' . $request->input('q') . '%');
                    })->get();
            }
        }


        if ($category == 'masterplans') {
            $masters = Masterplan::where('active', 1)->get();
            $all_data = $masters->map(function ($i) {
                return [
                    'views' => views($i)->count(),
                    'title' => $i->title,
                    'author' => $i->author,
                    'city' => $i->city,
                    'image' => $i->image,
                    'id' => $i->id,
                    'category' => $i->category,
                    'size' => $i->size,
                    'tags' => $i->tags
                ];
            })->toArray();
        }
        if ($category == 'streetscapes') {
            $streets = Streetscape::where('active', 1)->get();
            $all_data = $streets->toArray();
        }
        if ($category == 'urbanscapes') {
            $neighbs = Neighbourhood::where('active', 1)->get();
            $all_data = $neighbs->toArray();
        }


        if ($request->filled('tags')) {
            if ($category == 'masterplans') {
                $all_data = Masterplan::where('active', 1)
                    ->where('tags', 'like', '%' . $tags . '%')
                    ->get();
            }
            if ($category == 'streetscapes') {
                $all_data = Streetscape::where('active', 1)
                    ->where('tags', 'like', '%' . $tags . '%')
                    ->get();
            }
            if ($category == 'urbanscapes') {
                $all_data = Neighbourhood::where('active', 1)
                    ->where('tags', 'like', '%' . $tags . '%')
                    ->get();
            }
        }
        if ($request->filled('status')) {
            if ($category == 'masterplans') {
                $all_data = Masterplan::where('active', 1)
                    ->where('status', 'like', '%' . $status . '%')
                    ->get();
            }
            if ($category == 'streetscapes') {
                $all_data = Streetscape::where('active', 1)
                    ->where('status', 'like', '%' . $status . '%')
                    ->get();
            }
            if ($category == 'urbanscapes') {
                $all_data = Neighbourhood::where('active', 1)
                    ->where('status', 'like', '%' . $status . '%')
                    ->get();
            }
        }

        if ($request->filled('size')) {
            if ($category == 'masterplans') {
                $all_data = Masterplan::where('active', 1)
                    ->where('size', '=', $size)
                    ->get();
            }
            if ($category == 'streetscapes') {
                $all_data = Streetscape::where('active', 1)
                    ->where('size', '=', $size)
                    ->get();
            }
            if ($category == 'urbanscapes') {
                $all_data = Neighbourhood::where('active', 1)
                    ->where('size', '=', $size)
                    ->get();
            }
        }

        if ($request->filled('city')) {
            if ($category == 'masterplans') {
                $all_data = Masterplan::where('active', 1)
                    ->where('city', '=', $city)
                    ->get();
            }
            if ($category == 'streetscapes') {
                $all_data = Streetscape::where('active', 1)
                    ->where('city', '=', $city)
                    ->get();
            }
            if ($category == 'urbanscapes') {
                $all_data = Neighbourhood::where('active', 1)
                    ->where('city', '=', $city)
                    ->get();
            }
        }

        if ($request->filled('country')) {
            if ($category == 'masterplans') {
                $all_data = Masterplan::where('active', 1)
                    ->where('country', '=', $country)
                    ->get();
            }
            if ($category == 'streetscapes') {
                $all_data = Streetscape::where('active', 1)
                    ->where('country', '=', $country)
                    ->get();
            }
            if ($category == 'urbanscapes') {
                $all_data = Neighbourhood::where('active', 1)
                    ->where('country', '=', $country)
                    ->get();
            }
        }


        // if ($request->filled('pop')) {
        //     if ($pop == 'new') {
        //         if ($category == 'masterplans') {
        //         $all_data = Masterplan::where('active', 1)
        //             ->orderBy('created_at', 'desc')
        //             ->get();
        //         }
        //         if ($category == 'streetscapes') {
        //         $all_data = Streetscape::where('active', 1)
        //             ->orderBy('created_at', 'desc')
        //             ->get();
        //         }
        //         if ($category == 'urbanscapes') {
        //         $all_data = Neighbourhood::where('active', 1)
        //             ->orderBy('created_at', 'desc')
        //             ->get();
        //         }

        //     } elseif ($pop == 'old') {
        //         if ($category == 'masterplans') {
        //         $all_data = Masterplan::where('active', 1)
        //             ->orderBy('created_at', 'asc')
        //             ->get();
        //         }
        //         if ($category == 'streetscapes') {
        //         $all_data = Streetscape::where('active', 1)
        //             ->orderBy('created_at', 'asc')
        //             ->get();
        //         }
        //         if ($category == 'urbanscapes') {
        //         $all_data = Neighbourhood::where('active', 1)
        //             ->orderBy('created_at', 'asc')
        //             ->get();
        //         }

        //     }
        // }



        //shuffle data
        //shuffle($all_data);



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
