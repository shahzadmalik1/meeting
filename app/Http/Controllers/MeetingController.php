<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MeetingController extends Controller
{
    public function index()
    {
        return view('meeting');
    }

    public function addView(Request $request)
    {
        dd('here');
       $data = $request->all();
    }
}