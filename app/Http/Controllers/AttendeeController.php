<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
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
        $carbon = new Carbon();
        return view('add', compact(['events', 'current_event','carbon']));
    }

    public function store(Request $request)
    {
        
        $request->validate([
            // 'event_id' => 'required',
            'name' => 'required',
            'role' => 'required',
            'email' => 'required'
        ]);

        Attendee::create($request->all());
        return redirect('events/'. $request->event_id)
            ->with('success', 'Attendee added!');
    }

    public function destroy(Request $request, $id)
    {
        // dd($id);
        Attendee::find($id)->delete();

        return redirect('events/'. $request->event_id)
                ->with('success', "Attendee deleted!");
    }
}
