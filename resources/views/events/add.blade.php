@extends('main')

@section('title', 'Add Event')

@section('content')
    <div class="m-1 mb-2">
        <div class="d-flex align-items-center">
            <a href="{{ URL::previous() }}" class="text-decoration-none sneat-black">
                <div class="d-flex align-items-center back">


                    <i class="back-icon" data-feather="chevron-left"></i>
                    <p class="m-0 fs-5">Home</p>
                </div>
            </a>
        </div>

    </div>
    <div class="card">
        <form action="/add" method="POST">
            {{-- {{ dd("/events/".$current_event->id."/add") }} --}}
            {{ csrf_field() }}
            <div class="m-4">
                <h4 class="centurygothic-bold">Add Event</h4>

                <div class="row">
                    <div class="col-md">
                        <div class="">
                            <label for="defaultFormControlInput" class="form-label centurygothic-bold"
                                style="letter-spacing: 0.5px">Event Name</label>
                            <input type="text" class="form-control" id="defaultFormControlInput"
                                placeholder="An Ordinary Event" aria-describedby="defaultFormControlHelp" name="name" />
                            <div id="defaultFormControlHelp" class="form-text">
                            </div>

                        </div>

                    </div>


                </div>
                <div class="row">
                    <div class="col-md">
                        <div>
                            <label for="exampleFormControlTextarea1" class="centurygothic-bold form-label"
                                style="letter-spacing: 0.5px">Event Topic</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                placeholder="Discussing about an ordinary problem, expecting an ordinary solution"></textarea>
                        </div>

                    </div>


                </div>
                <div class="row">
                    <div class="col-md">
                        <div class="">
                            <label for="defaultFormControlInput" class="form-label centurygothic-bold"
                                style="letter-spacing: 0.5px">Event Creator</label>
                            <input type="text" class="form-control" id="defaultFormControlInput" placeholder="John Doe"
                                aria-describedby="defaultFormControlHelp" name="creator" />
                            <div id="defaultFormControlHelp" class="form-text">
                            </div>

                        </div>

                    </div>


                </div>
                <div class="row">
                    <div class="col-md">
                        <div class="">
                            <label for="defaultFormControlInput" class="form-label centurygothic-bold"
                                style="letter-spacing: 0.5px">Date</label>
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
        <script>
            $(function() {
              $('input[name="start_date"]').daterangepicker({
                singleDatePicker: true,
                showDropdowns: true,
                drops: 'up',
                minYear: 1901,
                maxYear: parseInt(moment().format('YYYY'),10)
              });
            });
            </script>
    </div>
@endsection
