@extends('main')

@section('content')
    <div class="content-header mb-1">
        <h2 class="centurygothic-bold">Welcome, {{ auth()->user()->username }}!</h2>
    </div>
    <div class="content-body mb">
        
    </div>
@endsection