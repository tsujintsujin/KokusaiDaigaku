{{-- Side Bar --}}
<div class="d-flex col-md-2 col-lg-3 flex-column flex-shrink-0 vh-100 dashboardContainer " id="sidebar"
    style="width: 280px;">
    <div class="text-center my-5 ">
        <img src="https://mkdph.com/wp-content/uploads/2022/06/MKD-logo-93p.png" class="rounded"
            alt="Mindanao Kokusai Daigaku Logo">
        <h4 class="h4 mt-5">Hello Admin</h4>
        <p class="">Account ID: MKD105915</p>
    </div>
    {{-- sidebarActive --}}
    <ul class="nav text-light flex-column mb-auto">
        <li class="nav-item my-1 hoverOfSidebar">
            <a href="{{ route('admin') }}" class="nav-link link-light sideBarLink py-3">
                <svg class="bi me-2" width="16" height="16">
                    <use xlink:href="#home"></use>
                </svg>
                Dashboard
            </a>
        </li>
        <li class="nav-item my-1 hoverOfSidebar">
            <a href="{{ route('courses') }}" class="nav-link link-light sideBarLink py-3">
                <svg class="bi me-2" width="16" height="16">
                    <use xlink:href="#speedometer2"></use>
                </svg>
                Courses
            </a>
        </li>
        <li class="nav-item my-1 hoverOfSidebar">
            <a href="{{ route('sections') }}" class="nav-link link-light sideBarLink py-3">
                <svg class="bi me-2" width="16" height="16">
                    <use xlink:href="#speedometer2"></use>
                </svg>
                Sections
            </a>
        </li>
        <li class="nav-item my-1 hoverOfSidebar">
            <a href="{{ route('subjects') }}" class="nav-link link-light sideBarLink py-3">
                <svg class="bi me-2" width="16" height="16">
                    <use xlink:href="#speedometer2"></use>
                </svg>
                Subjects
            </a>
        </li>
        <li class="nav-item my-1 hoverOfSidebar">
            <a class="nav-link link-light sideBarLink py-3" data-bs-toggle="collapse" data-bs-target="#home-collapse"
                aria-expanded="false" >
                <svg class="bi me-2" width="16" height="16">
                    <use xlink:href="#speedometer2"></use>
                </svg>
                Accounts &nbsp; ▾
            </a>
        </li>
        <div class="collapse" id="home-collapse">
            <li class="nav-item my-1 hoverOfSidebar ps-4">
                <a href="{{ route('student_management') }}" class="nav-link link-light sideBarLink py-3 ">
                    <svg class="bi me-2" width="16" height="16">
                        <use xlink:href="#speedometer2"></use>
                    </svg>
                    Students
                </a>
            </li>
            <li class="nav-item my-1 hoverOfSidebar ps-4">
                <a href="{{ route('teacher_management') }}" class="nav-link link-light sideBarLink py-3">
                    <svg class="bi me-2" width="16" height="16">
                        <use xlink:href="#speedometer2"></use>
                    </svg>
                    Teachers
                </a>
            </li>
            <li class="nav-item my-1 hoverOfSidebar ps-4">
                <a href="{{ route('change_password_account_management') }}"
                    class="nav-link link-light sideBarLink py-3">
                    <svg class="bi me-2" width="16" height="16">
                        <use xlink:href="#speedometer2"></use>
                    </svg>
                    Change Password Req.
                </a>
            </li>
        </div>
        <li class="nav-item my-1 hoverOfSidebar">
            <a href="" class="nav-link link-light sideBarLink py-3">
                <svg class="bi me-2" width="16" height="16">
                    <use xlink:href="#grid"></use>
                </svg>
                Assign Subjects - x
            </a>
        </li>
        <li class="nav-item my-1 hoverOfSidebar">
            <a href="{{route('archive')}}" class="nav-link link-light sideBarLink py-3">
                <svg class="bi me-2" width="16" height="16">
                    <use xlink:href="#grid"></use>
                </svg>
                Archive
            </a>
        </li>
        <li class="nav-item my-1 hoverOfSidebar">
            <a href="{{ route('pre_enroll') }}" class="nav-link link-light sideBarLink py-3">
                <svg class="bi me-2" width="16" height="16">
                    <use xlink:href="#grid"></use>
                </svg>
                Pre Enrolled Students
            </a>
        </li>
        <li class="nav-item my-1 hoverOfSidebar">
            <a href="{{ route('adminaccount') }}" class="nav-link link-light sideBarLink py-3">
                <svg class="bi me-2" width="16" height="16">
                    <use xlink:href="#grid"></use>
                </svg>
                Admin Account
            </a>
        </li>
    </ul>
</div>
