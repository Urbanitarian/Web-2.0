<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Collection;
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


    public function cols()
    {
        if (session()->has('FRONT_USER_LOGIN')) {
            return view('collections');
        } else {
            return redirect('/login');
        }
    }



    public function saveCollection(Request $request)
    {

        if (session()->has('FRONT_USER_LOGIN')) {

            $collection_id = $_POST['id'];

            $type = $_POST['type'];

            $c_id = $_POST['c_id'];

            $user_id = $request->session()->get('FRONT_USER_ID');

            switch ($type) {
                case 'master': {
                        $existing_master = Collection::where('master_id', $collection_id)
                            ->where('collection_name_id', $c_id)->first();
                        if ($existing_master) {
                            return response()->json([
                                'status' => 'exist',
                                'msg' => 'Collection already exist!'
                            ]);
                        }
                        Collection::create([
                            'master_id' => $collection_id,
                            'collection_name_id' => $c_id
                        ]);
                        return response()->json([
                            'status' => 'yes',
                            'msg' => 'Collection added successfully!'
                        ]);
                    }


                    break;
                case 'street': {
                        $existing_street = Collection::where('street_id', $collection_id)
                            ->where('collection_name_id', $c_id)->first();
                        if ($existing_street) {
                            return response()->json([
                                'status' => 'exist',
                                'msg' => 'Collection already exist!'
                            ]);
                        }
                        Collection::create([
                            'street_id' => $collection_id,
                            'collection_name_id' => $c_id
                        ]);
                        return response()->json([
                            'status' => 'yes',
                            'msg' => 'Collection added successfully!'
                        ]);
                    }
                    break;

                case 'urban': {
                        $existing_urban = Collection::where('urban_id', $collection_id)
                            ->where('collection_name_id', $c_id)->first();
                        if ($existing_urban) {
                            return response()->json([
                                'status' => 'exist',
                                'msg' => 'Collection already exist!'
                            ]);
                        }
                        Collection::create([
                            'urban_id' => $collection_id,
                            'collection_name_id' => $c_id
                        ]);
                        return response()->json([
                            'status' => 'yes',
                            'msg' => 'Collection added successfully!'
                        ]);
                    }
                    break;
            }
        } else {
            return response()->json([
                'status' => 'no',
                'msg' => 'Pleaes login!'
            ]);
        }




        // return response()->json('created');
    }

    public function removeCollection()
    {
        $collection_id = $_POST['id'];
        $type = $_POST['type'];

        switch ($type) {
            case 'master':

                Collection::where('master_id', $collection_id)->delete();
                return response()->json([
                    'status' => 'yes',
                ]);
                break;

            case 'street':

                Collection::where('street_id', $collection_id)->delete();
                return response()->json([
                    'status' => 'yes',
                ]);
                break;

            case 'urban':

                Collection::where('urban_id', $collection_id)->delete();
                return response()->json([
                    'status' => 'yes',
                ]);
                break;

            default:
                # code...
                break;
        }
    }

    public function checkCollection(Request $request)
    {


        $collection_id = $_POST['id'];
        $type = $_POST['type'];

        switch ($type) {
            case 'master':
                $existing_master = Collection::where('master_id', $collection_id)->first();
                if ($existing_master) {
                    return response()->json([
                        'status' => 'yes',
                        'id' => $collection_id
                    ]);
                } else {
                    return response()->json([
                        'status' => 'no',
                        'id' => $collection_id
                    ]);
                }
                break;
            case 'street':
                $existing_street = Collection::where('street_id', $collection_id)->first();
                if ($existing_street) {
                    return response()->json([
                        'status' => 'yes',
                        'id' => $collection_id
                    ]);
                } else {
                    return response()->json([
                        'status' => 'no',
                        'id' => $collection_id
                    ]);
                }
                break;


            default:

                $existing_street = Collection::where('urban_id', $collection_id)->first();
                if ($existing_street) {
                    return response()->json([
                        'status' => 'yes',
                        'id' => $collection_id
                    ]);
                } else {
                    return response()->json([
                        'status' => 'no',
                        'id' => $collection_id
                    ]);
                }
                break;
        }
    }


    public function collectionDetail($id)
    {

        $cls = CollectionName::with('collections')->find($id);

        $user_id = session()->get('FRONT_USER_ID');

        $masters = $cls->collections->map(function ($q) {
            if ($q->masterplan != null) {
                return   $this->masternum++;
            }
        })->count();

        $cls->collections->map(function ($q) {

            if ($q->streetscape != null) {

                return   $this->streetnum++;
            }
        })->count();

        $cls->collections->map(function ($q) {
            if ($q->urbanscape != null) {

                return   $this->urbannum++;
            }
        })->count();

        $mastercount = $this->masternum;
        $streetcount = $this->streetnum;
        $urbancount = $this->urbannum;


        $cities = City::all();

        $countries = Country::all();

        return view('collection_detail', compact('id', 'cities', 'countries', 'mastercount', 'streetcount', 'urbancount', 'cls'));
    }
}
