<?php

namespace App\Http\Controllers;

use App\Models\CollectionName;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function test()
    {

        $cl = CollectionName::with('collections')->find(1);

        dd($cl);
    }
}
