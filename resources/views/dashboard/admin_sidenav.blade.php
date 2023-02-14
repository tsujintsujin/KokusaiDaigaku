{{-- Side Bar --}}
<div class="d-flex col-md-2 col-lg-3 flex-column flex-shrink-0 vh-100  gradient-custom" id="sidebar"
    style="width: 280px;">

    
    <div id="navToggle" class="text-center bg-secondary-color p-1 rounded-circle">
        <h3 id="navToggleText" class="text-dark">‹</h3>
    </div>
    
    {{-- dashboardTitleContainer --}}
    <div class="text-center my-5 ">
        <img src="{{ asset('kokusai_logo.png') }}" class="rounded" alt="Mindanao Kokusai Daigaku Logo">
        <h4 class="h4 mt-5">Hello Admin</h4>
        <p class="">Account ID: MKD105915</p>
    </div>
    {{-- sidebarActive --}}
    <ul class="nav text-light flex-column mb-auto">
        <li class="nav-item my-1 hoverOfSidebar">
            <a href="{{ route('admin') }}" class="nav-link link-light sideBarLink py-3">                
                    <use xlink:href="#home"></use>
                    <img class="vri-icon me-2 ms-4" src="{{ asset('image/icon-dashboard.png') }}" alt="">
                Dashboard
            </a>
        </li>
        <li class="nav-item my-1 hoverOfSidebar">
            <a href="{{ route('courses') }}" class="nav-link link-light sideBarLink py-3">               
                    <use xlink:href="#speedometer2"></use>
                    <img class="vri-icon me-2 ms-4" src="{{ asset('image/icon-course.png') }}" alt="">       
                Courses
            </a>
        </li>
        <li class="nav-item my-1 hoverOfSidebar">
            <a href="{{ route('sections') }}" class="nav-link link-light sideBarLink py-3">                
                    <use xlink:href="#speedometer2"></use>
                    <img class="vri-icon me-2 ms-4" src="{{ asset('image/icon-section.png') }}" alt="">    
                Sections
            </a>
        </li>
        <li class="nav-item my-1 hoverOfSidebar">
            <a href="{{ route('subjects') }}" class="nav-link link-light sideBarLink py-3">                
                    <use xlink:href="#speedometer2"></use>
                    <img class="vri-icon me-2 ms-4" src="{{ asset('image/icon-subject.png') }}" alt="">      
                Subjects
            </a>
        </li>
        <li class="nav-item my-1 hoverOfSidebar">
            <a class="nav-link link-light sideBarLink py-3" data-bs-toggle="collapse" data-bs-target="#home-collapse"
                aria-expanded="false">                
                    <use xlink:href="#speedometer2"></use>
                    <img class="vri-icon me-2 ms-4" src="{{ asset('image/icon-accounts.png') }}" alt="">   
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
            <a href="{{ route('assign_subject') }}" class="nav-link link-light sideBarLink py-3">                
                    <use xlink:href="#grid"></use>
                    <img class="vri-icon me-2 ms-4" src="{{ asset('image/icon-assign-subject.png') }}" alt="">   
                Assign Subjects
            </a>
        </li>
        <li class="nav-item my-1 hoverOfSidebar">
            <a href="{{ route('archive') }}" class="nav-link link-light sideBarLink py-3">                
                    <use xlink:href="#grid"></use>
                    <img class="vri-icon me-2 ms-4" src="{{ asset('image/icon-archive.png') }}" alt="">   
                Archive
            </a>
        </li>
        <li class="nav-item my-1 hoverOfSidebar">
            <a href="{{ route('pre_enroll') }}" class="nav-link link-light sideBarLink py-3">                
                    <use xlink:href="#grid"></use>
                    <img class="vri-icon me-2 ms-4" src="{{ asset('image/icon-pre-enrolled.png') }}" alt="">   
                Pre Enrolled Students
            </a>
        </li>
        <li class="nav-item my-1 hoverOfSidebar">
            <a href="{{ route('adminaccount') }}" class="nav-link link-light sideBarLink py-3">                
                    <use xlink:href="#grid"></use>
                    <img class="vri-icon me-2 ms-4" src="{{ asset('image/icon-admin.png') }}" alt="">   
                Admin Account
            </a>
        </li>
    </ul>
</div>
