@extends('dashboard.admin_layout')
@section('title', 'Course')
@section('content')
    <div class="container justify-content-center col-9 py-5 rounded-top-left-1 rounded-top-right-1">
        <div class="row">
            <div class="col d-flex flex-column rounded-top">
                @livewire('course-controller')
            </div>
        </div>
    </div>
@endsection
