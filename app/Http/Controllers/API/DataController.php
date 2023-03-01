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
        $q = request()->input('q');
        $tags = request()->input('tags');
        $size = request()->input('size');
        $category = request()->input('category');
        $status = request()->input('status');
        $pop = request()->input('pop');

        if ($q) { 
            $masters = Masterplan::where('active', 1)->where('title','like','%' . $q . '%')->orWhere('tags', 'like', '%' . $q . '%')->orWhere('category', 'like', '%' . $q . '%')->orWhere('city', 'like', '%' . $q . '%')->orWhere('country', 'like', '%' . $q . '%')->get();
            $streets = Streetscape::where('active', 1)->where('title','like','%' . $q . '%')->orWhere('tags', 'like', '%' . $q . '%')->orWhere('category', 'like', '%' . $q . '%')->orWhere('city', 'like', '%' . $q . '%')->orWhere('country', 'like', '%' . $q . '%')->get();
            $neighbs = Neighbourhood::where('active', 1)->where('title','like','%' . $q . '%')->orWhere('tags', 'like', '%' . $q . '%')->orWhere('category', 'like', '%' . $q . '%')->orWhere('city', 'like', '%' . $q . '%')->orWhere('country', 'like', '%' . $q . '%')->get();
            $all_data = array_merge(
                $masters->toArray(),
                $streets->toArray(),
                $neighbs->toArray()
                
            );
        }elseif ($tags) {
            $masters = Masterplan::where('active', 1)->where('tags','like','%' . $tags . '%')->get();
            $streets = Streetscape::where('active', 1)->where('tags','like','%' . $tags . '%')->get();
            $neighbs = Neighbourhood::where('active', 1)->where('tags','like','%' . $tags . '%')->get();
            $all_data = array_merge(
                $masters->toArray(),
                $streets->toArray(),
                $neighbs->toArray()
                
            );
        }elseif ($status) {
            $masters = Masterplan::where('active', 1)->where('status','like','%' . $status . '%')->get();
            $streets = Streetscape::where('active', 1)->where('status','like','%' . $status . '%')->get();
            $neighbs = Neighbourhood::where('active', 1)->where('status','like','%' . $status . '%')->get();
            $all_data = array_merge(
                $masters->toArray(),
                $streets->toArray(),
                $neighbs->toArray()
                
            );
        }elseif ($pop) {
            if ($pop == 'new') {
                $masters = Masterplan::where('active', 1)->orderBy('created_at', 'desc')->get();
                $streets = Streetscape::where('active', 1)->orderBy('created_at', 'desc')->get();
                $neighbs = Neighbourhood::where('active', 1)->orderBy('created_at', 'desc')->get();
                $all_data = array_merge(
                    $masters->toArray(),
                    $streets->toArray(),
                    $neighbs->toArray()
                    
                );
            }elseif ($pop == 'old') {
                $masters = Masterplan::where('active', 1)->orderBy('created_at', 'asc')->get();
                $streets = Streetscape::where('active', 1)->orderBy('created_at', 'asc')->get();
                $neighbs = Neighbourhood::where('active', 1)->orderBy('created_at', 'asc')->get();
                $all_data = array_merge(
                    $masters->toArray(),
                    $streets->toArray(),
                    $neighbs->toArray()
                    
                );
            }
        }elseif ($size) {
            $masters = Masterplan::where('active', 1)->where('size','=', $size)->get();
            $streets = Streetscape::where('active', 1)->where('size','=', $size)->get();
            $neighbs = Neighbourhood::where('active', 1)->where('size','=', $size)->get();
            $all_data = array_merge(
                $masters->toArray(),
                $streets->toArray(),
                $neighbs->toArray()
                
            );
        }elseif ($category == 'masterplans') {
                    $masters = Masterplan::where('active', 1)->get();
                    $all_data = $masters->toArray();
        }elseif ($category == 'streetscapes') {
                    $streets = Streetscape::where('active', 1)->get();
                    $all_data = $streets->toArray();
        }elseif ($category == 'urbanscapes') {
                    $neighbs = Neighbourhood::where('active', 1)->get();
                    $all_data = $neighbs->toArray();
        }else {
                $masters = Masterplan::where('active', 1)->get();
                $streets = Streetscape::where('active', 1)->get();
                $neighbs = Neighbourhood::where('active', 1)->get();
                $all_data = array_merge(
                    $masters->toArray(),
                    $streets->toArray(),
                    $neighbs->toArray()
                );
         }
         //shuffle data
            shuffle($all_data);

        return response()->json($all_data);
    }

}
