@extends('main')

@section('title', 'Add')

@section('content')
    <div class="m-1 mb-3">
        <div class="d-flex align-items-center">
            <a href="/events/{{ $current_event->id }}" class="text-decoration-none text-black ">
                <div class="d-flex align-items-center back">


                    <i class="back-icon" data-feather="chevron-left"></i>
                    <p class="m-0 fs-5">Back</p>
                </div>
            </a>
        </div>

    </div>
    <div class="card">
        <div class="m-4">
            <h4>Add Attendee</h4>
            <div class="row">
                <div class="col-md-6">
                    <div class="">
                        <label for="defaultFormControlInput" class="form-label">Name</label>
                        <input type="text" class="form-control" id="defaultFormControlInput" placeholder="Bagas Arianto"
                            aria-describedby="defaultFormControlHelp" />
                        <div id="defaultFormControlHelp" class="form-text">
                        </div>

                    </div>

                </div>
                <div class="col-md-6">
                    <div>
                        <label for="defaultFormControlInput" class="form-label">Email</label>
                        <input type="email" class="form-control" id="defaultFormControlInput"
                            placeholder="bagas.arianto@eveger.com" aria-describedby="defaultFormControlHelp" />
                        <div id="defaultFormControlHelp" class="form-text">
                        </div>
                    </div>

                </div>

            </div>
            <div class="row">
                <div class="col-md-6">

                    <div>
                        <label for="defaultFormControlInput" class="form-label">Role</label>
                        <input type="email" class="form-control" id="defaultFormControlInput" placeholder="Host"
                            aria-describedby="defaultFormControlHelp" />
                        <div id="defaultFormControlHelp" class="form-text">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">

                    <div>
                        <label for="defaultFormControlInput" class="form-label">Phone</label>
                        <input type="email" class="form-control" id="defaultFormControlInput" placeholder="08XXXXXXXXX"
                            aria-describedby="defaultFormControlHelp" />
                        <div id="defaultFormControlHelp" class="form-text">
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-3 add-button">
                <div class="btn btn-success">Tambah</div>
            </div>
        </div>

    </div>
@endsection
