@extends('main')

@section('content')
    <div class="content-header mb-1">
        <h2 class="centurygothic-bold">Dashboard</h2>
    </div>
    <div class="content-body mb">
        <div class="row">
            <div class="col-md-4">
                <div class="card centurygothic-bold">
                    <div class="card-header fs-4 py-3 pb-0">
                        Events
                    </div>
                    <div class="card-body centurygothic fs-5">
                        {{ count($events) }}
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card centurygothic-bold">
                    <div class="card-header fs-4 py-3 pb-0">
                        Incoming Events
                    </div>
                    <div class="card-body centurygothic fs-5">
                        {{ count($upcoming_events) }}
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card centurygothic-bold">
                    <div class="card-header fs-4 py-3 pb-0">
                        Today's Events
                    </div>
                    <div class="card-body centurygothic fs-5">
                        {{ count($ongoing_events) }}
                    </div>
                </div>
            </div>
        </div>
        <div class="row pt-4">

            <div class="col-md">
                <div class="card centurygothic-bold">
                    <div class="card-header fs-4 py-3 pb-4">
                        Incoming Events
                    </div>
                    <div class="card-body centurygothic fs-5">
                        <div class="attendees-table-body scrollbar scrollbar-attendees pt-2"
                            style="height: 43vh;overflow-y: auto; overflow-x:hidden; ">
                            @foreach ($upcoming_events as $upcoming_event)
                                <a href="/events/{{ $upcoming_event->slug }}">
                                    <div class="upcoming-event d-flex justify-content-between p-3 mb-3 sneat-black">
                                        <div class="detail-names d-flex flex-column justify-content-start">
                                            <div class="">
                                                <p class="m-0 fs-6 fw-bold text-black">{{ $upcoming_event->name }}</p>

                                            </div>
                                            <div class="">
                                                <p class="m-0 fs-6">{{ $upcoming_event->creator }}</p>

                                            </div>

                                        </div>
                                        <div class="detail-date">
                                            <div class="">

                                                <p class="fs-6">
                                                    {{ $carbon::parse($upcoming_event->start_date)->format('jS F, Y') }}</p>

                                            </div>

                                        </div>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
@endsection
