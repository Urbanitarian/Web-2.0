<?php

namespace App\Http\Controllers;

use App\Models\CollectionName;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function test()
    {

        session()->forget('FRONT_USER_ID');
        session()->forget('FRONT_USER_LOGIN');
        session()->forget('FRONT_USER_NAME');

        // $masters = CollectionName::where('user_id', session()->get('FRONT_USER_ID'))->with('collections')->find(1);


        // $all_data = $masters->collections->map(function ($i) {

        //     return [
        //         //  'views' => $views,
        //         'title' => $i->masterplan->title,
        //         'author' => $i->masterplan->author,
        //         'city' => $i->masterplan->city,
        //         'country' => $i->masterplan->country,
        //         'image' => $i->masterplan->image,
        //         'id' => $i->masterplan->id,
        //         'category' => $i->masterplan->category,
        //         'size' => $i->masterplan->size,
        //         'tags' => $i->masterplan->tags,
        //     ];
        // })->toArray();

        // dd($all_data);
    }
}
