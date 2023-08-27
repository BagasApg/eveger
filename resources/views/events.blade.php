@extends('main')

@section('title')
    {{ $current_event->name }}
@endsection

@section('sidebar-activation')
@endsection

@section('content')
    <div class="content-header mb-1">

        <div class="p-2 pt-0 ps-1 d-flex justify-content-between">
            <h3 class="mb-1 centurygothic-bold">Event Details</h3>
        </div>
        <div class="card w-100">
            <div class="card-body py-3">
                <h5 style="font-size: 16px" class="mb-1 centurygothic-bold text-black">Event Name</h5>
                <h5 class="fw-light">{{ $current_event->name }}</h5>
                <h5 style="font-size: 16px" class="mb-1 centurygothic-bold text-black">Event Topic</h5>
                <h5 class="fw-light m-0">{{ $current_event->topic }}</h5>
            </div>
        </div>
    </div>
    <div class="content-body pt-1">

        <div class="p-2 ps-1">
            <h3 class="mb-1 centurygothic-bold">Attendees</h3>
        </div>
        {{-- @foreach ($attendees as $attendee)
                    <h4 class="mb-1">{{ $attendee->name }}</h4>
                    <h5 class="fw-normal">{{ $attendee->role }}</h5>
                @endforeach --}}

        <div class="card w-100">
            <div class="card-body mt-0">
                <div class="attendees-table-header pb-3">
                    <div class="d-flex gap-3">
                        <div class="standard-btn attendees-counter rounded-pill">{{ $attendees_total }} Attendees</div>
                        <a href="/events/{{ $current_event->slug }}/add">
                            <div class="standard-btn tambah">
                                <div class="d-flex align-items-center gap-1">

                                    <i style="width: 20px; height: 20px" data-feather="user-plus"></i>
                                    Add Attendee
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="attendees-table-body scrollbar scrollbar-attendees"
                    style="height: 32vh;overflow-y: auto; overflow-x:hidden;">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="centurygothic-bold" style="width: 7%">#</th>
                                <th class="centurygothic-bold" style="width: 20%">Name</th>
                                <th class="centurygothic-bold" style="width: 20%">Role</th>
                                <th class="centurygothic-bold" style="width: 35%">Email</th>
                                <th class="centurygothic-bold text-center" style="width: 18%">
                                    <i style="width:    16px; height:16px" data-feather="link-2"></i>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($attendees as $attendee)
                                <tr class="tr-attendees">
                                    <th class="py-0" style="width: 7%">{{ $loop->iteration }}</th>
                                    <td class="py-0" style="width: 20%">{{ $attendee->name }}</td>
                                    <td class="py-0" style="width: 20%">{{ $attendee->role }}</td>
                                    <td class="py-0" style="width: 35%">{{ $attendee->email }}</td>
                                    <td class="py-0" style="width: 18%">
                                        <div class="action-buttons d-flex justify-content-center p-1 gap-1">
                                            <a href="/events/{{ $current_event->slug }}/edit/{{ $attendee->id }}">
                                                <div class="btn btn-primary btn-sm">
                                                    <i style="width:    18px; height:18px"data-feather="edit"></i>
                                                </div>
                                            </a>
                                            <form id="delete-form" action="" method="POST">
                                                <input type="hidden" name="event_id" value="{{ $current_event->id }}">

                                                <button type="button" id="delete_attendee"
                                                    onclick="deleteAttend('/events/{{ $current_event->slug }}/delete/{{ $attendee->id }}', '{{ $attendee->name }}')"
                                                    class="p-0" style="border: none; background-color: white">
                                                    @csrf
                                                    @method('DELETE')

                                                    <div class="btn btn-danger btn-sm">
                                                        <i style="width:    18px; height:18px"data-feather="trash-2"></i>
                                                    </div>
                                                </button>
                                            </form>

                                        </div>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
                @if (Session::has('success'))
                    <script>
                        toastr.success("{!! session('success') !!}");
                    </script>
                    {{-- @elseif(Session::has('deleted'))
                    <script>
                        toastr.success('Attendee deleted successfully!');
                    </script> --}}
                @endif
                <script>
                    function deleteAttend(url, attendeeName) {
                        $(document).ready(function() {
                            Swal.fire({
                                title: 'Are you sure',
                                text: "This action is irreversible. Continue?",
                                icon: 'warning',
                                showCancelButton: true,
                                confirmButtonColor: '#3085d6',
                                cancelButtonColor: '#d33',
                                confirmButtonText: 'Yes, delete it!'
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    Swal.fire(
                                        'Deleted!',
                                        'Attendee "' + attendeeName + '" deleted!',
                                        'success'
                                    ).then(() => {
                                        $("#delete-form").attr('action', url);
                                        $('#delete-form').submit();

                                    })
                                }
                            })
                        });
                    }
                </script>

            </div>
        </div>
    </div>
@endsection
