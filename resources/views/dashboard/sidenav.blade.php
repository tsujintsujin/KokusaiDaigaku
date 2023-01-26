{{-- Side Bar --}}
<div class="d-flex col-3 flex-column flex-shrink-0 vh-100 dashboardContainer" id="sidebar" style="width: 280px;">
    <div class="text-center my-5 ">
        <img src="https://mkdph.com/wp-content/uploads/2022/06/MKD-logo-93p.png" class="rounded"
            alt="Mindanao Kokusai Daigaku Logo">
        <h4 class="h4 mt-5">Hello Admin</h4>
        <p class="">Account ID: MKD105915</p>
    </div>

    <ul class="nav  nav-pills text-light flex-column mb-auto">
        <li class="nav-item my-1 hoverOfSidebar">
            <a href="{{ route('dashboard') }}" class="nav-link link-light sideBarLink py-3">
                <svg class="bi me-2" width="16" height="16">
                    <use xlink:href="#home"></use>
                </svg>
                Dashboard
            </a>
        </li>
        <li class="nav-item my-1 hoverOfSidebar">
            <a href="{{ route('add_courses_subjects') }}" class="nav-link link-light sideBarLink py-3">
                <svg class="bi me-2" width="16" height="16">
                    <use xlink:href="#speedometer2"></use>
                </svg>
                Add Course / Subjects
            </a>
        </li>
        <li class="nav-item my-1 hoverOfSidebar">
      
            <div class="dropdown">
                <a class="nav-link link-light sideBarLink py-3 dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <svg class="bi me-2" width="16" height="16">
                        <use xlink:href="#table"></use>
                    </svg>
                    Account Management
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="{{ route('student_account_management') }}">Manage Accounts</a></li>
                  <li><a class="dropdown-item" href="{{ route('change_password_account_management') }}">Change Password Req.</a></li>
                  
                </ul>
              </div>
        </li>
        <li class="nav-item my-1 hoverOfSidebar">
            <a href="{{ route('pre_enrolled_students') }}" class="nav-link link-light sideBarLink py-3">
                <svg class="bi me-2" width="16" height="16">
                    <use xlink:href="#grid"></use>
                </svg>
                Pre Enrolled Students
            </a>
        </li>
        <li class="nav-item my-1 hoverOfSidebar">
            <a href="{{ route('admin_account') }}" class="nav-link link-light sideBarLink py-3">
                <svg class="bi me-2" width="16" height="16">
                    <use xlink:href="#grid"></use>
                </svg>
                Admin Account
            </a>
        </li>
    </ul>
</div>

{{-- End of Side Bar --}}
