@extends('main')

@section('title', 'Add')

@section('content')
    <div class="m-1 mb-2">
        <div class="d-flex align-items-center">
            <a href="/events/{{ $current_event->id }}" class="text-decoration-none text-black ">
                <div class="d-flex align-items-center back" >


                    <i class="back-icon" data-feather="chevron-left"></i>
                    <p class="m-0 fs-5" >Back</p>
                </div>
            </a>
        </div>

    </div>
    <div class="card">
        <form action="/events/{{ $current_event->id }}/add" method="POST">
            {{-- {{ dd("/events/".$current_event->id."/add") }} --}}
            {{ csrf_field() }}
            <div class="m-4">
                <input type="hidden" name="event_id" value="{{ $current_event->id }}">
                <h4 class="centurygothic-bold">Add Attendee</h4>
                
                <div class="row">
                    <div class="col-md-6">
                        <div class="">
                            <label for="defaultFormControlInput" class="form-label centurygothic-bold">Name</label>
                            <input type="text" class="form-control" id="defaultFormControlInput"
                                placeholder="Bagas Arianto" aria-describedby="defaultFormControlHelp" name="name"/>
                            <div id="defaultFormControlHelp" class="form-text">
                            </div>

                        </div>

                    </div>
                    <div class="col-md-6">
                        
                        <div>
                            <label for="defaultFormControlInput" class="form-label centurygothic-bold">Role</label>
                            <input type="text" class="form-control" id="defaultFormControlInput" placeholder="Host"
                                aria-describedby="defaultFormControlHelp" name="role"/>
                            <div id="defaultFormControlHelp" class="form-text">
                            </div>
                        </div>

                    </div>

                </div>
                <div class="row">
                    <div class="col-md">
                        <div>
                            <label for="defaultFormControlInput" class="form-label centurygothic-bold">Email</label>
                            <input type="email" class="form-control" id="defaultFormControlInput"
                                placeholder="bagas.arianto@eveger.com" aria-describedby="defaultFormControlHelp" name="email"/>
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
