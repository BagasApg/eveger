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
        <form action="/events/{{ $current_event->slug }}/edit" method="POST">
            {{-- {{ dd("/events/".$current_event->id."/add") }} --}}
            {{ csrf_field() }}
            <div class="m-4">
                <div class="card-header p-0 d-flex justify-content-between">
                    <h4 class="centurygothic-bold">Add Event</h4>
                </div>

                <div class="row mb-1">
                    <div class="col-md">
                        <div class="">
                            <label for="defaultFormControlInput" class="form-label centurygothic-bold"
                                style="letter-spacing: 0.5px">Event Name</label>
                            <input type="text" class="form-control" id="title"
                                placeholder="{{ $current_event->name }}" value="{{ $current_event->name }}"
                                aria-describedby="defaultFormControlHelp" name="name" />
                            <div id="defaultFormControlHelp" class="form-text">
                            </div>

                        </div>

                    </div>
                    <div class="col-md">
                        <div class="">
                            <label for="defaultFormControlInput" class="form-label centurygothic-bold"
                                style="letter-spacing: 0.5px">Slug (<span class="text-capitalize centurygothic">Cannot <span
                                        class="text-lowercase">be changed!</span></span>)</label>
                            <input type="text" class="form-control" id="slug"
                                placeholder="{{ $current_event->slug }}" value="{{ $current_event->slug }}" readonly
                                aria-describedby="defaultFormControlHelp" name="slug" />
                            <div id="defaultFormControlHelp" class="form-text">
                            </div>

                        </div>

                    </div>

                </div>
                <div class="row mb-1">

                    <div class="col-md">
                        <label for="defaultFormControlInput" class="form-label centurygothic-bold"
                            style="letter-spacing: 0.5px">Event Creator</label>
                        <input type="text" class="form-control" id="defaultFormControlInput"
                            placeholder="{{ $current_event->creator }}" value="{{ $current_event->creator }}"
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
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="{{ $current_event->topic }}"
                                name="topic">{{ $current_event->topic }}</textarea>
                        </div>

                    </div>

                </div>
                <div class="row mb-1">
                    <div class="col-md">
                        <div class="">
                            <label for="defaultFormControlInput" class="form-label centurygothic-bold"
                                style="letter-spacing: 0.5px"> Start Date</label>
                            <input type="text" class="form-control" id="defaultFormControlInput" placeholder="John Doe"
                                aria-describedby="defaultFormControlHelp" name="start_date"
                                value="{{ $carbon::parse($current_event->start_date)->format('m/d/Y') }}" />

                            <div id="defaultFormControlHelp" class="form-text">
                            </div>
                            <input type="hidden" name="id" value="{{ $current_event->id }}">

                        </div>

                    </div>

                </div>

                <div class="mt-3 add-button">
                    <input type="submit" class="btn btn-success">
                </div>
            </div>
        </form>
        <script>
            function deleteEvent(url, eventName) {
                $(document).ready(function() {
                    Swal.fire({
                        title: 'Are you sure?',
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
                                'Event "' + eventName + '" successfully deleted!',
                                'success'
                            ).then(() => {
                                $("#delete-form").attr('action', url);
                                $('#delete-form').submit();

                            })
                        }
                    })
                });
            }

            $(function() {
                $('input[name="start_date"]').daterangepicker({
                    singleDatePicker: true,
                    showDropdowns: true,
                    drops: 'up',
                    minYear: 1901,
                    maxYear: parseInt(moment().format('YYYY'), 10)
                });
            });
        </script>
    </div>
@endsection
