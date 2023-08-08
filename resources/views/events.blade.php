@extends('main')

@section('content')
    <div class="content-header mb-3">

        <div class="p-2">
            <h3>Event Details</h3>
        </div>
        <div class="card w-100">
            <div class="card-body">
                <h4 class="mb-1">Event Name</h2>
                    <h5 class="fw-normal">Rapat Open Air</h5>
                    <h4 class="mb-1">Event Topic</h2>
                        <h5 class="fw-normal m-0">Rapat Open Air</h5>
            </div>
        </div>
    </div>
    <div class="content-body">

        <div class="p-2">
            <h3>Attendees</h3>
        </div>
        <div class="card w-100">
            <div class="card-body">
                @foreach ($attendees as $attendee)
                    <h4 class="mb-1">{{ $attendee->name }}</h4>
                    <h5 class="fw-normal">{{ $attendee->role }}</h5>
                @endforeach

            </div>
        </div>
    </div>
@endsection
