<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Eveger | @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/core.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/theme-default.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>
    <div class="row shadow-sm m-0">
        <nav class="navbar navbar-expand-lg bg-body-tertiary py-2 bg-white">
            <div class="container-fluid ps-2">
                <a class="navbar-brand p-0 fs-3 text-black fw-bold" href="#">eveger</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

            </div>
        </nav>
    </div>
    <div class="row-bawah d-flex">


        <div class="bg-white shadow-sm" style="margin-top: 1px; height: 91vh">
            <div
                class="d-flex align-items-center flex-shrink-0 p-3 link-dark text-decoration-none border-bottom sticky-top">
                <div>


                    <span class="fs-4 fw-semibold">Events</span>
                </div>
            </div>
            <div class="d-flex flex-column align-items-stretch flex-shrink-0 border-bottom bg-white scrollbar"
                style="width: 380px;height:70vh; overflow-y: auto; overflow-x:hidden;">

                <div class="list-group list-group-flush border-bottom scrollarea">
                    @foreach ($events as $event)
                        <a href="/events/{{ $event->id }}"
                            class="list-group-item list-group-item-action py-3 ps-4 lh-tight events-list-item {{ Request::url() == url('/events/' . $event->id) ? 'active my-active' : '' }}"
                            aria-current="true">
                            <div class="{{ Request::url() == url('/events/' . $event->id) ? 'active-block' : '' }}"
                                style=""></div>

                            <div class="d-flex w-100 align-items-center justify-content-between">
                                <strong class="mb-1">{{ $event->name }}</strong>
                                <small
                                    class="text-muted">{{ $carbon->parse($event->start_date)->format('d/m/Y') }}</small>
                            </div>
                            <div class="col-10 mb-1 small">{{ $event->leader }}</div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="col p-4 pb-0">
            @yield('content')

        </div>
    </div>
    <script src="{{ asset('assets/vendor/js/feather.js') }}"></script>
    <script>
        feather.replace();
    </script>
</body>



</html>
