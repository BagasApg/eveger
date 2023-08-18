<?php

namespace App\Http\Controllers;

use Cviebrock\EloquentSluggable\Sluggable;
use App\Models\Event;
use App\Models\Attendee;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

class EventController extends Controller
{
    public function index($id){
        $events = Event::all();
        $attendees = Attendee::where('event_id',$id)->get();
        $attendees_total = count($attendees);
        $current_event = Event::find($id);
        $carbon = new Carbon();
        return view('events', compact(['events', 'attendees','attendees_total','current_event', 'carbon']));
    }

    public function dashboard(){
        $events = Event::all();
        $carbon = new Carbon();
        return view('dashboard', compact(['events', 'carbon']));
    }
    
    public function create(){
        $events = Event::all();
        $carbon = new Carbon();
        return view('events.add', compact(['events', 'carbon']));
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'topic' => 'nullable',
            'creator' => 'required',
            'start_date' => 'date'
        ]);

        $event = new Event;
        $event->name = $request->name;
        $event->topic = $request->topic;
        $event->creator = $request->creator;
        $event->start_date = Carbon::parse($request->start_date);
        $event->save();


        // $tes = Event::where('username', $request->username)->get();
        // dd($tes);
        return redirect()->route('events_index', $event->id);
    }
}
