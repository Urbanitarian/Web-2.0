<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Masterplan;

class MasterplansController extends Controller
{
    public function index() 
    { 
        $masters = Masterplan::all();
        return response()->json($masters);
    }

}
