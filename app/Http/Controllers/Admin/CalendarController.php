<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class CalendarController extends Controller
{
    public function index()
    {
        $data['something'] = 'Something';

        return view('admin.calendar', $data);
    }
}