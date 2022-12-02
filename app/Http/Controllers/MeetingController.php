<?php

namespace App\Http\Controllers;

use App\Models\Meeting;
use Illuminate\Http\Request;

class MeetingController extends Controller
{
    public function index()
    {
        $meetings = Meeting::get();
        return view('meeting', compact('meetings'));
    }

    public function create()
    {
        return view('add-view');
    }

    public function store(Request $request)
    {
            $data = $request->all();
            Meeting::create([
                'email'     => $data['email'],
                'subject'   => $data['subject'],
                'address'   => $data['address'],
                'start_date' => $data['start_date'],
                'end_date'  => $data['end_date'],
                'start_time' => $data['start_time'],
                'end_time'  => $data['end_time']
            ]);
            return redirect()->back()->with('success', 'Data created successfully!');

    }
    public function show($id)
    {
        $meeting = Meeting::where('id',$id)->first();
        return view('show',compact('meeting'));
    }

    public function edit($id)
    {
        $meeting = Meeting::where('id',$id)->first();
        return view('edit-view',compact('meeting'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $meeting = Meeting::where('id',$id)
                    ->update([
                        'email'     => $data['email'],
                        'subject'   => $data['subject'],
                        'address'   => $data['address'],
                        'start_date' => $data['start_date'],
                        'end_date'  => $data['end_date'],
                        'start_time' => $data['start_time'],
                        'end_time'  => $data['end_time'],
                ]);
    
        return redirect()->back()->with('success', 'Data updated successfully!');

    }

    public function delete($id)
    {
        Meeting::where('id',$id)->delete();
        return redirect()->back()->with('success', 'Data Deleted successfully!');

    }
}