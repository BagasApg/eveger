<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Attendee;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EventController extends Controller
{
    public function index($id){
        $events = Event::all();
        $attendees = Attendee::where('event_id',$id)->get();
        $attendees_total = count($attendees);
        $current_event = Event::find($id);
        return view('events', compact(['events', 'attendees','attendees_total','current_event']));
    }

    
}
