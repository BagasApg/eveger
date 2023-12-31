<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Event;
use App\Models\Attendee;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class  AttendeeController extends Controller
{
    // Create
    public function create($slug)
    {
        $user = User::find(auth()->user()->id);

        $events = Event::where('user_id', $user->id)->get();
        $current_event = Event::where('slug', $slug)->first();
        $sidebar_activation = '/add';
        $carbon = new Carbon();
        return view('attendees.add', compact(['events', 'current_event', 'sidebar_activation', 'carbon']));
    }

    public function store(Request $request)
    {

        $request->validate([
            // 'event_id' => 'required',
            'name' => 'required|max:255',
            'role' => 'required|max:255',
            'email' => 'required'
        ]);

        Attendee::create($request->all());


        return redirect('events/' . $request->slug)
            ->with('success', 'Attendee added successfully!');
    }

    // Edit
    public function show($slug, $id)
    {
        $user = User::find(auth()->user()->id);

        $events = Event::where('user_id', $user->id)->get();
        $current_event = Event::where('slug', $slug)->first();
        $sidebar_activation = '/edit/*';

        $current_attendee = Attendee::find($id);
        // dd($current_attendee);
        $carbon = new Carbon();
        return view('attendees.edit', compact(['events', 'current_event', 'sidebar_activation', 'current_attendee', 'carbon']));
    }

    public function update(Request $request)
    {

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


        return redirect('events/' . $request->slug)
            ->with('success', 'Attendee edited successfully!');
    }
    public function destroy(Request $request, $slug, $id)
    {
        // dd($id);
        // Attendee::find($id)->delete();
        // $event = Event::where('slug', $slug)->first();
        Attendee::find($id)->delete();
        // dd('masuk');
        return redirect('events/' . $request->slug)
            ->with('success', "Attendee deleted!");
    }
}
