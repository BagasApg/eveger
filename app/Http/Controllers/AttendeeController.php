<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Attendee;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AttendeeController extends Controller
{
    public function create($id)
    {
        $events = Event::all();
        $current_event = Event::find($id);
        return view('add', compact(['events', 'current_event']));
    }

    public function store(Request $request)
    {
        
        $request->validate([
            // 'event_id' => 'required',
            'name' => 'required',
            'role' => 'required',
            'email' => 'required',
            'phone' => 'required'
        ]);

        Attendee::create($request->all());
        return redirect('events/'. $request->event_id)
            ->with('success', 'Attendee added!');
    }
}
