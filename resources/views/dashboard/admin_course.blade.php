@extends('dashboard.admin_layout')
@section('title', 'Course')
@section('content')
    <div class="container-fluid justify-content-center p-5 me-5 rounded-top-left-1 rounded-top-right-1">
            <div class="col d-flex flex-column rounded-top">
                @livewire('course-controller')
            </div>
    </div>
@endsection
