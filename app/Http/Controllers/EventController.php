<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Event;
use App\Models\Attendee;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class EventController extends Controller
{
    public function index($slug)
    {
        $user = User::find(auth()->user()->id);

        $events = Event::where('user_id', $user->id)->get();
        $event = Event::where('slug', $slug)->first();
        $attendees = Attendee::where('event_id', $event->id)->get();
        // dd($attendees->attendees()->get());
        $attendees_total = count($attendees);
        $current_event = Event::where('slug', $slug)->first();
        $carbon = new Carbon();
        return view('events', compact(['events', 'event', 'attendees', 'attendees_total', 'current_event', 'carbon']));
    }

    public function dashboard()
    {
        $user = User::find(auth()->user()->id);

        $events = Event::where('user_id', $user->id)->get();
        $carbon = new Carbon();
        return view('dashboard', compact(['events', 'carbon']));
    }

    public function create()
    {
        $user = User::find(auth()->user()->id);

        $events = Event::where('user_id', $user->id)->get();
        $carbon = new Carbon();
        return view('events.add', compact(['events', 'carbon']));
    }

    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'name' => 'required',
            'slug' => 'required',
            'topic' => 'nullable',
            'creator' => 'required',
            'start_date' => 'date'
        ]);

        $tes = auth()->user()->events->where('slug', $request->slug)->first();

        if ($tes != null) {
            return back()->with('error', 'Slug already exists!');
        }

        $event = new Event;
        $event->user_id = auth()->user()->id;
        $event->name = $request->name;
        $event->slug = $request->slug;
        $event->topic = $request->topic;
        $event->creator = $request->creator;
        $event->start_date = Carbon::parse($request->start_date);
        $event->save();


        // $tes = Event::where('username', $request->username)->get();
        // dd($tes);
        return redirect()->route('events_index', $event->slug);
    }
    public function show($slug)
    {
        $user = User::find(auth()->user()->id);

        $events = Event::where('user_id', $user->id)->get();
        $current_event = Event::where('slug', $slug)->first();
        $carbon = new Carbon();
        return view('events.edit', compact(['events','current_event', 'carbon']));
    }


    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Event::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}
