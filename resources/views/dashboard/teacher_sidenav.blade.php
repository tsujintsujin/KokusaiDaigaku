{{-- Side Bar --}}
<div class="d-flex col-md-2 col-lg-3 flex-column flex-shrink-0 vh-100  gradient-custom" id="sidebar"
    style="width: 280px;">

    <div id="navToggle" class="text-center bg-secondary-color p-1 rounded-circle">
        <h3 id="navToggleText" class="text-dark">‹</h3>
    </div>
    {{-- dashboardTitleContainer --}}
    <div id="navToggle2" class="text-center bg-secondary-color pt-1 rounded-circle">
        <a role="button" href="{{ route('teacher') }}" id="navToggleText2"
            class="text-dark pt-2 btn rounded-circle btnToggle">
            <img class="vri-icon" src="{{ asset('image/icon-dashboard.png') }}" alt="">
        </a>
    </div>


    <div id="navToggle3" class="text-center bg-secondary-color pt-1 rounded-circle">
        <a role="button" href="{{ route('gradeinput') }}" id="navToggleText3"
            class="text-dark pt-2 btn rounded-circle btnToggle">
            <img class="vri-icon" src="{{ asset('image/icon-grade-input.png') }}" alt="">
        </a>
    </div>
    <div id="navToggle4" class="text-center bg-secondary-color pt-1 rounded-circle">
        <a role="button" href="{{ route('teacherchangepassword') }}" id="navToggleText4"
            class="text-dark pt-2 btn rounded-circle btnToggle">
            <img class="vri-icon" src="{{ asset('image/icon-user.png') }}" alt="">
        </a>
    </div>
    <div id="navToggle5" class="text-center bg-secondary-color p-1 rounded-circle" style="display: none">
    </div>
    <div class="text-center my-5 ">
        <a href="{{ route('landing') }}"><img src="{{asset('image/logo.png')}}" style="width:150px !important;" class="rounded"
            alt="Mindanao Kokusai Daigaku Logo"></a>
        <h4 class="h4 mt-5">Hello {{Auth::user()->name}}</h4>
    </div>
    {{-- sidebarActive --}}
    <ul class="nav  text-light flex-column mb-auto">
        <li class="nav-item my-1 hoverOfSidebar">
            <a href="{{ route('teacher') }}" class="nav-link link-light sideBarLink py-3">
                <use xlink:href="#home"></use>
                <img class="vri-icon me-2 ms-4" src="{{ asset('image/icon-dashboard.png') }}" alt="">
                Dashboard
            </a>
        </li>
        <li class="nav-item my-1 hoverOfSidebar">
            <a href="{{ route('gradeinput') }}" class="nav-link link-light sideBarLink py-3">
                <use xlink:href="#speedometer2"></use>
                <img class="vri-icon me-2 ms-4" src="{{ asset('image/icon-grade-input.png') }}" alt="">
                Grade Input
            </a>
        </li>
        <li class="nav-item my-1 hoverOfSidebar">
            <a href="{{ route('teacherchangepassword') }}" class="nav-link link-light sideBarLink py-3">
                <use xlink:href="#speedometer2"></use>
                <img class="vri-icon me-2 ms-4" src="{{ asset('image/icon-user.png') }}" alt="">
                Account
            </a>
        </li>
        <li class="nav-item my-1 hoverOfSidebar">
            <form action="{{ route('logout') }}" method="POST">
                @csrf
            <button type="submit" class="shadow-none btn nav-link link-light sideBarLink ">
                    <img class="vri-icon me-2 ms-4" src="{{ asset('image/icon-user.png') }}" alt="">
               <label class="mt-3">Logout</label>    
            </button>
        </form>
        </li>
    </ul>
</div>
