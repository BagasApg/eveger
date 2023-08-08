@extends('main')

@section('title')
    {{ $current_event->name }}
@endsection

@section('content')
    <div class="content-header mb-1">

        <div class="p-2 pt-0 ps-1">
            <h3 class="mb-1">Event Details</h3>
        </div>
        <div class="card w-100">
            <div class="card-body py-3">
                <h5 style="font-size: 16px" class="m-0 fw-bold">Event Name</h5>
                <h5 class="fw-normal">Rapat Open Air</h5>
                <h5 style="font-size: 16px" class="m-0 fw-bold">Event Topic</h5>
                <h5 class="fw-normal m-0">Rapat Open Air</h5>
            </div>
        </div>
    </div>
    <div class="content-body pt-1">

        <div class="p-2 ps-1">
            <h3 class="mb-1">Attendees</h3>
        </div>
        {{-- @foreach ($attendees as $attendee)
                    <h4 class="mb-1">{{ $attendee->name }}</h4>
                    <h5 class="fw-normal">{{ $attendee->role }}</h5>
                @endforeach --}}
        <div class="card w-100">
            <div class="card-body">
                <div class="attendees-table-header pb-4">
                    <div class="d-flex gap-3">
                        <div class="standard-btn attendees-counter rounded-pill">{{ $attendees_total }} Attendees</div>
                        <a href="/events/{{ $current_event->id }}/add">
                            <div class="standard-btn tambah">
                                <div class="d-flex align-items-center gap-1">

                                    <i style="width: 20px; height: 20px" data-feather="user-plus"></i>
                                    Add Attendee
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="attendees-table-body" style="height: 33vh;overflow-y: auto; overflow-x:hidden;">
                    <table class="table">
                        <thead>
                            <tr>
                                <th style="width: 7%">#</th>
                                <th style="width: 33%">Name</th>
                                <th style="width: 10%">Role</th>
                                <th style="width: 30%">Email</th>
                                <th style="width: 10%">Phone</th>
                                <th class="text-center" style="width: 10%">
                                    <i style="width:    16px; height:16px" data-feather="link-2"></i>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($attendees as $attendee)
                                <tr>
                                    <th class="py-0" style="width: 7%">{{ $loop->iteration }}</th>
                                    <td class="py-0" style="width: 33%">{{ $attendee->name }}</td>
                                    <td class="py-0" style="width: 10%">{{ $attendee->role }}</td>
                                    <td class="py-0" style="width: 30%">{{ $attendee->email }}</td>
                                    <td class="py-0" style="width: 10%">{{ $attendee->phone }}</td>
                                    <td class="py-0" style="width: 10%">
                                        <div class="action-buttons d-flex justify-content-center">
                                            <div class="btn btn-primary">
                                                <i style="width:    16px; height:16px"data-feather="edit"></i>
                                            </div>
                                            <div class="btn btn-primary">
                                                <i style="width:    16px; height:16px"data-feather="trash-2"></i>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>



            </div>
        </div>
    </div>
@endsection
