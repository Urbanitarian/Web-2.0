<?php

namespace App\Http\Controllers;

use App\Models\CollectionName;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function test()
    {

        $masters = CollectionName::with('collections')->find(1);


        $all_data = $masters->collections->map(function ($i) {
            $views = views($i->masterplan)->count();
            return [
                'views' => $views,
                'title' => $i->masterplan->title,
                'author' => $i->masterplan->author,
                'city' => $i->masterplan->city,
                'country' => $i->masterplan->country,
                'image' => $i->masterplan->image,
                'id' => $i->masterplan->id,
                'category' => $i->masterplan->category,
                'size' => $i->masterplan->size,
                'tags' => $i->masterplan->tags,
            ];
        })->toArray();

        dd($all_data);
    }
}
