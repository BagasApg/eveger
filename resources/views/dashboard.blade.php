@extends('main')

@section('content')
    <div class="content-header mb-1">
        <h2 class="centurygothic-bold">Dashboard</h2>
    </div>
    <div class="content-body mb">
        <div class="row">
            <div class="col-md-4">
                <div class="card centurygothic-bold">
                    <div class="card-header py-3 pb-0">
                        Events
                    </div>
                    <div class="card-body centurygothic fs-5">
                        5
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card centurygothic-bold">
                    <div class="card-header py-3 pb-0">
                        Events
                    </div>
                    <div class="card-body centurygothic fs-5">
                        5
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card centurygothic-bold">
                    <div class="card-header py-3 pb-0">
                        Events
                    </div>
                    <div class="card-body centurygothic fs-5">
                        5
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
