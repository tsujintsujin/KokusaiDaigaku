@extends('dashboard.admin_layout')
@section('title', 'Subjects')
@section('content')
    <div class="container justify-content-center col-9 py-5 rounded-top-left-1 rounded-top-right-1">
        <div class="row">
            <div class="col dashboardContainer d-flex flex-column rounded-top">
                <div class="row dashboardTitleContainer ps-4 rounded-top">
                    <h3 class="fw-bold pt-2">Subjects</h3>
                </div>
                @livewire('subject-controller')
            </div>
        </div>
    </div>
@endsection
