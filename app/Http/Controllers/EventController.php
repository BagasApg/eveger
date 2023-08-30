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
        $sidebar_activation = '';
        $attendees = Attendee::where('event_id', $event->id)->get();
        // dd($attendees->attendees()->get());
        $attendees_total = count($attendees);
        $current_event = Event::where('slug', $slug)->first();
        $carbon = new Carbon();
        return view('events', compact(['events', 'event', 'sidebar_activation', 'attendees', 'attendees_total', 'current_event', 'carbon']));
    }

    public function dashboard()
    {
        $user = User::find(auth()->user()->id);

        $events = Event::where('user_id', $user->id)->get();
        $upcoming_events = Event::where('user_id', $user->id)->whereDate('start_date', '>=', Carbon::now())->orderBy('start_date', 'desc')->take(3)->get();
        $attendees = Attendee::whereHas('event', function($query) use($user){
            $query->where('user_id', $user->id);
        })->get();
        // dd($attendees);
        // dd($upcoming_events);
        $ongoing_events = Event::where('user_id', $user->id)->whereDay('start_date', Carbon::today())->get();
        
        $sidebar_activation = '/';

        $carbon = new Carbon();
        return view('dashboard', compact(['events','sidebar_activation', 'carbon', 'upcoming_events','ongoing_events']));
    }

    public function create()
    {
        $user = User::find(auth()->user()->id);

        $events = Event::where('user_id', $user->id)->get();
        $sidebar_activation = '/add';
        $carbon = new Carbon();
        return view('events.add', compact(['events','sidebar_activation', 'carbon']));
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
        // dd($request->start_date);

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
        $sidebar_activation = '/edit';
        $carbon = new Carbon();
        return view('events.edit', compact(['events','current_event','sidebar_activation', 'carbon']));
    }

    public function update(Request $request)
    {
        // dd($request->start_date);
        $request->validate([
            'name' => 'required',
            'slug' => 'required',
            'topic' => 'nullable',
            'creator' => 'required',
            'start_date' => 'date'
        ]);

        $updated = Event::find($request->id);
        $updated->name = $request->name;
        $updated->topic = $request->topic;
        $updated->creator = $request->creator;
        $updated->start_date = Carbon::parse($request->start_date);
        $updated->save();
        return redirect('/events/' . $request->slug)->with('success', 'Event edited successfully!');

    }

    public function destroy($slug){
        $event = Event::where('slug', $slug)->first();
        Event::where('slug', $slug)->first()->delete();

        return redirect('/events/')->with('success', 'Event '. $event->name .' deleted!');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Event::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}
