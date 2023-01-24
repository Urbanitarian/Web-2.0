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



        $users = Masterplan::all();
        return response()->json($users);
    }

    public function store(Request $request) 
    {

     }

    public function show(Data $data)
     {

     }

}
