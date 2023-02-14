
{{-- End of Side Bar --}}
{{-- Side Bar --}}
<div class="d-flex col-md-2 col-lg-3 flex-column flex-shrink-0 vh-100  gradient-custom" id="sidebar"
    style="width: 280px;">
    
    <div id="navToggle" class="text-center bg-secondary-color p-1 rounded-circle"><h3 id="navToggleText" class="text-dark">‹</h3></div>
    <div id="navToggle2" class="text-center bg-secondary-color p-1 rounded-circle">
        <a role="button" href="{{ route('student') }}" id="navToggleText2" class="text-dark pt-2 btn rounded-circle btnToggle">D</a>
    </div>
    <div id="navToggle3" class="text-center bg-secondary-color p-1 rounded-circle">
        <a role="button" href="{{ route('gradeviewer') }}" id="navToggleText3" class="text-dark pt-2 btn rounded-circle btnToggle">G</a>
    </div>
    
    <div id="navToggle4" class="text-center bg-secondary-color p-1 rounded-circle">
        <a role="button" href="{{ route('studentaccount') }}" id="navToggleText4" class="text-dark pt-2 btn rounded-circle btnToggle">E</a>

    </div>
    <div id="navToggle5" class="text-center bg-secondary-color p-1 rounded-circle">
        <a role="button" href="{{ route('studentchangepassword') }}" id="navToggleText5" class="text-dark pt-2 btn rounded-circle btnToggle">A</a>
    </div>
    <div class="text-center my-5 ">
        <img src="{{ asset('image/logo.png') }}" class="rounded" style="width: 200px !important;"
            alt="Mindanao Kokusai Daigaku Logo">
            <h4 class="h4 mt-5">Hello Student</h4>
            <p class="">Account ID: MKD105915</p>
    </div>
    {{-- sidebarActive --}}
    <ul class="nav  text-light flex-column mb-auto">
        <li class="nav-item my-1 hoverOfSidebar">
            <a href="{{ route('student') }}" class="nav-link link-light sideBarLink py-3">
                <svg class="bi me-2" width="16" height="16">
                    <use xlink:href="#home"></use>
                </svg>
                Dashboard
            </a>
        </li>
        <li class="nav-item my-1 hoverOfSidebar">
            <a href="{{ route('gradeviewer') }}" class="nav-link link-light sideBarLink py-3">
                <svg class="bi me-2" width="16" height="16">
                    <use xlink:href="#speedometer2"></use>
                </svg>
                Grade Viewer
            </a>
        </li>
        <li class="nav-item my-1 hoverOfSidebar">
            <a href="{{ route('studentaccount') }}" class="nav-link link-light sideBarLink py-3">
                <svg class="bi me-2" width="16" height="16">
                    <use xlink:href="#speedometer2"></use>
                </svg>
                Enrollment Form -x
                {{-- just a view and print pdf --}}
            </a>
        </li>
        <li class="nav-item my-1 hoverOfSidebar">
            <a href="{{ route('studentchangepassword') }}" class="nav-link link-light sideBarLink py-3">
                <svg class="bi me-2" width="16" height="16">
                    <use xlink:href="#speedometer2"></use>
                </svg>
                Account
            </a>
        </li>
    </ul>
</div>
