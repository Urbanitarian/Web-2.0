<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\CollectionName;
use App\Models\Masterplan;
use App\Models\Neighbourhood;
use App\Models\Streetscape;
use Illuminate\Http\Request;

class CollectionController extends Controller
{

    public function index()
    {


        $request = request();


        $q = request()->input('q');
        $id = request()->input('id');

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
                    })->map(function ($i) {
                        return [
                            'views' => views($i)->count(),
                            'title' => $i->title,
                            'author' => $i->author,
                            'city' => $i->city,
                            'image' => $i->image,
                            'id' => $i->id,
                            'category' => $i->category,
                            'size' => $i->size,
                            'tags' => $i->tags,
                        ];
                    })->toArray();
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

        $count = 0;

        if ($category == 'masterplans') {

            $masters = CollectionName::with('collections')->find($id);

            $all_data = $masters->collections->map(function ($i) {
                $views = 0;
                if ($i->masterplan != null) {
                    $views =  views($i->masterplan)->count();
                }

                return [
                    'views' => $views,
                    'title' => $i->masterplan?->title,
                    'author' => $i->masterplan?->author,
                    'city' => $i->masterplan?->city,
                    'country' => $i->masterplan?->country,
                    'image' => $i->masterplan?->image,
                    'id' => $i->masterplan?->id,
                    'category' => $i->masterplan?->category,
                    'size' => $i->masterplan?->size,
                    'tags' => $i->masterplan?->tags,
                ];
            })->toArray();
        }
        if ($category == 'streetscapes') {

            $streets = CollectionName::with('collections')->find($id);

            $all_data = $streets->collections->map(function ($i) {

                $views = 0;
                if ($i->streetscape != null) {
                    $views =  views($i->streetscape)->count();
                }

                return [
                    'views' => $views,
                    'title' => $i->streetcape?->title,
                    'author' => $i->streetcape?->author,
                    'city' => $i->streetcape?->city,
                    'imagea' => $i->streetcape?->imagea,
                    'imageb' => $i->streetcape?->imageb,
                    'country' => $i->streetcape?->country,
                    'address' => $i->streetcape?->address,
                    'id' => $i->streetcape?->id,
                    'category' => $i->streetcape?->category,
                    'size' => $i->streetcape?->size,
                    'tags' => $i->streetcape?->tags
                ];
            })->toArray();
        }
        if ($category == 'urbanscapes') {

            $neighbs = CollectionName::with('collections')->find($id);



            $all_data = $neighbs->collections->map(function ($i) {
                $views = 0;
                if ($i->urbanscape != null) {
                    $views =  views($i->urbanscape)->count();
                }
                return [
                    'views' => $views,
                    'title' => $i->urbanscape?->title,
                    'author' => $i->urbanscape?->author,
                    'city' => $i->urbanscape?->city,
                    'imagea' => $i->urbanscape?->imagea,
                    'imageb' => $i->urbanscape?->imageb,
                    'country' => $i->urbanscape?->country,
                    'address' => $i->urbanscape?->address,
                    'id' => $i->urbanscape?->id,
                    'category' => $i->urbanscape?->category,
                    'size' => $i->urbanscape?->size,
                    'tags' => $i->urbanscape?->tags
                ];
            })->toArray();
        }


        if ($request->filled('tags')) {
            if ($category == 'masterplans') {

                $all_data = CollectionName::with('collections')->find($id);

                $all_data = $all_data->collections->map(function ($i) {
                    $tags = request()->input('tags');
                    $i->masterplan
                        ->where('tags', 'like', '%' . $tags . '%')
                        ->map(function ($i) {
                            return [
                                'views' => views($i->masterplan)->count(),
                                'title' => $i->masterplan->title,
                                'author' => $i->masterplan->author,
                                'city' => $i->masterplan->city,
                                'image' => $i->masterplan->image,
                                'id' => $i->masterplan->id,
                                'category' => $i->masterplan->category,
                                'size' => $i->masterplan->size,
                                'tags' => $i->masterplan->tags
                            ];
                        })->toArray();
                });
            }
            if ($category == 'streetscapes') {
                $all_data = CollectionName::with('collections')->find($id);

                $all_data = $all_data->collections->map(function ($i) {
                    $tags = request()->input('tags');
                    $i->streetscape
                        ->where('tags', 'like', '%' . $tags . '%')
                        ->map(function ($i) {
                            return [
                                'views' => views($i->streetscape)->count(),
                                'title' => $i->streetcape->title,
                                'author' => $i->streetcape->author,
                                'city' => $i->streetcape->city,
                                'imagea' => $i->streetcape->imagea,
                                'imageb' => $i->streetcape->imageb,
                                'country' => $i->streetcape->country,
                                'address' => $i->streetcape->address,
                                'id' => $i->streetcape->id,
                                'category' => $i->streetcape->category,
                                'size' => $i->streetcape->size,
                                'tags' => $i->streetcape->tags
                            ];
                        })->toArray();
                });
            }
            if ($category == 'urbanscapes') {
                $all_data = CollectionName::with('collections')->find($id);

                $all_data = $all_data->collections->map(function ($i) {
                    $tags = request()->input('tags');
                    $i->urbanscape
                        ->where('tags', 'like', '%' . $tags . '%')
                        ->map(function ($i) {
                            return [
                                'views' => views($i->urbanscape)->count(),
                                'title' => $i->urbanscape->title,
                                'author' => $i->urbanscape->author,
                                'city' => $i->urbanscape->city,
                                'imagea' => $i->urbanscape->imagea,
                                'imageb' => $i->urbanscape->imageb,
                                'country' => $i->urbanscape->country,
                                'address' => $i->urbanscape->address,
                                'id' => $i->urbanscape->id,
                                'category' => $i->urbanscape->category,
                                'size' => $i->urbanscape->size,
                                'tags' => $i->urbanscape->tags
                            ];
                        })->toArray();
                });
            }
        }
        if ($request->filled('status')) {
            if ($category == 'masterplans') {
                $all_data = Masterplan::where('active', 1)
                    ->where('status', 'like', '%' . $status . '%')
                    ->map(function ($i) {
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
                    ->map(function ($i) {
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
                    ->map(function ($i) {
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
                    ->map(function ($i) {
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
