@extends('main')

@section('content')
    <div class="content-header mb-1">
        <h2 class="centurygothic-bold">Welcome, {{ auth()->user()->username }}!</h2>
    </div>
    <div class="content-body mb">
        @if (Session::has('success'))
            <script>
                toastr.success("{!! session('success') !!}");
            </script>
            {{-- @elseif(Session::has('deleted'))
                    <script>
                        toastr.success('Attendee deleted successfully!');
                    </script> --}}
        @endif
    </div>
@endsection
