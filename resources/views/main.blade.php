<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        {{-- css imports --}}
        <title>Eveger | @yield('title')</title>
        <link rel="stylesheet" href="{{ asset('assets/vendor/css/core.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/vendor/css/theme-default.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/vendor/css/theme-default.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/vendor/css/toastr.css') }}">
        <link rel="stylesheet" type="text/css"
            href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

        {{-- <link rel="stylesheet" href="{{}}"> --}}

        {{-- js imports --}}

        <script src="{{ asset('assets/vendor/js/jquery.js') }}"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
        <script src="{{ asset('assets/vendor/js/bootstrap.js') }}"></script>
        <script src="{{ asset('assets/vendor/js/feather.js') }}"></script>
        <script src="{{ asset('assets/vendor/js/toastr.js') }}"></script>
        <script src="{{ asset('assets/vendor/libs/sweetalert2/sweetalert2.all.min.js') }}"></script>
    </head>

    <body>
        <div class="row shadow-sm m-0">
            {{-- <nav class="navbar navbar-expand-lg bg-body-tertiary ">
            <div class="container-fluid ps-2">
                
                <a class="navbar-brand p-0 fs-3 text-black centurygothic-bold" href="/">ev<span
                        style="color: rgb(239, 90, 74)">e</span>ger</a>
                

            </div>
        </nav> --}}
            <nav class="navbar navbar-expand-lg bg-body-tertiary py-2 bg-white">
                <div class="container-fluid ps-2 px-1 d-flex flex-row justify-content-between">
                    <a class="navbar-brand p-0 fs-3 text-black centurygothic-bold" href="/dashboard">ev<span
                            style="color: rgb(239, 90, 74)">e</span>ger</a>
                    <div class="" id="navbarNavDropdown">
                        <div class="dropdown">
                            <a class="profile-menu nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Welcome, {{ auth()->user()->username }}!
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a href="/logout" class="dropdown-item">
                                    <div class="d-flex gap-2 align-items-center">
                                        <i style="widht:14px; height:14px" data-feather="log-out"></i>
                                        Logout
                                    </div>
                                </a></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <div class="row-bawah d-flex">
            <div class=" bg-white shadow-sm events-sidebar sticky-top"
                style="width:25vw;margin-top: 1px; height: 91vh; border-radius: 0 0 0.5rem">
                <div
                    class="d-flex align-items-center flex-shrink-0 p-3 link-dark text-decoration-none border-bottom sticky-top justify-content-between">
                    <div>
                        <span class="fs-4 centurygothic-bold text-black">Events</span>

                    </div>
                    <div class="d-flex align-items-center m-0 p-0">
                        <a href="/add">
                            <div class="p-1 rounded add-event-button d-flex align-items-center gap-2 "
                                style="font-size: 16px">

                                <i style="width: 22px; height: 22px" data-feather="plus"></i>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="d-flex flex-column align-items-stretch flex-shrink-0 border-bottom bg-white scrollbar scrollbar-events sticky-top"
                    style="height:61.25vh; overflow-y: auto; overflow-x:hidden;">

                    <div class="list-group list-group-flush border-bottom scrollarea">
                        @foreach ($events as $event)
                            <div
                                class="event-bar d-flex flex-row list-group-item list-group-item-action lh-tight border-end-0 p-0 position-relative {{ request()->is('events/' . $event->slug . $sidebar_activation) ? 'my-active' : '' }}">

                                <a href="/events/{{ $event->slug }}" class="flex-fill  py-3 ps-4 pb-2"
                                    aria-current="true">
                                    <div class="{{ request()->is('events/' . $event->slug . $sidebar_activation) ? 'active-block' : '' }}"
                                        style=""></div>
                                    <div class="event-detail d-flex flex-column">
                                        <div class="d-flex flex-row justify-content-between">
                                            <p class="h5 m-0 centurygothic-bold"
                                                style="color: rgb(37, 37, 37) !important">
                                                {{ $event->name }}</p>

                                        </div>

                                        <p style="color: rgb(37, 37, 37) !important">{{ $event->creator }}</p>
                                    </div>

                                    <div class="event-time">

                                        <div class="col-10 mb-1" style="color: rgb(102, 102, 102) !important">
                                            {{ $carbon::parse($event->start_date)->format('jS F, Y') }}</div>
                                    </div>

                                </a>
                                <div data-bs-toggle="dropdown" aria-expanded="false"
                                    class="event-options d-flex justify-content-center align-items-center text-center position-absolute {{ request()->is('events/' . $event->slug . $sidebar_activation) ? '' : 'd-none' }}">

                                    <i style="width:18px; height:18px;" data-feather="more-vertical"></i>
                                </div>

                                <div class="dropdown-menu dropdown-menu-end">

                                    <a class="dropdown-item" href="/events/{{ $event->slug }}/edit">
                                        <div class="d-flex gap-2 align-items-center">
                                            <i style="widht:18px; height:18px" data-feather="edit"></i>
                                            <span>Edit</span>
                                        </div>
                                    </a>
                                    <form id="delete-form" action="" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button
                                            onclick="deleteEvent('/events/{{ $event->slug }}/delete', '{{ $event->name }}')"
                                            type="button" class="dropdown-item">
                                            <div class="d-flex gap-2 align-items-center">
                                                <i style="widht:18px; height:18px" data-feather="trash-2"></i>
                                                Delete
                                            </div>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="p-2 d-flex justify-content-center">

                </div>

            </div>

            <div class="col p-4 pb-0 pt-3">
                @yield('content')

            </div>
        </div>

        <script>
            $(document).ready(function() {
                $('.events-sidebar').hover(function() {
                    // over
                    $('.scrollbar-events').addClass('active-scrollbar');
                }, function() {
                    // out
                    $('.scrollbar-events').removeClass('active-scrollbar');
                });
                $('.attendees-table-body').hover(function() {
                    // over
                    $('.scrollbar-attendees').addClass('active-scrollbar');
                }, function() {
                    // out
                    $('.scrollbar-attendees').removeClass('active-scrollbar');
                });
            });

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

            feather.replace();


            // if (toastTrigger) {
            //     const toastBootstrap = bootstrap.Toast.getOrCreateInstance(toastLiveExample)
            //     toastTrigger.addEventListener('click', () => {
            //         toastBootstrap.show()
            //     })
            // }
        </script>
    </body>

</html>
