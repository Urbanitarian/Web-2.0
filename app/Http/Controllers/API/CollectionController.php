<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\CollectionName;
use App\Models\Masterplan;
use App\Models\Neighbourhood;
use App\Models\Streetscape;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

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


        $cls = CollectionName::with('collections')->find($id);

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


        if ($category == 'masterplans') {


            $all_data = $cls?->collections->map(function ($i) {
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


            $all_data = $cls?->collections->map(function ($i) {

                $views = 0;
                if ($i->streetscape != null) {
                    $views =  views($i->streetscape)->count();
                }

                return [
                    'views' => $views,
                    'title' => $i->streetscape?->title,
                    'author' => $i->streetscape?->author,
                    'city' => $i->streetscape?->city,
                    'imagea' => $i->streetscape?->imagea,
                    'imageb' => $i->streetscape?->imageb,
                    'country' => $i->streetscape?->country,
                    'address' => $i->streetscape?->address,
                    'id' => $i->streetscape?->id,
                    'category' => $i->streetscape?->category,
                    'size' => $i->streetscape?->size,
                    'tags' => $i->streetscape?->tags
                ];
            })->toArray();
        }
        if ($category == 'urbanscapes') {

            $all_data = $cls?->collections->map(function ($i) {
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
                $all_data = $cls->collections->map(function ($i) {
                    $tags = request()->input('tags');
                    $i->masterplan
                        ->where('tags', 'like', '%' . $tags . '%')
                        ->get()
                        ->map(function ($i) {
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
                });
            }
            if ($category == 'streetscapes') {

                $all_data = $cls->collections->map(function ($i) {
                    $tags = request()->input('tags');
                    $i->streetscape
                        ->where('tags', 'like', '%' . $tags . '%')
                        ->get()
                        ->map(function ($i) {

                            $views = 0;
                            if ($i->streetscape != null) {
                                $views =  views($i->streetscape)->count();
                            }

                            return [
                                'views' => $views,
                                'title' => $i->streetscape?->title,
                                'author' => $i->streetscape?->author,
                                'city' => $i->streetscape?->city,
                                'imagea' => $i->streetscape?->imagea,
                                'imageb' => $i->streetscape?->imageb,
                                'country' => $i->streetscape?->country,
                                'address' => $i->streetscape?->address,
                                'id' => $i->streetscape?->id,
                                'category' => $i->streetscape?->category,
                                'size' => $i->streetscape?->size,
                                'tags' => $i->streetscape?->tags
                            ];
                        })->toArray();
                });
            }
            if ($category == 'urbanscapes') {

                $all_data = $cls->collections->map(function ($i) {
                    $tags = request()->input('tags');
                    $i->urbanscape
                        ->where('tags', 'like', '%' . $tags . '%')
                        ->get()
                        ->map(function ($i) {
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
                });
            }
        }
        if ($request->filled('status')) {
            if ($category == 'masterplans') {

                $all_data = $cls->collections->map(function ($i) {
                    $status = request()->input('status');
                    $i->masterplan
                        ->where('status', 'like', '%' . $status . '%')
                        ->get()
                        ->map(function ($i) {
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
                });
            }
            if ($category == 'streetscapes') {

                $all_data = $cls->collections->map(function ($i) {
                    $status = request()->input('status');
                    $i->streetscape
                        ->where('status', 'like', '%' . $status . '%')
                        ->get()
                        ->map(function ($i) {

                            $views = 0;
                            if ($i->streetscape != null) {
                                $views =  views($i->streetscape)->count();
                            }

                            return [
                                'views' => $views,
                                'title' => $i->streetscape?->title,
                                'author' => $i->streetscape?->author,
                                'city' => $i->streetscape?->city,
                                'imagea' => $i->streetscape?->imagea,
                                'imageb' => $i->streetscape?->imageb,
                                'country' => $i->streetscape?->country,
                                'address' => $i->streetscape?->address,
                                'id' => $i->streetscape?->id,
                                'category' => $i->streetscape?->category,
                                'size' => $i->streetscape?->size,
                                'tags' => $i->streetscape?->tags
                            ];
                        })->toArray();
                });
            }
            if ($category == 'urbanscapes') {

                $all_data = $cls->collections->map(function ($i) {
                    $status = request()->input('status');
                    $i->urbanscape
                        ->where('status', 'like', '%' . $status . '%')
                        ->get()
                        ->map(function ($i) {
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
                });
            }
        }

        if ($request->filled('size')) {
            if ($category == 'masterplans') {

                $all_data = $cls->collections->map(function ($i) {
                    $size = request()->input('size');
                    $i->masterplan
                        ->where('size', '=', $size)
                        ->get()
                        ->map(function ($i) {
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
                });
            }
            if ($category == 'streetscapes') {

                $all_data = $cls->collections->map(function ($i) {
                    $size = request()->input('size');
                    $i->streetscape
                        ->where('size', '=', $size)
                        ->get()
                        ->map(function ($i) {

                            $views = 0;
                            if ($i->streetscape != null) {
                                $views =  views($i->streetscape)->count();
                            }

                            return [
                                'views' => $views,
                                'title' => $i->streetscape?->title,
                                'author' => $i->streetscape?->author,
                                'city' => $i->streetscape?->city,
                                'imagea' => $i->streetscape?->imagea,
                                'imageb' => $i->streetscape?->imageb,
                                'country' => $i->streetscape?->country,
                                'address' => $i->streetscape?->address,
                                'id' => $i->streetscape?->id,
                                'category' => $i->streetscape?->category,
                                'size' => $i->streetscape?->size,
                                'tags' => $i->streetscape?->tags
                            ];
                        })->toArray();
                });
            }
            if ($category == 'urbanscapes') {

                $all_data = $cls->collections->map(function ($i) {
                    $size = request()->input('size');
                    $i->urbanscape
                        ->where('size', '=', $size)
                        ->get()
                        ->map(function ($i) {
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
                });
            }
        }

        if ($request->filled('city')) {
            if ($category == 'masterplans') {

                $all_data = $cls->collections->map(function ($i) {
                    $city = request()->input('city');
                    $i->masterplan
                        ->where('city', '=', $city)
                        ->get()
                        ->map(function ($i) {
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
                });
            }
            if ($category == 'streetscapes') {

                $all_data = $cls->collections->map(function ($i) {
                    $city = request()->input('city');
                    $i->streetscape
                        ->where('city', '=', $city)
                        ->get()
                        ->map(function ($i) {

                            $views = 0;
                            if ($i->streetscape != null) {
                                $views =  views($i->streetscape)->count();
                            }

                            return [
                                'views' => $views,
                                'title' => $i->streetscape?->title,
                                'author' => $i->streetscape?->author,
                                'city' => $i->streetscape?->city,
                                'imagea' => $i->streetscape?->imagea,
                                'imageb' => $i->streetscape?->imageb,
                                'country' => $i->streetscape?->country,
                                'address' => $i->streetscape?->address,
                                'id' => $i->streetscape?->id,
                                'category' => $i->streetscape?->category,
                                'size' => $i->streetscape?->size,
                                'tags' => $i->streetscape?->tags
                            ];
                        })->toArray();
                });
            }
            if ($category == 'urbanscapes') {

                $all_data = $cls->collections->map(function ($i) {
                    $city = request()->input('city');
                    $i->urbanscape
                        ->where('city', '=', $city)
                        ->get()
                        ->map(function ($i) {
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
                });
            }
        }

        if ($request->filled('country')) {
            if ($category == 'masterplans') {

                $all_data = $cls->collections->map(function ($i) {
                    $country = request()->input('country');
                    $i->masterplan
                        ->where('country', '=', $country)
                        ->get()
                        ->map(function ($i) {
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
                });
            }
            if ($category == 'streetscapes') {

                $all_data = $cls->collections->map(function ($i) {
                    $country = request()->input('country');
                    $i->streetscape
                        ->where('country', '=', $country)
                        ->get()
                        ->map(function ($i) {

                            $views = 0;
                            if ($i->streetscape != null) {
                                $views =  views($i->streetscape)->count();
                            }

                            return [
                                'views' => $views,
                                'title' => $i->streetscape?->title,
                                'author' => $i->streetscape?->author,
                                'city' => $i->streetscape?->city,
                                'imagea' => $i->streetscape?->imagea,
                                'imageb' => $i->streetscape?->imageb,
                                'country' => $i->streetscape?->country,
                                'address' => $i->streetscape?->address,
                                'id' => $i->streetscape?->id,
                                'category' => $i->streetscape?->category,
                                'size' => $i->streetscape?->size,
                                'tags' => $i->streetscape?->tags
                            ];
                        })->toArray();
                });
            }
            if ($category == 'urbanscapes') {

                $all_data = $cls->collections->map(function ($i) {
                    $country = request()->input('country');
                    $i->urbanscape
                        ->where('country', '=', $country)
                        ->get()
                        ->map(function ($i) {
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
                });
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
