<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/vendor/css/core.css">
    <link rel="stylesheet" href="../assets/css/style.css">
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


        <div class="bg-white shadow-sm" style="margin-top: 1px">
            <div
                class="d-flex align-items-center flex-shrink-0 p-3 link-dark text-decoration-none border-bottom sticky-top">
                <div>


                    <span class="fs-5 fw-semibold">Events</span>
                </div>
            </div>
            <div class="d-flex flex-column align-items-stretch flex-shrink-0 bg-white scrollbar"
                style="width: 380px; height:79vh; overflow-y: auto; overflow-x:hidden;">

                <div class="list-group list-group-flush border-bottom scrollarea">
                    @foreach ($events as $event)
                        <a href="/events/{{ $event->id }}" class="list-group-item list-group-item-action py-3 lh-tight"
                            aria-current="true">
                            <div class="d-flex w-100 align-items-center justify-content-between">
                                <strong class="mb-1">{{ $event->name }}</strong>
                                <small class="text-muted">Wed</small>
                            </div>
                            <div class="col-10 mb-1 small">{{ $event->leader }}</div>
                        </a>
                    @endforeach





                </div>
            </div>
        </div>
        <div class="col p-3 ">
            @yield('content')

        </div>
    </div>
</body>

</html>
