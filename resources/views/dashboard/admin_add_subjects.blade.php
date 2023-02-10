@extends('dashboard.admin_layout')
@include('cal_css')
@section('title', 'Subjects')
@section('content')
<div class="container-fluid justify-content-center p-5  ms-3 me-4 rounded-top-left-1 rounded-top-right-1" id="contentM">
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
