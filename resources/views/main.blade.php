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
                    <a class="navbar-brand p-0 fs-3 text-black centurygothic-bold" href="/">ev<span
                            style="color: rgb(239, 90, 74)">e</span>ger</a>
                    <div class="" id="navbarNavDropdown">
                        <div class="dropdown">
                            <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Welcome, {{ auth()->user()->username }}!
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a href="/logout" class="dropdown-item">Logout</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <div class="row-bawah d-flex">
            <div class=" bg-white shadow-sm events-sidebar"
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
                <div class="d-flex flex-column align-items-stretch flex-shrink-0 border-bottom bg-white scrollbar scrollbar-events"
                    style="height:61.25vh; overflow-y: auto; overflow-x:hidden;">

                    <div class="list-group list-group-flush border-bottom scrollarea">
                        @foreach ($events as $event)
                            <a href="/events/{{ $event->slug }}"
                                class=" list-group-item list-group-item-action py-3 ps-4 pb-2 lh-tight {{ request()->is('events/' . $event->slug . $sidebar_activation) ? 'my-active' : '' }}"
                                aria-current="true">
                                <div class="{{ request()->is('events/' . $event->slug . $sidebar_activation) ? 'active-block' : '' }}"
                                    style=""></div>
                                <div class="event-detail">
                                    <div class="d-flex flex-column">
                                        <p class="h5 m-0 centurygothic-bold" style="color: rgb(37, 37, 37) !important">
                                            {{ $event->name }}</p>
                                        <p class="">{{ $event->creator }}</p>
                                    </div>
                                </div>

                                <div class="event-time">

                                    <div class="col-10 mb-1" style="color: rgb(102, 102, 102) !important">
                                        {{ $carbon::parse($event->start_date)->format('jS F, Y') }}</div>
                                </div>
                            </a>
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
