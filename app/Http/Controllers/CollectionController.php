<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\CollectionName;
use App\Models\Country;
use App\Models\Masterplan;
use App\Models\Neighbourhood;
use App\Models\Streetscape;
use Illuminate\Http\Request;

class CollectionController extends Controller
{
    public $masternum = 0;
    public $streetnum = 0;
    public $urbannum = 0;
    public function collections()
    {
        return view('collections');
    }


    public function collectionDetail($id)
    {

        $cls = CollectionName::with('collections')->find($id);


        $masters = $cls->collections->map(function ($q) {
            if ($q->masterplan != null) {
                return   $this->masternum++;
            }
        })->count();

        $cls->collections->map(function ($q) {

            if ($q->streetscape != null) {

                return   $this->streetnum++;
            }
        })->toArray();

        $cls->collections->map(function ($q) {
            if ($q->urbanscape != null) {

                return   $this->urbannum++;
            }
        })->toArray();

        $mastercount = $this->masternum;
        $streetcount = $this->streetnum;
        $urbancount = $this->urbannum;


        $cities = City::all();

        $countries = Country::all();

        return view('collection_detail', compact('id', 'cities', 'countries', 'mastercount', 'streetcount', 'urbancount'));
    }
}
