<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Event;
use App\Models\Attendee;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AttendeeController extends Controller
{
    // Create
    public function create($id){
        $events = Event::all();
        $current_event = Event::find($id);
        $carbon = new Carbon();
        return view('attendees.add', compact(['events', 'current_event','carbon']));
    }

    public function store(Request $request){
        
        $request->validate([
            // 'event_id' => 'required',
            'name' => 'required|max:255',
            'role' => 'required|max:255',
            'email' => 'required'
        ]);

        Attendee::create($request->all());


        return redirect('events/'. $request->event_id)
            ->with('success', 'Attendee added successfully!');
    }

    // Edit
    public function show($eventid, $id){
        $events = Event::all();
        $current_event = Event::find($eventid);
        $current_attendee = Attendee::find($id);
        // dd($current_attendee);
        $carbon = new Carbon();
        return view('attendees.edit', compact(['events', 'current_event','current_attendee','carbon']));
    }

    public function update(Request $request){
        
        $request->validate([
            // 'event_id' => 'required',
            'name' => 'required|max:255',
            'role' => 'required|max:255',
            'email' => 'required'
        ]);
        // dd($request);
        Attendee::where('id', $request->id) 
                ->update([
                    'name' => $request->name,
                    'role' => $request->role,
                    'email' => $request->email
                ]);


        return redirect('events/'. $request->event_id)
            ->with('success', 'Attendee edited successfully!');
    }
    public function destroy(Request $request, $id){
        // dd($id);
        Attendee::find($id)->delete();
        // dd('masuk');
        return redirect('events/'. $request->event_id)
                ->with('success', "Attendee deleted!");
    }
}
