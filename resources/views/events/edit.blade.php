@extends('main')

@section('title', 'Edit')

@section('content')
    <div class="m-1 mb-2">
        <div class="d-flex align-items-center">
            <a href="/events/{{ $current_event->slug }}" class="text-decoration-none text-black ">
                <div class="d-flex align-items-center back">


                    <i class="back-icon" data-feather="chevron-left"></i>
                    <p class="m-0 fs-5">Back</p>
                </div>
            </a>
        </div>

    </div>
    <div class="card">
        <form action="/events/{{ $current_event->slug }}/edit/{{ $current_event->id }}" method="POST">
            {{-- {{ dd("/events/".$current_event->id."/add") }} --}}
            {{ csrf_field() }}
            <div class="m-4">
                <h4 class="centurygothic-bold">Add Event</h4>

                <div class="row mb-1">
                    <div class="col-md">
                        <div class="">
                            <label for="defaultFormControlInput" class="form-label centurygothic-bold"
                                style="letter-spacing: 0.5px">Event Name</label>
                            <input type="text" class="form-control" id="title"
                                placeholder="An Ordinary Event" aria-describedby="defaultFormControlHelp" name="name" />
                            <div id="defaultFormControlHelp" class="form-text">
                            </div>

                        </div>

                    </div>
                    <div class="col-md">
                        <div class="">
                            <label for="defaultFormControlInput" class="form-label centurygothic-bold"
                                style="letter-spacing: 0.5px">Slug</label>
                            <input type="text" class="form-control" id="slug"
                                placeholder="an-ordinary-event" readonly aria-describedby="defaultFormControlHelp"
                                name="slug" />
                            <div id="defaultFormControlHelp" class="form-text">
                            </div>

                        </div>

                    </div>


                </div>
                <div class="row mb-1">

                    <div class="col-md">
                        <label for="defaultFormControlInput" class="form-label centurygothic-bold"
                            style="letter-spacing: 0.5px">Event Creator</label>
                        <input type="text" class="form-control" id="defaultFormControlInput" placeholder="John Doe"
                            aria-describedby="defaultFormControlHelp" name="creator" />
                        <div id="defaultFormControlHelp" class="form-text">

                        </div>

                    </div>

                </div>
                <div class="row mb-1">
                    <div class="col-md">
                        <div>
                            <label for="exampleFormControlTextarea1" class="centurygothic-bold form-label"
                                style="letter-spacing: 0.5px">Event Topic</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                placeholder="Discussing about an ordinary problem, expecting an ordinary solution" name="topic"></textarea>
                        </div>

                    </div>


                </div>
                <div class="row mb-1">
                    <div class="col-md">
                        <div class="">
                            <label for="defaultFormControlInput" class="form-label centurygothic-bold"
                                style="letter-spacing: 0.5px"> Start Date</label>
                            <input type="text" class="form-control" id="defaultFormControlInput" placeholder="John Doe"
                                aria-describedby="defaultFormControlHelp" name="start_date" />
                            <div id="defaultFormControlHelp" class="form-text">
                            </div>

                        </div>

                    </div>


                </div>

                <div class="mt-3 add-button">
                    <input type="submit" class="btn btn-success">
                </div>
            </div>
        </form>

    </div>
@endsection
