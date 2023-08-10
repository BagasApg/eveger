<?php

namespace App\Http\Controllers;

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

    
}
