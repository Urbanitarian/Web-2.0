<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Streetscape;

class StreetscapesController extends Controller
{
    public function index() 
    { 
        $streets = Streetscape::all();
        return response()->json($streets);
    }
}
